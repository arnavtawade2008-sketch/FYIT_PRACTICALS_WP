<?php 
session_start(); 
$username = $_POST['username']; 
$password = $_POST['password']; 
// Valid Username and Password 
if ($username == "admin" && $password == "12345") 
{ 
    $_SESSION['username'] = $username; 
    header("Location: suggest.php"); 
} 
else 
{ 
    echo "<h2>Invalid Username or Password!</h2>";
    echo "<a href='login.html'>Try Again</a>";
}  
?>