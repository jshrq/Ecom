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
                    <!-- <select class="input" name="id" required>
                        <option value="">Please select</option>
                        <option value="FirstName">First Name</option>
                        <option value="MiddleName">Middle Name</option>
                        <option value="LastName">Last Name</option>
                        <option value="Address">Address</option>
                        <option value="Gender">Gender</option>
                        <option value="Student Email">Student Email</option>
                        <option value="Birthdate">Birthdate</option>
                        <option value="Age">Age</option>
                        <option value="Religion">Religion</option>
                        <option value="Username">Username</option>
                        <option value="Password">Password</option>
                    </select> -->
                    <input class="input" type="text" name="id" placeholder="ID"><br>
                    <input class="input" type="text" name="new_value" placeholder="New Value"><br>

                    <button class="button" type="submit">Save</button>

                  </form>
              </section>
          </main>

    <footer>
      <p>&copy; 2024 Joshua Roque</p>
    </footer>
  </div>  
</body>

</html>