<?php 
    $mysql = new mysqli('localhost', 'h9825119_ts', 'Root333', 'h9825119_ts');

    $id = $_GET['id'];

    $mysql->query("DELETE FROM `goods` WHERE `id_goods` = '$id'");

    $mysql->close();

    header('Location: /pages/account.php')
?>