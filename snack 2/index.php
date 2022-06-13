<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <?php
    //Define variables to get the params passed by the user
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    //If all conditions are satisfied the access will be allowed, if not it will be denied
    if (
        strlen($name) > 3 &&
        strpos($mail, '@') &&
        strpos($mail, '.') &&
        is_numeric($age)
    ) {
        echo 'Access allowed';
    } else {
        echo 'Access denied';
    }
    ?>
</body>

</html>