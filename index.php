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

<form action="index.php" method="get">
    Number #1: <input type="number" name="number1">
    Number #2: <input type="number" name="number2">
    <input type="submit">
</form>
<?php
    $result = $_GET["number1"] + $_GET["number2"]
?>
Result is <?= $result; ?>
</body>
</html>
