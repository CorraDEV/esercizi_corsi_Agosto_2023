<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es 10</title>
</head>
<body>
    <form action="" method="POST">
        <input id="age" name="age" type="text">
        <input type="submit">
    </form>
</body>
</html>
<?php
    $age = $_POST['age'];
    echo $age;
?>