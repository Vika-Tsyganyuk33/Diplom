<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body style="background: #000;">
    <div class="log">
        <p>Вы авторизованы!</p>
        <script>
            setTimeout(function() {
                window.location.href = "../pages/account.php";
            }, 2000);
        </script>
    </div>
</body>
</html>