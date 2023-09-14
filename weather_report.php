<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Weather Report</title>
</head>

<body>

    <?php
    $temperature = '';
    $message = '';
    $type = '';
    $report = '';
    $original_temp = '';

    if (isset($_POST) && isset($_POST['submit_btn'])) {
        $temperature = floatval($_POST["temperature"]);
        $type = $_POST["type"];

        $original_temp = $temperature;

        if ($type == 'fahrenheit') {
            $temperature = ($original_temp - 32) * 5 / 9;
            $report = $temperature.'&deg; Fahrenheit';
        }else{
            $report = $temperature.'&deg; Celcius';
        }

        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature > 0 && $temperature <= 15) {
            $message = "It's cool.";
        } elseif ($temperature > 15 && $temperature <= 30) {
            $message = "It's warm.";
        } else {
            $message = "It's hot!";
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border p-4 mt-4 rounded">
                <h2 class="text-center mb-4">Weather Report</h2>
                <form action="" method="POST">

                    <label for="temp">Enter Temperature :</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="temp" name="temperature" placeholder="Enter Temperature" required value="<?php echo $original_temp; ?>">
                    </div>

                    <label for="temp">Temperature Type :</label>
                    <div class="temp_type">
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="radio" name="type" value="celcius" id="celcius" <?php echo $type == 'celcius' ? 'checked' : 'checked'; ?>>
                            <label class="form-check-label" for="celcius">
                                Celsius
                            </label>
                        </div>
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="radio" name="type" value="fahrenheit" id="fahrenheit" <?php echo $type == 'fahrenheit' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="fahrenheit">
                                Fahrenheit
                            </label>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <button name="submit_btn" class="btn btn-primary">Check Weather</button>
                    </div>

                </form>

                <div class="result text-center mt-4">
                    <?php
                    if ($message != '') {
                        echo '<h3>Report:</h3>';
                        echo '<h5 class="font-weight-bold">' . $report . '&deg; </h5>';
                        echo '<p class="font-weight-bold">' . $message . '</p>';
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