<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>

<body>
    <form action="validate_age.php" method="POST">
        <h3>Please Enter Your Age</h3>
        <input type="text" name="age"><br>
        <input type="submit" name="save">
    </form>

    <?php
    if (isset($_REQUEST["save"])) {
        $data = $_REQUEST["age"];

        if (filter_var($data, FILTER_VALIDATE_INT, array("options" => array("min_range" => 27, "max_range" => 55)))) {
            echo "Age is valid";
        } else {
            echo "Age is not valid";
        }
    }

    ?>

</body>

</html>

