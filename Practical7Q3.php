<!DOCTYPE html>
<html>
<head>
<title>Technology Suggestion Form</title>
<script>
function validateForm() {
let name = document.forms["techForm"]["name"].value;
let email = document.forms["techForm"]["email"].value;
let tech = document.forms["techForm"]["technology"].value;
let suggestion = document.forms["techForm"]["suggestion"].value;
if (name == "" || email == "" || tech == "" || suggestion == "") {
alert("All fields are required!");
return false;
}
return true;
}
</script>
</head>
<body>
<h2>Technology Suggestion Form</h2>
<form name="techForm" action="save.php" method="post" onsubmit="return validateForm()">
Name:
<input type="text" name="name"><br><br>
Email:
<input type="email" name="email"><br><br>
Technology:
<input type="text" name="technology"><br><br>
Suggestion:
<textarea name="suggestion"></textarea><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>