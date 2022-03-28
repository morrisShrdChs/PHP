<?php
    session_start();
    if ($_GET['act'] === 'reg') {
    $name = $_GET['name'];
    $pas = $_GET['pas'];
    $_SESSION['user_login'] = $name;
    }
    if (!empty($_POST['name']) && !empty($_POST['pas'])) {
        header('Location: login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <div  id="content">
        <form action="" method="post">
            <h3>Регистрация</h3>
            <input type="text" name="name" placeholder="Логин"><br>
            <input type="text" name="pas" placeholder="Пароль"><br>
            <input type="submit" name="">
        </form>
    </div>
</body>
</html>