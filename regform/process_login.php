<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM student_table WHERE Username='$uname'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) != 0) {
        $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['Username'];
            header("Location: index.php");
       
    } 
    else {
        $_SESSION['login_error'] = "Invalid username or password.";
        header("Location: login.php");
        exit();
    }

    $conn->close();
} else {
    header("Location: login.php");
    exit();
}
?>
