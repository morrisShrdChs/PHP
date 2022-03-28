<?php
    session_start();
    if (!isset ($_SESSION['user_login'])) {
        header('Location: login.php');
    }
    else {
        echo '<h1>Привет, '.$_SESSION['user_login'].'</h1>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div  id="content">
    <a href="register.php?act=reg">Регистрация</a><br>
    <a href="profile.php?act=profile">Профиль</a><br>
    <a href="login.php?act=logout">Выйти</a><br>
</div>
</body>
</html>