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
    <main>
        <section class="catalog">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-5">
                        <p class="catalog_fz">От классики до<br> нью-метал</p>
                        <p class="catalog_text">Существует большое количество гитар, их объединяет лишь количество струн и расположение нот на грифе. Мы можем выделить как минимум 4 вида гитар</p>
                    </div>
                    <div class="col-7">
                        <div class="row align-items-center catalog_guitar">
                            <div class="col-6 catalog_block1">
                                <a href="../pages/classic.php">
                                <img src="../img/classic/classic2.png" alt="">
                                <p>КЛАССИЧЕСКАЯ ГИТАРА</p></a>
                            </div>
                            <div class="col-6 catalog_block2">
                                <a href="../pages/acoustics.php">
                                <img src="../img/acoustics/acoustics1.png" alt="">
                                <p>АКУСТИЧЕСКАЯ ГИТАРА</p></a>
                            </div>
                            <div class="col-6 catalog_block4">
                                <a href="../pages/bass.php">
                                <img src="../img/bass/bass5.png" alt="">
                                <p class="color_bass">БАС-ГИТАРА</p></a>
                            </div>
                            <div class="col-6 catalog_block3">
                                <a href="../pages/electro.php">
                                <img src="../img/electro/electro5.png" alt="">
                                <p>ЭЛЕКТРО-ГИТАРА</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include("../modules/footer.php")?>
    </footer>
</body>
</html>