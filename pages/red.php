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
    <main class="container mb-4">
        <section class="mt-3 sect_w">
            <div class="row row_products_red">
                <?php
                    $id = $_GET['id'];
                    $mysql = new mysqli('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                    $card = $mysql->query("SELECT * FROM `goods` WHERE `id_goods` = '$id'");
                    $cards = mysqli_fetch_assoc($card);
                ?>
                <h4 class="d-flex justify-content-center">Редактирование товара</h4>
                <form class="red_form" action="../php/redact/redact.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p></p></label>
                        <input type="hidden" name="id_goods" class="form-control" id="exampleInputPassword1" value="<?=$cards['id_goods']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Изображение</p></label>
                        <input type="text" name="pic_goods" class="form-control" value="<?=$cards['pic_goods']?>" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Название</p></label>
                        <input type="text" name="name_goods" class="form-control" value="<?=$cards['name_goods']?>" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Прайс</p></label>
                        <input type="number" onkeydown="return event.keyCode !== 69" name="price_goods" class="form-control" value="<?=$cards['price_goods']?>" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Количество</p></label>
                        <input type="number" onkeydown="return event.keyCode !== 69" name="count" class="form-control" value="<?=$cards['count']?>" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Описание</p></label>
                        <input type="text" name="description" class="form-control desc" value="<?=$cards['description']?>" id="exampleInputPassword1">
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