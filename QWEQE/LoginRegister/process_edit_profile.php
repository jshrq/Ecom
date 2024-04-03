<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $new_username = $_POST['new_username'];
    $new_email = $_POST['new_email'];

    // Database connection details
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "firstconnection";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $check_username_query = "SELECT * FROM users WHERE username='$new_username' AND id != '$user_id'";
    $result_username = $conn->query($check_username_query);

    if ($result_username->num_rows > 0) {
        $_SESSION['edit_profile_error'] = "Username already exists. Please choose a different one.";
        header("Location: edit_profile.php");
        exit();
    }

    $check_email_query = "SELECT * FROM users WHERE email='$new_email' AND id != '$user_id'";
    $result_email = $conn->query($check_email_query);

    if ($result_email->num_rows > 0) {
        $_SESSION['edit_profile_error'] = "Email already exists. Please choose a different one.";
        header("Location: edit_profile.php");
        exit();
    }

    $update_query = "UPDATE users SET username='$new_username', email='$new_email' WHERE id='$user_id'";

    if ($conn->query($update_query) === TRUE) {
        $_SESSION['edit_profile_success'] = "Profile updated successfully.";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['edit_profile_error'] = "Error updating profile: " . $conn->error;
        header("Location: edit_profile.php");
        exit();
    }

    $conn->close();
} else {
    header("Location: edit_profile.php");
    exit();
}
?>
