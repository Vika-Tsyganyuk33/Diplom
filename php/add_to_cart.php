<?php
session_start();
// Проверяем, был ли запрос методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_goods = $_POST['id_goods'];
    $name_goods = $_POST['name_goods'];
    $price_goods = $_POST['price_goods'];
    $pic_goods = $_POST['pic_goods'];
    $count = $_POST['count'];
 // Создаем массив с информацией о товаре
    $item = array(
        'id_goods' => $id_goods,
        'name_goods' => $name_goods,
        'price_goods' => $price_goods,
        'pic_goods' => $pic_goods,
        'count' => $count,
        'quantity' => 1,
        'item_total_price' => $item_total_price
    );
// Проверяем, существует ли уже корзина в сессии
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
// Флаг для проверки, был ли товар уже добавлен в корзину
    $found = false;
    // Проходим по всем товарам в корзине
    foreach ($_SESSION['cart'] as & $cart_item) {
        // Если товар уже есть в корзине
        if ($cart_item['id_goods'] == $id_goods) {
            $cart_item['quantity'] += 1;
            $cart_item['item_total_price'] = $cart_item['quantity'] * $cart_item['price_goods'];
            // Устанавливаем флаг в true, так как товар найден
            $found = true;
            break;// Прекращаем поиск, так как товар уже найден
        }
    }
// Если товар не найден в корзине
    if (!$found) {
        // Добавляем новый товар в корзину
        $item['item_total_price'] = $item['quantity'] * $item['price_goods'];
        array_push($_SESSION['cart'], $item);
    }
   // Перенаправляем пользователя обратно на страницу каталога
    header("Location: /pages/korz.php");
    exit();
}
?>

