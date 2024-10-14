<?php
session_start();

// Destroy the session and cookie
session_unset();
session_destroy();

setcookie('user', '', time() - 3600, "/"); // Expire the cookie

// Redirect to login page
header('Location: login.php');
exit();
?>
