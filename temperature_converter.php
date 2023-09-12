<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Temperature Converter</title>
</head>

<body>

    <?php
    $temperature = '';
    $conversionType = '';
    $convertedTemp = '';

    if (isset($_POST) && isset($_POST['submit_btn'])) {
        $temperature = floatval($_POST['temperature']);
        $conversionType = $_POST["type"];

        if ('celsiusToFahrenheit' == $conversionType) {
            $convertedTemp = ($temperature * 9 / 5) + 32;
        } elseif ('fahrenheitToCelsius' == $conversionType) {
            $convertedTemp = ($temperature - 32) * 5 / 9;
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border p-4 mt-4 rounded">
                <h2 class="text-center mb-4">Temperature Converter</h2>
                <form action="" method="POST">

                    <label for="temp">Enter Temperature :</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="temp" name="temperature" placeholder="Enter Temperature" require value="<?php echo $temperature; ?>">
                    </div>

                    <label for="type">Select Conversion:</label>
                    <div class="input-group mb-3">
                        <select name="type" id="type" class="form-control">
                            <option value="celsiusToFahrenheit" <?php echo 'celsiusToFahrenheit' == $conversionType ? 'selected' : 'selected' ?>>Celsius to Fahrenheit</option>
                            <option value="fahrenheitToCelsius" <?php echo 'fahrenheitToCelsius' == $conversionType ? 'selected' : '' ?>>Fahrenheit to Celsius</option>
                        </select>
                    </div>
                    <div class="text-center mt-2">
                        <button name="submit_btn" class="btn btn-primary">Calculate</button>
                    </div>

                </form>

                <div class="result">
                    <?php
                    if ('' != $temperature) {
                    ?>
                        <h4 class="text-center mt-4">Result</h4>
                    <?php
                    }
                    if ($conversionType === "celsiusToFahrenheit") {
                        echo "<p class='text-center'><span class='font-weight-bold'>{$temperature}&deg;</span> Celsius is <span class='font-weight-bold'>{$convertedTemp}&deg;</span> Fahrenheit.</p>";
                    } elseif ($conversionType === "fahrenheitToCelsius") {
                        echo "<p class='text-center'><span class='font-weight-bold'>{$temperature}&deg;</span> Fahrenheit is <span class='font-weight-bold'>{$convertedTemp}&deg;</span> Celsius.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>