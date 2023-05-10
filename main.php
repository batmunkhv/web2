<?php
include 'config.php';
include 'check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>x
    <h1>This is Main Page!</h1>
    <form action = "" method="POST">
        <input type="submit" value="Log out" name="Lout">
    </form>
    <?php
        $pm = $_SESSION['permission'];
        echo $pm;
    ?>
</body>
</html>