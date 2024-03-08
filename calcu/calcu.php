<!-- <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $input2 = $_POST["input2"];
        $op = $_POST["op"];
        $result = 0;

        switch ($op) {
            case "+":
                $result = $input+$input2;
                echo $result;
                break;
            case "-":
                $result = $input-$input2;
                echo $result;
                break;
            case "/":
                $result = $input/$input2;
                echo $result;
                break;
            case "*":
                $result = $input*$input2;
                echo $result;
                break;
            default:
                echo "Invalid operator. Please choose from the options only.";
                break;
        }

        // do{
        //     $highest = rand(1,100);
        //     $lowest = rand(1,100);
        // }while($highest < $lowest);

        // echo "Highest = $highest <br>";
        // echo "Lowest = $lowest <br>";

        // if($input > $lowest && $input < $highest) {
        //     echo "<br> Input: $input";
        //     echo "<br> You win!";
        // }
        // else {
        //     echo "<br> Input: $input";
        //     echo "<br> You lose!";
        // }
    }
?> -->

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="num1" placeholder="Enter first number" required>
    <select name="operator" required>
        <option value="">Select Operator</option>
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select>
    <input type="text" name="num2" placeholder="Enter second number" required>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    switch ($operator) {
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
            if ($num2 == 0) {
                echo "Error! Division by zero.";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            echo "Invalid operator!";
    }

    echo "<h3>Result: $num1 $operator $num2 = $result</h3>";
}
?>

</body>
</html>