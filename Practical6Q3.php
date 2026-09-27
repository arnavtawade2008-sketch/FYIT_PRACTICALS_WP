<!DOCTYPE html>
<html>
<head>
<title>Simple PHP Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form method="post">
Enter First Number:
<input type="number" name="num1" required><br><br>
Enter Second Number:
<input type="number" name="num2" required><br><br>
<input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
echo "<h3>Result</h3>";
echo "Addition = " . ($num1 + $num2) . "<br>";
echo "Subtraction = " . ($num1 - $num2) . "<br>";
echo "Multiplication = " . ($num1 * $num2) . "<br>";
if ($num2 != 0) {
echo "Division = " . ($num1 / $num2) . "<br>";
} else {
echo "Division = Cannot divide by zero.";
}
}
?>
</body>
</html>