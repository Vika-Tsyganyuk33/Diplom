<?php

    $mysql = new mysqli('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');

    $id = filter_var(trim($_POST['id_goods']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name_goods']), FILTER_SANITIZE_STRING);
    $price = filter_var(trim($_POST['price_goods']), FILTER_SANITIZE_STRING);
    $description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
    $count = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);
    $img = filter_var(trim($_POST['pic_goods']), FILTER_SANITIZE_STRING);


    $mysql->query("UPDATE `goods` SET `name_goods` = '$name', `price_goods` = '$price', `description` = '$description', `pic_goods` = '$img', `count` = '$count' WHERE `goods`.`id_goods` = '$id';");

    $mysql->close();

    header('Location: /pages/account.php');

?>
