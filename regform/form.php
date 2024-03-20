<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "student_table";
    $conn = new mysqli($servername, $username, $password, $database);

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $id = $_POST['id'];
            $classes = $_POST['classes'];
            // $studno = $_POST['studno'];
            $mname = $_POST['mname'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $bday = $_POST['bday'];
            $age = $_POST['age'];
            $rel = $_POST['rel'];
            $uname = $_POST['uname'];
            $pw = $_POST['pw'];
            $cpw = $_POST['cpw'];            
            
            echo "First Name: $fname<br>";
            echo "Last Name: $lname<br>";
            echo "Gender: $gender<br>";
            echo "Student Email: $email<br>";
            echo "Student ID: $id<br>";
            echo "List of Classes: $classes<br>";
            // echo "Student No: $studno<br>";
            echo "Middle Name: $mname<br>";
            echo "Address: $address<br>";
            echo "Contact No: $contact<br>";
            echo "Birthdate: $bday<br>";
            echo "Age: $age<br>";
            echo "Username: $uname<br>";
            echo "Password: $pw<br>";
            echo "Password2: $cpw<br>";  
            
            if ($pw == $cpw) {

                $insert = "INSERT INTO student_table (Student_No, Student_ID, Last_Name, First_Name, Middle_Name, 
                Address, Gender, Contact_No, Email_Address, Birthday, Age, Religion, Username, Password) 
                VALUES ('', '$id', '$lname', '$fname', '$mname', '$address', '$gender', '$contact', '$email', '$bday', '$age', '$rel', '$uname', '$pw')";
                mysqli_query($conn, $insert);  
            
            } else echo "Password does match. Please try again.";
            
            
            $database = "SELECT * FROM student_table WHERE Username='$uname'";
            $result = mysqli_query($conn, $database);
            if (mysqli_num_rows($result) == 1){
                echo "Username available.";
            }
            else echo "Username not available.";
                           
        }             
?> 