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
                <h4 class="d-flex justify-content-center">Добавление товара</h4>
                <form class="red_form" action="../php/add.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Изображение</p></label>
                        <input type="text" name="pic_goods" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Название</p></label>
                        <input type="text" name="name_goods" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Прайс</p></label>
                        <input type="number" name="price_goods" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Количество</p></label>
                        <input type="number" name="count" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Описание</p></label>
                        <input type="text" name="description" class="form-control desc" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><p>Категория</p></label>
                        <p class="fz_category">1 - классическая, 2 - аккустическая, 3 - бас, 4 - электро</p>
                        <input type="text" name="category" class="form-control desc" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-center">
                       <button type="submit" class="btn save"><p>Добавить</p></button> 
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