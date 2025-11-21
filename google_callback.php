<?php
session_start();
include 'db.php';
include 'config.php';

header('Content-Type: application/json');

if (!isset($_POST['credential']) && !isset($_POST['credential'])) {
    // Handle JSON POST
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    $credential = $data['credential'] ?? null;
    $is_signup = $data['is_signup'] ?? false;
} else {
    $credential = $_POST['credential'] ?? null;
    $is_signup = $_POST['is_signup'] ?? false;
}

if (!$credential) {
    echo json_encode(['success' => false, 'message' => 'No credential provided']);
    exit;
}

// Verify the Google ID token
// Note: In production, you should verify the token with Google's servers
// For now, we'll decode it to get user info
$tokenParts = explode('.', $credential);
if (count($tokenParts) !== 3) {
    echo json_encode(['success' => false, 'message' => 'Invalid token format']);
    exit;
}

$payload = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $tokenParts[1])), true);

if (!$payload) {
    echo json_encode(['success' => false, 'message' => 'Failed to decode token']);
    exit;
}

// Extract user information
$google_id = $payload['sub'] ?? null;
$email = $payload['email'] ?? null;
$name = $payload['name'] ?? $payload['given_name'] ?? 'User';
$picture = $payload['picture'] ?? null;

if (!$google_id || !$email) {
    echo json_encode(['success' => false, 'message' => 'Missing required user information']);
    exit;
}

// Check if user exists
$stmt = $conn->prepare("SELECT * FROM users WHERE google_id = ? OR email = ?");
$stmt->bind_param("ss", $google_id, $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    // User exists - check if they clicked sign up button
    if ($is_signup) {
        // User clicked sign up but account already exists
        echo json_encode(['success' => false, 'message' => 'An account with this email already exists. Please use Sign In instead.']);
        exit;
    }
    
    // User exists and clicked sign in - proceed with login
    if (!$user['google_id']) {
        $update_stmt = $conn->prepare("UPDATE users SET google_id = ?, name = ?, picture = ? WHERE id = ?");
        $update_stmt->bind_param("sssi", $google_id, $name, $picture, $user['id']);
        $update_stmt->execute();
    } else {
        // Update name and picture
        $update_stmt = $conn->prepare("UPDATE users SET name = ?, picture = ? WHERE id = ?");
        $update_stmt->bind_param("ssi", $name, $picture, $user['id']);
        $update_stmt->execute();
    }
    
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user'] = $user['name'] ?? $user['username'] ?? $name;
    $_SESSION['email'] = $user['email'];
    $_SESSION['google_id'] = $google_id;
    $_SESSION['picture'] = $picture ?? $user['picture'] ?? null;
    
    echo json_encode(['success' => true, 'message' => 'Login successful']);
} else {
    // New user - create account (works for both sign in and sign up buttons)
    $username = strtolower(str_replace(' ', '', $name)) . rand(1000, 9999);
    
    $insert_stmt = $conn->prepare("INSERT INTO users (username, email, google_id, name, picture) VALUES (?, ?, ?, ?, ?)");
    $insert_stmt->bind_param("sssss", $username, $email, $google_id, $name, $picture);
    
    if ($insert_stmt->execute()) {
        $new_user_id = $conn->insert_id;
        $_SESSION['user_id'] = $new_user_id;
        $_SESSION['user'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['google_id'] = $google_id;
        $_SESSION['picture'] = $picture;
        
        $message = $is_signup ? 'Account created successfully! Welcome!' : 'Account created successfully';
        echo json_encode(['success' => true, 'message' => $message]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to create account. Please try again.']);
    }
}

$stmt->close();
$conn->close();
?>

