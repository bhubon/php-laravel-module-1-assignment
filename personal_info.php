<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Personal Information</title>
</head>

<body>

    <?php
    // Define variables for your personal information
    $name = "Bhubon Sutradhar";
    $age = 23;
    $country = "Bangladesh";
    $introduction = "Hello, I'm " . $name . ". I'm " . $age . " years old and I'm from " . $country . ".";

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border p-4 mt-4 rounded">
                <h2 class="text-center mb-4">Personal Info</h2>
                <?php
                echo "<p><strong>Name:</strong> " . $name . "</p>";
                echo "<p><strong>Age:</strong> " . $age . "</p>";
                echo "<p><strong>Country:</strong> " . $country . "</p>";
                echo "<p><strong>Introduction:</strong> " . $introduction . "</p>";
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>