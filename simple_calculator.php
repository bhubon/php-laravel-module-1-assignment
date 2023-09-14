<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Simple Calculator</title>
</head>

<body>

    <?php
    $first_num = '';
    $second_num = '';
    $type = '';
    $result = '';

    if (isset($_POST) && isset($_POST['submit_btn'])) {
        $first_num = floatval($_POST['first_num']);
        $second_num = floatval($_POST['second_num']);
        $type = $_POST['type'];

        switch ($type) {
            case 'addition':
                $result = $first_num + $second_num;
                break;
            case 'subtraction':
                $result = $first_num - $second_num;
                break;
            case 'multiplication':
                $result = $first_num * $second_num;
                break;
            case 'division':
                $result = $first_num / $second_num;
                break;
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border p-4 mt-4 rounded">
                <h2 class="text-center mb-4">Simple Calculator</h2>
                <form action="" method="POST">

                    <label for="first_num">Enter First Number:</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="first_num" name="first_num" placeholder="First Number" required value="<?php echo $first_num; ?>">
                    </div>

                    <label for="second_num">Enter Second Number:</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="second_num" name="second_num" placeholder="Second Number" required value="<?php echo $second_num; ?>">
                    </div>

                    <label for="second_num">Select Operation Type:</label>
                    <div class="input-group mb-3">
                        <select name="type" id="type" class="form-control">
                            <option value="addition"  <?php echo $type=='addition' ? 'selected' : 'selected'; ?> selected>Addition</option>
                            <option value="subtraction" <?php echo $type=='subtraction' ? 'selected' : ''; ?> >Subtraction</option>
                            <option value="multiplication" <?php echo $type=='multiplication' ? 'selected' : ''; ?> >Multiplication</option>
                            <option value="division" <?php echo $type=='division' ? 'selected' : ''; ?> >Division</option>
                        </select>
                    </div>

                    <div class="text-center mt-2">
                        <button name="submit_btn" class="btn btn-primary">Calculate</button>
                    </div>

                </form>

                <div class="result text-center mt-4">
                    <?php
                    if ($result != '') {
                        echo '<h3>Result:</h3>';
                        echo '<h5>' . ucfirst($type) . ' of ' . $first_num . ' and ' . $second_num . ' is: ' . $result . ' </h5>';
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