<?php
session_start();

// If user already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
} else {
    // Redirect to landing page
    header("Location: auth.php");
    exit();
}
?>
