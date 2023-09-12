<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>

<?php
// Define variables for your personal information
$name = "Bhubon Sutradhar";
$age = 23;
$country = "Bangladesh";
$introduction = "Hello, I'm " . $name . ". I'm " . $age . " years old and I'm from " . $country . ".";

// Display your personal information
echo "<h1>Personal Information</h1>";
echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Age:</strong> " . $age . "</p>";
echo "<p><strong>Country:</strong> " . $country . "</p>";
echo "<p><strong>Introduction:</strong> " . $introduction . "</p>";
?>

</body>
</html>
