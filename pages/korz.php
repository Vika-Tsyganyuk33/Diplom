<?php
    session_start();
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if(isset($_GET['delete_id']) && isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value['id_goods'] == $_GET['delete_id']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="../js/cart.js"></script>
    <script defer src="../js/script.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body style="background: #000;">
    <?php include("../modules/header.php")?>
    <main class="container mb-3">
        <section class="section_korz">
        <?php if (!isset($_COOKIE['role'])): ?>
            <div class="cart prod_korz mb-5">
                <p style="height: 100%;">Для добавления товара в корзину необходимо авторизоваться</p>
            </div>
        <?php else: ?>
            <div class="cart prod_korz">
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <?php 
                $total_sum = 0;  
                foreach ($_SESSION['cart'] as $item): 
                ?>
                <?php //вычисление общей стоимости товара на количество
                $item_total = $item['price_goods'] * $item['quantity'];
                $total_sum +=$item['price_goods'] * $item['quantity'];
                ?>
                <div class='row cart_goods'>
                    <div class='col-2 img_prod__korz'>
                        <img src="../img/classic/<?=$item['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt=''>
                        <img src="../img/acoustics/<?=$item['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt=''>
                        <img src="../img/electro/<?=$item['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt=''>
                        <img src="../img/bass/<?=$item['pic_goods']?>" onerror="this.onerror=null; this.remove();" alt=''>
                    </div>
                    <div class='col-4 korz_info_prod mb-3'>
                        <p> <?=$item['name_goods']?></p>
                        <div class='deliv'>
                            <img class='img_svg' src='../img/tracking.svg' alt=''>
                            <p>Доставка: завтра</p>
                        </div>
                    </div>
                    <div class='col redact_count'>
                        <div class='counter quant' style="width: 90px;">
                            <form class="update_form" action="../php/update_cart.php" id="formUpdate" method="post">
                                <input type="hidden" id="quantity_<?=$item['id_goods']?>" name="quantity" class="quantity_hidden" value='<?=$item['quantity']?>'>
                                <input type="hidden" class="product_id" value="<?=$item['id_goods'] ?>">
                                <input type="hidden" id="price" value='<?=$item['quantity'] * $item['price_goods']?> max="<?=$item['count']?>"'>
                                <!-- Добавлено для каждого товара -->
                                <input type="hidden" class="item_total_price" value='<?= $item['quantity'] * $item['price_goods'] ?>'>
                                <button style="color: black; padding-right: 5px;" class='button' onclick="updateQuantity(this, -1)">-</button>
                                <input type='text' readonly class="quantity num_count" value='<?=$item['quantity']?>' max="<?=$item['count']?>">
                                <button style="color: black; padding-left: 5px;" class='button' onclick="updateQuantity(this, 1)">+</button>
                            </form>
                            <?php
                                $quantity = $item['quantity'];
                                $count = $item['count'];
                                $visibleClass = ($quantity >= $count) ? 'visible' : '';
                            ?>
                            <div class="max-quantity-message <?=$visibleClass?>" id="error-message"><p>Максимальное количество товара</p></div>
                            <!-- Quantity: <?= $quantity ?> Count:  <?= $count ?>, Visible Class:  <?= $visibleClass ?> -->
                        </div>
                    </div>
                    <style>
                        .max-quantity-message {
                            display: none;
                            color: #dc3545;
                        }
                        .max-quantity-message p {
                            margin-bottom: 0;
                            margin-top: 3px;
                        }
                        .max-quantity-message.visible {
                            display: block;
                        }
                    </style>
                    <div class='col count_amount'>
                        <p><?=$item_total_price = $item['quantity'] * $item['price_goods']?> р</p>
                    </div>
                    <div class='col bin'>
                        <a href="../pages/korz.php?delete_id=<?=$item['id_goods']?>"><img src='../img/bin.svg' alt=''></a>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class='korz-all_sum'>
                    <form method='POST' action='../php/orders_korz.php'>
                        <p class="total_price">Итого: <span id="totalPriceSum"><?= str_replace(',', ' ', number_format($total_sum, 0)) ?> р</span></p> <!-- Общая стоимость для всех товаров -->
                        <button type='submit'>Оформить заказ</button>
                    </form>
                </div>
                <div class="delivery" style="font-family: 'Giger.ttf';">
                    <label class="mb-3" for="del-select">Способ доставки:</label>
                    <select id="del-select">
                        <option value=""></option>
                        <option value="courier">Курьер</option>
                        <option value="pickup">Самовывоз</option>
                    </select><br>
                    <label class="mt-2" for="del-select">Адрес доставки:</label>
                    <input type="text" placeholder="Введите свой адрес">
                    <p class="mt-3">Стоимость доставки составляет: .. р</p>
                 </div> 
                <?php else: ?>
                    <div style="height: 100%;">
                        <p>Ваша корзина пустая</p>
                    </div>
                <?php endif?>
            </div> 
            <?php endif; ?>     
        </section>
    </main>
    <footer class="mt-5">
        <?php include("../modules/footer.php")?>
    </footer>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let quantityInputs = document.querySelectorAll('.quantity');

        quantityInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                let maxQuantity = parseInt(this.getAttribute('max'));
                let message = this.parentNode.querySelector('.max-quantity-message');

                if (parseInt(this.value) === maxQuantity) {
                    message.style.display = 'block';
                } else {
                    message.style.display = 'none';
                }
            });
        });
    });
}

</script>
</body>
</html>