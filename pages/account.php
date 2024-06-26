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
    <main class="container table_admin_cont mb-4">
        <section class="table_admin">
            <?php if($_COOKIE['role'] == 2): ?>
            <h1 class="text-center mt-3">Администратор</h3>
            <?php 
                $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                $sql = "SELECT * FROM `goods` WHERE `category` = 1";
                $result = mysqli_query($link, $sql);
            ?>
            <h4 class="mt-4">Классические гитары</h4>
            <div class="tab_scroll">
                <table class="table table-dark mt-2">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)): ?>
                        <tr>
                        <th class="text-center"><?=$row['id_goods']?></th>
                        <td><img src="../img/classic/<?=$row['pic_goods']?>" alt=""></td>
                        <td><?=$row['name_goods']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['count']?></td>
                        <td><?=$row['price_goods']?></td>
                        <td><a href="../pages/red.php?id=<?=$row['id_goods']?>">Редактировать</a></td>
                        <td><a href="../php/redact/delete.php?id=<?=$row['id_goods']?>">Удалить</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <button class="addbut mt-3"><a href="../pages/addprod.php">Добавить товар</a></button>
            </div>
            <?php 
                $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                $sql = "SELECT * FROM `goods` WHERE `category` = 2";
                $result = mysqli_query($link, $sql);
            ?>
            <h4 class="mt-4">Акустические гитары</h4>
            <div class="tab_scroll">
                <table class="table table-dark mt-2">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)): ?>
                        <tr>
                        <th class="text-center"><?=$row['id_goods']?></th>
                        <td><img src="../img/acoustics/<?=$row['pic_goods']?>" alt=""></td>
                        <td><?=$row['name_goods']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['count']?></td>
                        <td><?=$row['price_goods']?></td>
                        <td><a href="../pages/red.php?id=<?=$row['id_goods']?>">Редактировать</a></td>
                        <td><a href="../php/redact/delete.php?id=<?=$row['id_goods']?>">Удалить</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <button class="addbut mt-3"><a href="../pages/addprod.php">Добавить товар</a></button>
            </div>
            <?php 
                $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                $sql = "SELECT * FROM `goods` WHERE `category` = 3";
                $result = mysqli_query($link, $sql);
            ?>
            <h4 class="mt-4">Бас-гитары</h4>
            <div class="tab_scroll">
                <table class="table table-dark mt-2 tab_scroll">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)): ?>
                        <tr>
                        <th class="text-center"><?=$row['id_goods']?></th>
                        <td><img src="../img/bass/<?=$row['pic_goods']?>" alt=""></td>
                        <td><?=$row['name_goods']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['count']?></td>
                        <td><?=$row['price_goods']?></td>
                        <td><a href="../pages/red.php?id=<?=$row['id_goods']?>">Редактировать</a></td>
                        <td><a href="../php/redact/delete.php?id=<?=$row['id_goods']?>">Удалить</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <button class="addbut mt-3"><a href="../pages/addprod.php">Добавить товар</a></button>
            </div>
            <?php 
                $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
                $sql = "SELECT * FROM `goods` WHERE `category` = 4";
                $result = mysqli_query($link, $sql);
            ?>
            <h4 class="mt-4">Электро-гитары</h4>
            <div class="tab_scroll">
                <table class="table table-dark mt-2 tab_scroll">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)): ?>
                        <tr>
                        <th class="text-center"><?=$row['id_goods']?></th>
                        <td><img src="../img/electro/<?=$row['pic_goods']?>" alt=""></td>
                        <td><?=$row['name_goods']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['count']?></td>
                        <td><?=$row['price_goods']?></td>
                        <td><a href="../pages/red.php?id=<?=$row['id_goods']?>">Редактировать</a></td>
                        <td><a href="../php/redact/delete.php?id=<?=$row['id_goods']?>">Удалить</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <button class="addbut mt-3"><a href="../pages/addprod.php">Добавить товар</a></button>
            </div>
        </section>
        <?php else: ?>
        <?php 
            $link = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts');
            $id = $_COOKIE['id'];
            $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
            $result = mysqli_query($link, $sql);
            $card = mysqli_fetch_assoc($result);
        ?>
        <section class="pers container">
            <div class="block_color">
                <img class="block_color__img" src="../img/block_color.png" alt="">
                <h4><?=$card['surname']?> <?=$card['name']?></h4>
            </div>
            <div class="pers_info">
                <div class="row info_personal">
                    <div class="col">
                        <h4>МОИ АКЦИИ</h4>
                        <p class="mb-4">Используйте, пока бонусы не сгорели</p>
                        <div class="personal_shares">
                            <div class="personal_pos"><p>На первую покупку</p></div>
                            <p class="text_shares">Скидка 10% при заказе в нашем магазине и на самовывоз</p>
                            <p class="data_shares" id="data_shares">до 31 августа</p>
                            <button>Применить</button>
                            <img src="../img/gitara-vektor.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h4>МОИ ДАННЫЕ</h4>
                        <div class="personal_info__block">
                            <p>Логин: <span class="info_grey"><?=$card['login']?></span></p>
                            <p>Пароль: <span class="info_grey">*********</span></p>
                            <a href="../pages/redact_account.php?id=<?=$card['id']?>"><img class="menu_all" src="../img/menu.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="cart_block">
                    <h4>ИСТОРИЯ ЗАКАЗОВ</h4>
                    <?php 
                        $id = $_COOKIE['id']; 
                        $mysql = mysqli_connect('127.0.0.1', 'h9825119_ts', 'Root333', 'h9825119_ts'); 
                        $sql = $mysql->query ("SELECT orders.*, goods.*, orders.count AS order_count FROM orders INNER JOIN goods ON orders.id_prod = goods.id_goods WHERE orders.name_user = '$id'");
                        if(mysqli_num_rows($sql) == 0): 
                    ?>
                    <div class="text_cart" id="text_cart">
                        <p>Ваша история пуста!</p>
                    </div>
                    <?php else: ?>
                    <div class="text_cart_prod"> 
                        <div class="block_last__orders">
                            <?php while($row = mysqli_fetch_assoc($sql)): ?>
                            <div class="last_order">
                                <img src="/img/classic/<?=$row['pic_goods'] ?>" onerror="this.onerror=null; this.remove();" alt="">
                                <img src="/img/acoustics/<?=$row['pic_goods'] ?>" onerror="this.onerror=null; this.remove();" alt="">
                                <img src="/img/bass/<?=$row['pic_goods'] ?>" onerror="this.onerror=null; this.remove();" alt="">
                                <img src="/img/electro/<?=$row['pic_goods'] ?>" onerror="this.onerror=null; this.remove();" alt="">
                                <div class="last_order_descr">
                                    <p class="text-center my-2"><?=$row['name_goods'] ?> </p>
                                    <p>Дата: <?=$row['date']?></p>
                                    <p>Количество: <?=$row['order_count']?> шт.</p>
                                    <p>Итого: <?= $row['price'] * $row['order_count']?>  р</p>
                                </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                    </div> 
                    <?php endif; ?>
                </div>
            </div>    
        </section>
        <?php endif; ?>
    </main>
    <footer>
        <?php include("../modules/footer.php")?>
    </footer>
</body>
</html>