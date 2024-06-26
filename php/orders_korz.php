<?php 
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $name_user = $_COOKIE['id'];

    // Подключение к базе данных 
    $servername = "127.0.0.1"; 
    $username = "h9825119_ts"; 
    $password = "Root333"; 
    $dbname = "h9825119_ts"; 

    $conn = new mysqli($servername, $username, $password, $dbname); 

    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    } 

    // Текущая дата и время 
    $date = date('Y-m-d H:i:s'); 

    foreach ($_SESSION['cart'] as $item) { 
        $id_goods = $item['id_goods']; 
        $id_prod = $item['id_goods']; 
        $count = $item['quantity']; 
        $price = $item['price_goods']; 
        $item_total_price = $item['item_total_price']; 
        
        

        // Получение текущего количества товара из базы данных
        $result = $conn->query("SELECT `count` FROM `goods` WHERE `id_goods` = '$id_goods'");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $current_count = $row['count'];
            
            // Проверка, достаточно ли товара на складе
            if ($current_count >= $count) {
                // Обновление количества товара в базе данных
                $new_count = $current_count - $count;
                $update_sql = "UPDATE `goods` SET `count` = '$new_count' WHERE `id_goods` = '$id_goods'";
                if ($conn->query($update_sql) === TRUE) {
                    // Вставка данных в таблицу orders
                    $insert_sql = "INSERT INTO `orders` (`name_user`, `id_prod`, `count`, `price`, `date`) VALUES ('$name_user', '$id_goods', '$count', '$price', '$date')";
                    if (!$conn->query($insert_sql)) {
                        echo "Ошибка: " . $insert_sql . "<br>" . $conn->error; 
                    }
                } else {
                    echo "Ошибка при обновлении количества товара: " . $conn->error;
                }
            } else {
                echo "Недостаточно товара на складе для товара с ID: $id_goods";
            }
        } else {
            echo "Товар с ID: $id_goods не найден";
        }
    } 

    // Очистка корзины после оформления заказа 
    unset($_SESSION['cart']); 

    $conn->close(); 

    // Перенаправление на страницу с подтверждением заказа 
    header("Location: /pages/confirm.php"); 
    exit(); 
} 
?>