<?php

    $mysql = new mysqli('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');

    $name = filter_var(trim($_POST['name']));
    $surname = filter_var(trim($_POST['surname']));
    $login = filter_var(trim($_POST['login']));
    $password = filter_var(trim($_POST['password']));
    $id = filter_var(trim($_POST['id']));

    $password = md5($password."test");
  
    $mysql->query("UPDATE `users` SET `name` = '$name', `surname` = '$surname', `login` = '$login', `password` = '$password' WHERE `users`.`id` = '$id';");
        
    $mysql->close();
    header('Location: /pages/account.php');

?>