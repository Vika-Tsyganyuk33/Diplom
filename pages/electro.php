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
        <section class="catalog_classic">
            <p class="catalog_name">Электро-гитары</p>
            <nav aria-label="breadcrumb" class="breadcrumb_catalog">
                <a href="../pages/catalog.php"><p><span class="breadcrumb_catalog_p">Каталог</span> - </p></a>
                <a class="nav-link dropdown-toggle dropdown_toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Электро-гитары
                </a>  
                <ul class="dropdown-menu drop_menu">
                    <li><a class="dropdown-item" href="../pages/classic.php"><p>Классические гитары</p></a></li>
                    <li><a class="dropdown-item" href="../pages/acoustics.php"><p>Акустические гитары</p></a></li>
                    <li><a class="dropdown-item" href="../pages/bass.php"><p>Бас-гитары</p></a></li>
                </ul>
            </nav>  
        </section>
        <?php if (!isset($_COOKIE['role'])): ?>
        <section class="mt-3 sect_w">
            <div class="d-flex flex-row row_products row_products4">
                <?php
                    $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                    $sql = "SELECT * FROM `goods` WHERE `category` = 4 AND `count` != 0";
                    $result = mysqli_query($link, $sql);
                ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <div class="card_guitar">
                    <a href="../pages/card.php?id=<?=$row['id_goods']?>">
                    <div class="prod_img_block">
                        <button class="card_guitar_but"><p>Подробнее</p></button>
                        <img  class="mb-2 mx-auto" src="../img/electro/<?=$row['pic_goods']?>" alt="">
                        <h5 class="text-center"><?=$row['name_goods']?></h5>
                    </div>
                    <div class="all_block__card">
                        <p><?=$row['price_goods']?> р</p>
                        <button class="card_but"><a href="../pages/not_auth.php">В корзину</a></button>
                    </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php else: ?>
        <section class="mt-3 sect_w">
            <div class="d-flex flex-row row_products row_products4">
                <?php
                    $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                    $sql = "SELECT * FROM `goods` WHERE `category` = 4 AND `count` != 0";
                    $result = mysqli_query($link, $sql);
                ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <div class="card_guitar">
                    <a href="../pages/card.php?id=<?=$row['id_goods']?>">
                    <div class="prod_img_block">
                        <button class="card_guitar_but"><p>Подробнее</p></button>
                        <img  class="mb-2 mx-auto" src="../img/electro/<?=$row['pic_goods']?>" alt="">
                        <h5 class="text-center"><?=$row['name_goods']?></h5>
                    </div>
                    <div class="all_block__card">
                        <p><?=$row['price_goods']?> р</p>
                        <button class="card_but"><a href="../pages/card.php?id=<?=$row['id_goods']?>">В корзину</a></button>
                    </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </section>  
        <?php endif;?>
    </main>
    <footer>
        <?php include("../modules/footer.php")?>
    </footer>
</body>
</html>