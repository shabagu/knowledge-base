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
<?php
$prices = ["burger"=>120, "fries"=>60, "coke"=>90, "nuggets"=>100];

echo "Кока-кола фри стоит $" . $prices["coke"] . "<br>";
echo "Количество позиций в меню: " . count($prices);
?>
<hr>
<form action="" method="post">
    <input type="text" name="item" value=<?= $_POST["item"]?>>
    <input type="submit" value="Отправить данные">
</form>
<?php
$selected = $_POST["item"];
if (array_key_exists($selected, $prices)) {
    echo "Цена выбранного товара - $" . $prices[$_POST["item"]];
} else {
    echo "Товар не найден!";
}
?>
</body>
</html>
