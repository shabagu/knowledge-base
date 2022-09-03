<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>selflearn (php)</title>
</head>
<body>
<p>Сделайте ваш заказ!</p>
<form action="" method="post">
    Бургер: <input type="checkbox" name="items[]" value="burger"><br>
    Картошка фри: <input type="checkbox" name="items[]" value="fries"><br>
    Кола: <input type="checkbox" name="items[]" value="coke"><br>

    <hr>
    <input type="submit">
</form>
<?php
    $items = $_POST["items"];
?>
<pre><?php var_dump($items); ?></pre>
</body>
</html>
