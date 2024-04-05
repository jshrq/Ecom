<?php
    session_start();
    include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM student_table WHERE Username = '$uname' AND Password = '$pw'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) != 0) {
        $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['Username'];
            header("Location: index.php");
       
    } 
    else {
        echo "<script>alert('Incorrect username and password. Please try again.');
        window.location = 'login.php'; </script>";
        exit();
    }

    $conn->close();
} else {
    header("Location: login.php");
    exit();
}
?>
