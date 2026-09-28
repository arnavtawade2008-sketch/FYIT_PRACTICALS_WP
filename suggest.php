<?php 
session_start(); 
// Check Session 
if (!isset($_SESSION['username'])) 
{ 
} 
header("Location: login.html"); 
exit(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Technology Suggestion Form</title> 
</head> 
<body> 
<h2>Welcome, 
<?php 
echo $_SESSION['username']; 
?> 
</h2> 
<h3>Technology Suggestion Form</h3> 
<form> 
Name: 
<input type="text"><br><br> 
Email: 
<input type="email"><br><br> 
Technology: 
<input type="text"><br><br> 
Suggestion: 
<textarea rows="5" cols="30"></textarea><br><br> 
<input type="submit" value="Submit"> 
</form> 
<br> 
<a href="logout.php">Logout</a> 
</body> 
</html> 