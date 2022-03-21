<?php
    $str1 = $_GET['name'];
    $str2 = $_GET['surname'];
    $str = '<h1>Имя: '.$str1 .'</h1>';
    $str .= '<h1>Фамилия: '.$str2 .'</h1>';
    print_r($str);
?>