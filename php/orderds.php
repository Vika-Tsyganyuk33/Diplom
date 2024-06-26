<?php
    
    $name_pers = filter_var(trim($_POST['name_pers']));
    $tel = filter_var(trim($_POST['tel']));
    $name_prod = filter_var(trim($_POST['name_prod']));
    $count = filter_var(trim($_POST['count']));
    $sum = filter_var(trim($_POST['sum']));
    $address = filter_var(trim($_POST['address']));
    $bankCard = filter_var(trim($_POST['bankCard']));
    $id = $_COOKIE['id'];

    include('../php/actions/db.php'); 

    $mysql->query("INSERT INTO `orderes` (`id`, `name_pers`, `tel`, `name_prod`, `count`, `sum`, `address`, `bankCard`) VALUES ('$id', '$name_pers', '$tel', '$name_prod', '$count', '$sum', '$address', '$bankCard');");
    
    $mysql->close();

    header('Location: /pages/account.php');

?>