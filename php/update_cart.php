<?php
session_start();

// Проверяем, на пост запрос
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Проверка на корзину и сессию
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // По всем товарам в корзине проходим
    foreach ($_SESSION['cart'] as & $cartItem) {
        // Товар с нужным айди найден
        if ($cartItem['id_goods'] == $productId) {
            // Обновляем количество товара
            $cartItem['quantity'] = $quantity;
            break;
        }
    }

    // Перенаправляем обратно на страницу корзины
    header("Location: /pages/korz.php");
    exit();
}
?>
