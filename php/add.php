<?php

    $img = filter_var(trim($_POST['pic_goods']));
    $name = filter_var(trim($_POST['name_goods']));
    $description = filter_var(trim($_POST['description']));
    $price = filter_var(trim($_POST['price_goods']));
    $count = filter_var(trim($_POST['count']));
    $category = filter_var(trim($_POST['category']));


    include('../php/actions/db.php');


    $mysql->query("INSERT INTO `goods` (`name_goods`, `price_goods`, `pic_goods`, `category`, `description`, `count`) VALUES ('$name', '$price', '$img', '$category', '$description', '$count');");

    $mysql->close();

    header('Location: /pages/account.php');

?>