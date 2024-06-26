<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/script.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body style="background: #000;">
    <?php include("../modules/header.php")?>
    <main class="container mb-2" style="height: 560px;">
        <section class="my-3 sect_w">
            <div class="row row_products_red">
                <?php
                    $mysql = new mysqli('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                    $id = $_GET['id'];
                    $card = $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
                    $cards = mysqli_fetch_assoc($card);
                ?>
                <h3 class="data">Изменить данные</h3>
                <form class="red_form" action="../php/redact_user.php" method="POST">
                    <div>
                        <label for="exampleInputPassword1" class="form-label"><p></p></label>
                        <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" value="<?=$cards['id']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="firstName1" class="form-label"><p>Имя</p></label>
                        <input type="text" name="name" value="<?=$cards['name']?>" id="firstName1" class="form-control" required>
                        <div class="invalid-feedback">
                            <p>Заполните поле</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lastName2" class="form-label"><p>Фамилия</p></label>
                        <input type="text" name="surname" value="<?=$cards['surname']?>" id="lastName2" class="form-control" required>
                        <div class="invalid-feedback">
                            <p>Заполните поле</p>
                        </div>
                    </div>
                    <script> 
                        function allowOnlyLetters(event) { 
                            var charCode = event.charCode; 
                            if (!(/[a-zA-Zа-яА-ЯёЁ]/.test(String.fromCharCode(charCode)))) { 
                            event.preventDefault(); 
                            } 
                        } document.getElementById('firstName1').addEventListener('keypress', allowOnlyLetters); document.getElementById('lastName2').addEventListener('keypress', allowOnlyLetters); 
                    </script>
                    <div class="mb-3">
                        <label for="exampleInputPassword4" class="form-label"><p>Логин</p></label>
                        <input type="text"  minlength="6" maxlength="20" name="login" value="<?=$cards['login']?>" class="form-control"  id="exampleInputPassword4" required>
                        <div class="invalid-feedback">
                            <p>Введите логин не менее 6 и не более 20 символов</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword5" class="form-label"><p>Пароль</p></label>
                        <input type="password" name="password" minlength="8" maxlength="20" placeholder="Введите пароль" class="form-control" id="exampleInputPassword5" required>
                        <div class="invalid-feedback">
                            <p>Введите пароль не менее 8 и не более 20 символов</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn save"><p>Сохранить</p></button> 
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <?php include("../modules/footer.php")?>
    </footer>
</body>
</html>