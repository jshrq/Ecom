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
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $stnum = $_POST['stnum'];
                $mname = $_POST['mname'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $bday = $_POST['bday'];
                $age = $_POST['age'];
                $rel = $_POST['rel'];
                $uname = $_POST['uname'];
                $pw = $_POST['pw'];
                $cpw = $_POST['cpw'];
                
                $database = "SELECT * FROM student_table WHERE Username = '$uname' OR Email_Address = '$email'";
                $result = mysqli_query($conn, $database);
                if (mysqli_num_rows($result) == 0){
                    if ($pw == $cpw) {

                        $insert = "INSERT INTO student_table (Student_ID, Student_No, Last_Name, First_Name, Middle_Name, 
                        Address, Gender, Contact_No, Email_Address, Birthday, Age, Religion, Username, Password) 
                        VALUES ('', '$stnum', '$lname', '$fname', '$mname', '$address', '$gender', '$contact', '$email', '$bday', '$age', '$rel', '$uname', '$pw')";
                        mysqli_query($conn, $insert);
                        echo "<script>alert('SIGN UP COMPLETE!');
                        window.location = 'login.php'; </script>";
                    
                    } else {
                    echo "<script>alert('Password does not match. Please try again.');
                    window.location = 'signup.php'; </script>";
                    }
                }
                else {
                echo "<script>alert('Username or Email is already registered. Please try again.');
                window.location = 'signup.php'; </script>";
                }     
            }             
        ?> 
</body>
</html>
