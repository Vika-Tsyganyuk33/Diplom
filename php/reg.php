<?php
    $name = filter_var(trim($_POST['name']),);
    $surname = filter_var(trim($_POST['surname']),);
    $login = filter_var(trim($_POST['login']),);
    $password = filter_var(trim($_POST['password']),);

    include('../php/actions/db.php');
    $password = md5($password."test");
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
    if ($result->num_rows > 0) {
        //Если такой логин существует, то прекращается выполнение скрипта и ссылка на страницу
        header('Location: /pages/usernone.php');
    } else {
        $mysql->query("INSERT INTO `users` (`name`, `surname`, `login`, `password`, `role`) VALUES ('$name', '$surname', '$login', '$password', 1);");
        header('Location: /pages/reg_user.php');
    }
    $mysql->close();
?>