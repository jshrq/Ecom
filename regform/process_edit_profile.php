<?php
    session_start();
    include('connect.php');
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
                $id = $_POST['id'];
                $new_value = $_POST['new_value'];   

                // switch ($id) {

                //     case "FirstName":
                //     $sql = "UPDATE student_table SET First_Name = '$new_value' WHERE Student_ID = $id";

                //     if ($conn->query($sql) === TRUE) {
                //         echo "<script>alert('Changes saved successfully');
                //         window.location = 'index.php'; </script>";
                //     } else {
                //         echo "Error updating record: " . $conn->error;
                //     } 
                //     break;

                //     case "MiddleName":
                //     $sql = "UPDATE student_table SET Middle_Name = '$new_value' WHERE Student_ID = $id";
                    
                //     if ($conn->query($sql) === TRUE) {
                //         echo "<script>alert('Changes saved successfully');
                //         window.location = 'index.php'; </script>";
                //     } else {
                //         echo "Error updating record: " . $conn->error;
                //     } 
                //     break;

                //     case "LastName":
                //     $sql = "UPDATE student_table SET Last_Name = '$new_value' WHERE Student_ID = $id";

                //     if ($conn->query($sql) === TRUE) {
                //         echo "<script>alert('Changes saved successfully');
                //         window.location = 'index.php'; </script>";
                //     } else {
                //         echo "Error updating record: " . $conn->error;
                //     } 
                //     break;

                //     default:
                //     echo "hi";
                //     break;
                // }

                $sql = "UPDATE student_table SET First_Name = '$new_value' WHERE Student_ID = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Changes saved successfully');
                    window.location = 'index.php'; </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                } 
            }   
            $conn->close();          
        ?> 
</body>
</html>
