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
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
      <main>
        <section>
        <h2>Welcome, <?php echo $uname; ?>!</h2><br>
        <?php
        
        $sql = "SELECT * FROM student_table WHERE Username = '$uname'";
        $run = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($run)) {
            echo "Student Number: ", $row ['Student_No']. "<br>";
            echo "First Name: ", $row ['First_Name']. "<br>";
            echo "Middle Name: ", $row ['Middle_Name']. "<br>";
            echo "Last Name: ", $row ['Last_Name']. "<br>";
            echo "Address: ", $row ['Address']. "<br>";
            echo "Gender: ", $row ['Gender']. "<br>";
            echo "Email: ", $row ['Email_Address']. "<br>";
            echo "Birthdate: ", $row ['Birthday']. "<br>";
            echo "Age: ", $row ['Age']. "<br>";
            echo "Religion: ", $row ['Religion']. "<br>";
            echo "Username: ", $row ['Username']. "<br>";
            echo "Password: ", $row ['Password']. "<br>";
        }
    ?>
        <br><button class="button button1" onclick="window.location.href='edit_profile.php'">Edit Profile</button>
        <button class="button" onclick="window.location.href='login.php'">Logout</button>
        </section>
      </main>
    </div>
</body>
</html>