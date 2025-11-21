<?php
session_start();
include 'config.php';
include 'db.php';

// If user already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Sign In / Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        .landing-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.3);
            padding: 60px 50px;
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        .logo-container {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .access-wireless-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .logo-access {
            color: #7cb342;
            font-size: 32px;
            font-weight: 400;
            letter-spacing: 1px;
        }
        .logo-wireless {
            color: #2c2c2c;
            font-size: 32px;
            font-weight: 600;
            letter-spacing: 1px;
            position: relative;
        }
        .wireless-signal {
            position: relative;
            display: inline-block;
        }
        .signal-dot {
            width: 8px;
            height: 8px;
            background: #1976d2;
            border-radius: 50%;
            position: absolute;
            top: -2px;
            left: 50%;
            transform: translateX(-50%);
        }
        .signal-arcs {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 12px;
        }
        .signal-arc {
            position: absolute;
            border: 2px solid;
            border-radius: 50%;
            border-top: none;
        }
        .signal-arc.arc1 {
            width: 8px;
            height: 4px;
            border-color: #1976d2;
            left: 6px;
            top: 8px;
        }
        .signal-arc.arc2 {
            width: 12px;
            height: 6px;
            border-color: #7cb342;
            left: 4px;
            top: 6px;
        }
        .signal-arc.arc3 {
            width: 16px;
            height: 8px;
            border-color: #558b2f;
            left: 2px;
            top: 4px;
        }
        .logo-registered {
            font-size: 10px;
            color: #666;
            vertical-align: super;
            margin-left: 2px;
        }
        .landing-card h1 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 2.5rem;
        }
        .landing-card p {
            color: #666;
            font-size: 16px;
            margin-bottom: 40px;
        }
        #signInButtonDiv {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 15px;
        }
        #error-message {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="landing-card">
        <div class="logo-container">
            <div class="access-wireless-logo">
                <span class="logo-access">access</span>
                <span class="logo-wireless">
                    WIRE<span class="wireless-signal">
                        L<span class="signal-dot"></span>
                        <div class="signal-arcs">
                            <div class="signal-arc arc1"></div>
                            <div class="signal-arc arc2"></div>
                            <div class="signal-arc arc3"></div>
                        </div>
                    </span>SS
                    <span class="logo-registered">®</span>
                </span>
            </div>
        </div>
        
        <h1>Welcome</h1>
        <p>Sign in with your Google account</p>
        
        <div id="signInButtonDiv"></div>
        
        <div id="error-message" class="alert alert-danger" style="display: none;"></div>
    </div>

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        let isSignUp = false;
        
        function initializeGoogleSignIn() {
            if (typeof google === 'undefined' || !google.accounts) {
                setTimeout(initializeGoogleSignIn, 100);
                return;
            }
            
            // Disable One Tap and auto-select completely
            google.accounts.id.initialize({
                client_id: "<?php echo addslashes(GOOGLE_CLIENT_ID); ?>",
                callback: handleCredentialResponse,
                auto_select: false,
                cancel_on_tap_outside: true,
                itp_support: false,
                ux_mode: "popup",
                use_fedcm_for_prompt: false
            });
            
            // Disable all prompts
            try {
                google.accounts.id.disableAutoSelect();
                google.accounts.id.cancel();
                google.accounts.id.prompt(() => {});
            } catch(e) {}
            
            // Clear stored credentials
            if (typeof localStorage !== 'undefined') {
                try {
                    Object.keys(localStorage).forEach(key => {
                        if (key.includes('google') || key.includes('gid')) {
                            localStorage.removeItem(key);
                        }
                    });
                } catch(e) {}
            }
            
            // Render Sign In Button
            google.accounts.id.renderButton(
                document.getElementById("signInButtonDiv"),
                {
                    theme: "filled_blue",
                    size: "large",
                    type: "standard",
                    text: "signin_with",
                    shape: "rectangular",
                    logo_alignment: "left",
                    width: "100%"
                }
            );
        }
        
        window.onload = function() {
            if (typeof sessionStorage !== 'undefined') {
                try {
                    sessionStorage.clear();
                } catch(e) {}
            }
            initializeGoogleSignIn();
        };

        function handleCredentialResponse(response) {
            if (!response.credential) {
                document.getElementById('error-message').textContent = 'Authentication failed. Please try again.';
                document.getElementById('error-message').style.display = 'block';
                return;
            }
            
            fetch('google_callback.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ 
                    credential: response.credential,
                    is_signup: isSignUp
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'dashboard.php';
                } else {
                    document.getElementById('error-message').textContent = data.message || 'Authentication failed';
                    document.getElementById('error-message').style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('error-message').textContent = 'An error occurred. Please try again.';
                document.getElementById('error-message').style.display = 'block';
            });
        }
        
        // Set to false since we only have sign in button
        isSignUp = false;
    </script>
</body>
</html>
