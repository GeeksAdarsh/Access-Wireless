<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Clear Google-related cookies
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        if (strpos($key, 'google') !== false || strpos($key, 'gid') !== false || strpos($key, 'GSESSIONID') !== false) {
            setcookie($key, '', time()-3600, '/');
            setcookie($key, '', time()-3600, '/', '.google.com');
            setcookie($key, '', time()-3600, '/', '.googleusercontent.com');
        }
    }
}

// Destroy the session
session_destroy();

// Clear any cached data
header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Add parameter to force fresh login (prevents Google from auto-suggesting)
header("Location: auth.php?logout=1&t=" . time());
exit();
?>
