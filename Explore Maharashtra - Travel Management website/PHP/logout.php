<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['cus_fname'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Regenerate the session ID to prevent session fixation attacks
    session_regenerate_id(true);
}

// Redirect the user to the login page
header("Location: index.html"); // Replace "index.html" with your actual login page URL
exit();
?>
