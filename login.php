<?php
    session_start();
    if ($_GET['act'] === 'logout') {
        unset($_SESSION['user_login']);
    }
    if (!empty($_POST['name']) && !empty($_POST['pas'])) {
        $name = $_POST['name'];
        $password = $_POST['pas'];
        if ($name === $_POST['name'] && $password === $_POST['pas']) {
            $_SESSION['user_login'] = $name;
            header('Location: index.php');
        }
    }
    if ($_GET['act'] === 'reg') {
        header('Location: register.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div  id="content">
        <form action="" method="post">
            <h3>Авторизация</h3>
            <input type="text" name="name" placeholder="Логин"><br>
            <input type="text" name="pas" placeholder="Пароль"><br>
            <input type="submit" name="">
        </form>
        <a href="login.php?act=reg">Регистрация</a><br>
</div>
</body>
</html>