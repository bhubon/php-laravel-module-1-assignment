<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<?php
// Define variables and initialize them
$temperature = '';
$conversionType = '';
$convertedTemperature = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input
    $temperature = floatval($_POST["temperature"]);
    $conversionType = $_POST["conversionType"];

    // Perform the temperature conversion
    if ($conversionType === "celsiusToFahrenheit") {
        // Convert Celsius to Fahrenheit
        $convertedTemperature = ($temperature * 9/5) + 32;
    } elseif ($conversionType === "fahrenheitToCelsius") {
        // Convert Fahrenheit to Celsius
        $convertedTemperature = ($temperature - 32) * 5/9;
    }
}
?>

<h1>Temperature Converter</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="temperature">Enter Temperature:</label>
    <input type="number" name="temperature" id="temperature" required step="0.01" value="<?php echo $temperature; ?>">
    
    <label for="conversionType">Select Conversion:</label>
    <select name="conversionType" id="conversionType">
        <option value="celsiusToFahrenheit" <?php if ($conversionType === "celsiusToFahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
        <option value="fahrenheitToCelsius" <?php if ($conversionType === "fahrenheitToCelsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
    </select>

    <input type="submit" value="Convert">
</form>

<?php
// Display the converted temperature if available
if ($convertedTemperature !== '') {
    echo "<h2>Result:</h2>";
    if ($conversionType === "celsiusToFahrenheit") {
        echo "<p>{$temperature} Celsius is {$convertedTemperature} Fahrenheit.</p>";
    } elseif ($conversionType === "fahrenheitToCelsius") {
        echo "<p>{$temperature} Fahrenheit is {$convertedTemperature} Celsius.</p>";
    }
}
?>

</body>
</html>
