<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="GET">
        <span class="text">Введите температуру в градусах Цельсия</span><input name="degree" type="text"><br>
        <input type="submit" value="Преобразовать">
</form>
</body>
</html>

<?php
    $input = $_GET['degree'];
    $res = (($input * 9 / 5) + 32);
    echo $res;
?>