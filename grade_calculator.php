<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Grade Calculator</title>
</head>

<body>

    <?php
    $score1 = '';
    $score2 = '';
    $score3 = '';
    $average = '';
    $grade = '';

    if (isset($_POST) && isset($_POST['submit_btn'])) {
        $score1 = floatval($_POST["test_one"]);
        $score2 = floatval($_POST["test_two"]);
        $score3 = floatval($_POST["test_three"]);

        $average = ($score1 + $score2 + $score3) / 3;

        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border p-4 mt-4 rounded">
                <h2 class="text-center mb-4">Grade Calculator</h2>
                <form action="" method="POST">

                    <label for="test_one">Test One Mark: </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="test_one" name="test_one" placeholder="Enter Mark" require value="<?php echo $score1; ?>">
                    </div>

                    <label for="test_two">Test Two Mark: </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="test_two" name="test_two" placeholder="Enter Mark" require value="<?php echo $score2; ?>">
                    </div>

                    <label for="test_three">Test Three Mark: </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="test_three" name="test_three" placeholder="Enter Mark" require value="<?php echo $score3; ?>">
                    </div>
                    <div class="text-center mt-2">
                        <button name="submit_btn" class="btn btn-primary">Calculate</button>
                    </div>

                </form>

                <div class="result text-center mt-4">
                    <?php
                    if ($average !== '' && $grade !== '') {
                        echo "<h3>Result:</h3>";
                        echo "<p>Average Score: " . number_format($average, 2) . "</p>";
                        echo "<p>Letter Grade: " . $grade . "</p>";
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