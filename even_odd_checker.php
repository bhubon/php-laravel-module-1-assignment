<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Even or Odd Checker</title>
</head>

<body>

    <?php
    $number = '';
    $result = '';

    if (isset($_POST) && isset($_POST['submit_btn'])) {
        $number = floatval($_POST["number"]);

        if (($number % 2) == 0) {
            $result = '<span class="font-weight-bold">'.$number . '</span> Is an <span class="font-weight-bold">Even</span> Number';
        } else {
            $result = '<span class="font-weight-bold">'.$number . '</span> Is an <span class="font-weight-bold">Odd</span> Number';
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border p-4 mt-4">
                <h2 class="text-center mb-4">Even or Odd Checker</h2>
                <form action="" method="POST">

                    <label for="number">Enter Number: </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="number" name="number" placeholder="Enter Number" require value="<?php echo $number; ?>">
                    </div>
                    <div class="text-center mt-2">
                        <button name="submit_btn" class="btn btn-primary">Check</button>
                    </div>

                </form>

                <div class="result text-center mt-4">
                    <?php
                    if($result !=''){
                        echo '<h3>Result</h3>';
                        echo $result;
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