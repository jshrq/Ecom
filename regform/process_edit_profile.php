<?php
    session_start();
    include('connect.php');
    $uname = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $choice = $_POST['choice'];
                $pw = $_POST['pw'];
                $new_det = $_POST['new_det'];   

                switch ($choice) {

                    case "FirstName":
                    $sql = "UPDATE student_table SET First_Name = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "MiddleName":
                    $sql = "UPDATE student_table SET Middle_Name = '$new_det' WHERE Password = '$pw'";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "LastName":
                    $sql = "UPDATE student_table SET Last_Name = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Address":
                    $sql = "UPDATE student_table SET Address = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Gender":
                    $sql = "UPDATE student_table SET Gender = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Email":
                    $sql = "UPDATE student_table SET Email_Address = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Birthdate":
                    $sql = "UPDATE student_table SET Birthdate = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Age":
                    $sql = "UPDATE student_table SET Age = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Religion":
                    $sql = "UPDATE student_table SET Religion = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    case "Username":
                    $sql = "UPDATE student_table SET Username = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;
                    
                    case "Password":
                    $sql = "UPDATE student_table SET Password = '$new_det' WHERE Password = '$pw'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Changes saved successfully');
                        window.location = 'index.php'; </script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    } 
                    break;

                    default:
                    echo "<script>alert('ERROR!');
                    window.location = 'edit_profile.php'; </script>";
                    break;
                }
            }   
            $conn->close();          
        ?> 
</body>
</html>