<?php
    session_start();
    include('connect.php');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
            echo "User with this username or email already exists.";
        } else {
            $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

            if ($conn->query($insert_query) === TRUE) {
                $_SESSION['user_id'] = $conn->insert_id; 
                header("Location: index.php"); 
                exit();
            } else {
                echo "Error: " . $insert_query . "<br>" . $conn->error;
            }
        }
    }

$conn->close();
?>
