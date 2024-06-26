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
    <main class="container container_card">
        <?php
        $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
        $id = $_GET['id'];
        $sql = "SELECT * FROM `goods` WHERE `id_goods` = '$id'";
        $result = mysqli_query($link, $sql);
        $card = mysqli_fetch_assoc($result);
        ?>
        <?php if (!isset($_COOKIE['role'])): ?>
        <div class="row align-items-start card_block">
            <div class="col-3">
                <img src="../img/classic/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                <img src="../img/electro/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                <img src="../img/bass/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                <img src="../img/acoustics/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
            </div>
            <div class="col">
                <h3><?=$card['name_goods']?></h3>
                <div class="row align-items-start card_block__price">
                    <div class="col card_info_block">
                        <p class="card_info"><?=$card['description']?></p>
                    </div>
                    <div class="col">
                        <div class="col2">
                            <p class="card_price"><?=$card['price_goods']?> р</p>
                            <form method='POST' action='../php/add_to_cart.php' class="text-dark">
                                <input type='hidden' name='id_goods' value='<?=$card["id_goods"]?>'>
                                <input type='hidden' name='name_goods' value='<?=$card["name_goods"]?>'>
                                <input type='hidden' name='price_goods' value='<?=$card["price_goods"]?>'>
                                <input type='hidden' name='count' value='<?=$card["count"]?>'>
                                <button><a href="../pages/not_auth.php">Добавить в корзину</a></button>
                            </form>
                            <p class="card_stock">В наличии: <?=$card['count']?> шт.</p>
                            <p class="card_grey">На складе интернет-магазина</p>
                            <p class="card_grey">В магазине на Таганской</p>
                            <p class="card_grey">В магазине на Савеловской</p>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
        <div class="card_mobile_all">
            <div class="card_mobile">
                <div class="card_mobile__img d-flex justify-content-center">
                    <img class="mx-auto" src="../img/classic/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                    <img class="mx-auto" src="../img/electro/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                    <img class="mx-auto" src="../img/bass/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                    <img class="mx-auto" src="../img/acoustics/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                </div>
                <div class="card_mobile__info">
                    <h3><?=$card['name_goods']?></h3>
                    <div class="mobile__info_stock">
                        <p class="card_stock">В наличии: <?=$card['count']?> шт.</p>
                        <p class="card_grey">На складе интернет-магазина</p>
                        <p class="card_grey">В магазине на Таганской</p>
                        <p class="card_grey">В магазине на Савеловской</p>
                    </div>
                    <div class="col2">
                        <p class="card_price"><?=$card['price_goods']?> р</p>
                        <button id="but_korz"><a href="../pages/not_auth.php">В корзину</a></button>
                    </div>               
                </div>
            </div>
            <div class="card_info_block">
                <h2>Описание</h2>
                <p class="card_info"><?=$card['description']?></p>
            </div>
        </div>
        <?php else: ?>
            <div class="row align-items-start card_block">
            <div class="col-3">
                <img src="../img/classic/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                <img src="../img/electro/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                <img src="../img/bass/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
                <img src="../img/acoustics/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="">
            </div>
            <div class="col">
                <h3><?=$card['name_goods']?></h3>
                <div class="row align-items-start card_block__price">
                    <div class="col card_info_block">
                        <p class="card_info"><?=$card['description']?></p>
                    </div>
                    <div class="col">
                        <div class="col2">
                            <p class="card_price"><?=$card['price_goods']?> р</p>
                            <form method='POST' action='../php/add_to_cart.php' class="text-dark">
                                <input type='hidden' name='id_goods' value='<?=$card["id_goods"]?>'>
                                <input type='hidden' name='name_goods' value='<?=$card["name_goods"]?>'>
                                <input type='hidden' name='pic_goods' value='<?=$card["pic_goods"]?>'>
                                <input type='hidden' name='price_goods' value='<?=$card["price_goods"]?>'>
                                <input type='hidden' name='count' value='<?=$card["count"]?>'>
                                <button type='submit'>Добавить в корзину</button>
                            </form>
                            <p class="card_stock">В наличии: <?=$card['count']?> шт.</p>
                            <p class="card_grey">На складе интернет-магазина</p>
                            <p class="card_grey">В магазине на Таганской</p>
                            <p class="card_grey">В магазине на Савеловской</p>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
        <div class="card_mobile_all">
            <div class="card_mobile">
                <div class="card_mobile__img d-flex justify-content-center">
                    <img class="mx-auto" src="../img/classic/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="1">
                    <img class="mx-auto" src="../img/electro/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="2">
                    <img class="mx-auto" src="../img/bass/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="3">
                    <img class="mx-auto" src="../img/acoustics/<?=$card['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt="4">
                </div>
                <div class="card_mobile__info">
                    <h3><?=$card['name_goods']?></h3>
                    <div class="mobile__info_stock">
                        <p class="card_stock">В наличии: <?=$card['count']?> шт.</p>
                        <p class="card_grey">На складе интернет-магазина</p>
                        <p class="card_grey">В магазине на Таганской</p>
                        <p class="card_grey">В магазине на Савеловской</p>
                    </div>
                    <div class="col2">
                        <p class="card_price ms-2"><?=$card['price_goods']?> р</p>
                        <form method='POST' action='../php/add_to_cart.php' class="text-dark">
                           <input type='hidden' name='id_goods' value='<?=$card["id_goods"]?>'>
                                <input type='hidden' name='name_goods' value='<?=$card["name_goods"]?>'>
                                <input type='hidden' name='pic_goods' value='<?=$card["pic_goods"]?>'>
                                <input type='hidden' name='price_goods' value='<?=$card["price_goods"]?>'>
                                <input type='hidden' name='count' value='<?=$card["count"]?>'>
                            <button id="but_korz" type='submit'>В корзину</button>
                        </form>
                    </div>               
                </div>
            </div>
            <div class="card_info_block">
                <h2>Описание</h2>
                <p class="card_info"><?=$card['description']?></p>
            </div>
        </div>
        <?php endif;?>
    </main>
    <footer>
        <?php include("../modules/footer.php")?>
    </footer>
</body>
</html>