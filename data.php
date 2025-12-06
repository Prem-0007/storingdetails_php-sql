<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <?php
    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $dbname = "premdb";
    $port   = 3307;
    $connect = mysqli_connect($server, $user, $pass, $dbname, $port);

    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    ?>
</body>

</html>