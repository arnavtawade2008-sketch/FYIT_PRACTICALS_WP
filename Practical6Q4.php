<!DOCTYPE html>
<html>
<head>
<title>Technology Suggestion Form</title>
</head>
<body>
<h2>Technology Suggestion Form</h2>
<form method="post">
Name:
<input type="text" name="name" required><br><br>
Email:
<input type="email" name="email" required><br><br>
Favorite Technology:
<input type="text" name="technology" required><br><br>
Suggestion:
<textarea name="suggestion" rows="4" cols="30" required></textarea><br><br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$technology = $_POST['technology'];
$suggestion = $_POST['suggestion'];
echo "<h2>Submitted Information</h2>";
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Favorite Technology: $technology <br>";
echo "Suggestion: $suggestion <br>";
}
?>
</body>
</html>