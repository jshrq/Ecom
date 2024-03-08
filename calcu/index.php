<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #87CEEB;
    color: #333;
    line-height: 1.6;
    padding: 20px;
  }

  .container {
    max-width: 400px;
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
    text-align: center;
    padding: 40px;
    background-color: #F7F5EB;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }

  section h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #000;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
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

</style>
<body>
    <div class="container">
        <header>
            <img src="<?php echo "img.png"; ?>" alt="logo">
            <h1>Simple Calculator</h1>
            <p>by: Joshua Roque</p>
        </header>

        <main>
            <section>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <ul>
                    <li><input type="text" name="num1" placeholder="Enter first digit" required><br></li>
                    <li><select name="op" required></li>
                        <option value="">Select Operation</option>
                        <option value="+">Addition</option>
                        <option value="-">Subtraction</option>
                        <option value="*">Multiplication</option>
                        <option value="/">Division</option>
                    <li></select><br></li>
                    <li><input type="text" name="num2" placeholder="Enter second digit" required><br></li>
                    <li><input type="submit" name="calculate" value="Calculate"></li>
                    </ul>
                </form>

                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $op = $_POST['op'];
                        $result = 0;
                
                        switch ($op) {
                            case '+':
                                $result = $num1 + $num2;
                                break;
                            case '-':
                                $result = $num1 - $num2;
                                break;
                            case '*':
                                $result = $num1 * $num2;
                                break;
                            case '/':
                                if($num2 == 0) {
                                    echo "Syntax error! Divison by zero.";
                                } else {
                                    $result = $num1 / $num2;
                                }
                                break;
                            default:
                                echo "Invalid operator! Please choose from the options only.";
                        }

                        echo "<h3><br>Result: $num1 $op $num2 = $result</h3>";
                    }
                ?> 
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Joshua Roque</p>
        </footer>
    </div>

</body>
</html>