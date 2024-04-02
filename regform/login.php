<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #0F9ADA;
    color: #333;
    line-height: 1.6;
    padding: 20px;
    text-align: center;
  }

  .container {
    max-width: 700px;
    margin: 0 auto;
  }

  header {
    text-align: center;
    margin-bottom: 40px;
  }

  header img {
    margin-top: 20px;
    width: 200px;
    height: 200px;
    margin-bottom: 20px;
  }

  header h1 {
    font-size: 40px;
    margin-bottom: 10px;
    color: #333;
  }

  header p {
    font-size: 18px;
    color: #000;
    margin-bottom: 10px;
  }

  header p:last-child {
    margin-bottom: 20px;
  }

  main {
    padding: 40px;
    background-color: #F7F5EB;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }

  section h2 {
    font-size: 24px;
    color: #000;
  }

  ul {
    list-style: none;
    padding-left: 0;
  }

  ul li {
    margin-bottom: 10px;
    color: #333;
  }

  footer {
    text-align: center;
    margin-top: 50px;
    padding-top: 20px;
  }

  @media (max-width: 600px) {
    header h1 {
      font-size: 28px;
    }

    header p {
      font-size: 16px;
    }

    section h2 {
      font-size: 20px;
    }

    header img {
      width: 100px;
      height: 100px;
    }
  }

  .button {
    border: none;
    border-radius: 5px;
	color: white;
	padding: 15px 40px;
	margin: 20px 235px;
	cursor: pointer;
	background-color: #035392;
    font-size: 15px;
    text-align: center;
  }

  .button1 {background-color: #0F9ADA;}

  .button:hover {
    background-color: #00B3FF;
  }

  .input {
    width: 280px;
    padding: 10px;
    margin: 10px 0px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
    margin-right: 25px;
    margin-bottom: 30px;
  }

.row {
    display: flex;
    justify-content: space-between;
    width: 425px;
}

.row2 {
    display: flex;
    justify-content: space-between;
    width: 405px;
}

</style>

<body>
    <div class="container">
            <header>
                <img src="<?php echo "rc.png"; ?>" alt="logo">
                <h1>Welcome</h1>
            </header>

            <main>
                <section>
                    <form action="form.php" method="POST">
                        <div class="row">
                            <h2>Username</h2>
                            <h2>Password</h2>
                        </div>
                        <input class="input" type="text" name="uname" placeholder="Username" required>
                        <input class="input" type="password" name="pw" placeholder="Password" required>
                        
                        <a href='form.php'><button class="button" type="submit">Login</button></a>
                        <a href='signup.php'><button class="button button1" type="button">Signup</button></a>

                    </form>
                </section>
            </main>

            <footer>
                <p>&copy; 2024 Joshua Roque</p>
            </footer>
        </div>
</body>

</html>