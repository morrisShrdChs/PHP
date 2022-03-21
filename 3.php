<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3.php" method="GET">
        <span class="text">Введите число</span><input name="n" type="text"><br>
        <input type="submit" value="Calculate">
</form>
</body>
</html>

<?php
    $n = $_GET['n'];
    for ($i = $n; $i >= 1; $i--) {
        if ($_GET['n'] % $i == 0) {
            echo $i.' ';
        }
    }
?>