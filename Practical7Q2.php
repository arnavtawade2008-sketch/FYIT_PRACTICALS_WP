<?php
// Associative Array
$technology = array(
"Technology Name" => "Artificial Intelligence",
"Category" => "Software Technology",
"Year Introduced" => "2023",
"Application Area" => "Healthcare",
"Developer" => "OpenAI",
"Programming Language" => "Python",
"Website" => "www.openai.com"
);
echo "<h2>Technology Information</h2>";
// Display using foreach loop
foreach ($technology as $key => $value) {
echo "<b>$key:</b> $value <br>";
}
?>