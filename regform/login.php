<?php
  session_start();
  include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
            <header>
                <img src="<?php echo "rc.png"; ?>" alt="logo">
                <h1>Sign In</h1>
            </header>
    
            <main>
                <section>
                    <form action="process_login.php" method="POST">
                        
                        <input class="input" type="text" name="uname" placeholder="Username" required><br>
                        <input class="input" type="password" name="pw" placeholder="Password" required><br>
                        
                        <br><button class="button" type="submit">Login</button>
                    </form>
                    <br><a href='signup.php'><button class="button button1" type="button">Sign Up</button></a>
                </section>
            </main>

            <footer>
                <p>&copy; 2024 Joshua Roque</p>
            </footer>
        </div>
</body>
</html>