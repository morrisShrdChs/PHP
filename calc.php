<?php
    $num1 = $_GET['x'];
    $num2 = $_GET['y'];
    $act = $_GET['deist'];
    switch ($act) {
        case "+":
            $res = $num1 + $num2;
            break;
        case "-":
            $res = $num1 - $num2;
            break;
        case "*":
            $res = $num1 * $num2;
            break;
        case "/":
            $res = $num1 / $num2;
            break;
    }
    echo $res;
?>