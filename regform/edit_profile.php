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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
          <main>
              <section>
                    <h2>Edit Profile</h2>
                    <form action="process_edit_profile.php" method="POST">
                    <br><select class="input" name="choice" required>
                        <option value="">Please select</option>
                        <option value="FirstName">First Name</option>
                        <option value="MiddleName">Middle Name</option>
                        <option value="LastName">Last Name</option>
                        <option value="Address">Address</option>
                        <option value="Gender">Gender</option>
                        <option value="Email">Email</option>
                        <option value="Birthdate">Birthdate</option>
                        <option value="Age">Age</option>
                        <option value="Religion">Religion</option>
                        <option value="Username">Username</option>
                        <option value="Password">Password</option>
                    </select>
                    
                    <input class="input" type="text" name="new_det" placeholder="New detail" required><br>
                    <input class="input" type="password" name="pw" placeholder="Enter current password" required><br>

                    <button class="button" type="submit">Save</button>
                  </form>
                  <br><a href="index.php"><button class="button button1" type="submit">Cancel</button></a>
              </section>
          </main>

    <footer>
      <p>&copy; 2024 Joshua Roque</p>
    </footer>
  </div>  
</body>
</html>