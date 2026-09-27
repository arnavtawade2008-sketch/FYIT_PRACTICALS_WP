<?php
// Indexed Array
$technologies = array(
"Artificial Intelligence",
"Cloud Computing",
"Internet of Things",
"Blockchain",
"Cyber Security"
);
echo "<h2>Technology Categories</h2>";
// Display using foreach loop
foreach ($technologies as $technology) {
echo $technology . "<br>";
}
// Display total number of categories
echo "<br>Total Categories: " . count($technologies);
?>