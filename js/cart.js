// Функция для обновления количества товара и вычисления общей стоимости
function updateQuantity(button, increment) {
    let counter = button.closest('.counter');
    let quantityInput = counter.querySelector('.quantity');
    let productId = counter.querySelector('.product_id').value;
    let quantity = parseInt(quantityInput.value) + increment;

    // Запрещаем ему быть больше max значение 
    let maxQuantity = parseInt(quantityInput.getAttribute('max'));
    quantity = Math.max(1, Math.min(quantity, maxQuantity));

    quantityInput.value = quantity; // Обновляем значение скрытого поля quantity

    // Отправляем форму для обновления товара в сессии
    let form = button.closest('form');
    let formData = new FormData(form);
    formData.append('product_id', productId);
    formData.append('quantity', quantity);
    let xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Действия после успешного обновления
            console.log('Товар успешно обновлен в сессии');
        } else {
            // Обработка ошибок при обновлении
            console.error('Ошибка при обновлении товара в сессии');
        }
    };
    xhr.send(formData);
}
