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
    echo 10 . "<br>";
    echo -301.123 . "<br>";
    echo 2 * 2 . "<br>";
    echo 2 / 5 . "<br>";
    echo 10 % 3 . "<br>";
    echo 2 + 2 * 2 . "<br>";
    echo (2 + 2) * 2 . "<br>";

    $number = 1;
    $number++;
    echo $number . "<br>";
    $number--;
    echo $number . "<br>";
    $number = $number + 100;
    echo $number . "<br>";
    $number += 100;
    echo $number . "<br>";
    $number %= 99;
    echo $number . "<br>";

    echo abs(-100) . "<br>";
    echo pow(2, 4) . "<br>";
    echo sqrt(1024) . "<br>";
    echo max(5, 10, -19, 40) . "<br>";
    echo min(5, 10, -19, 40) . "<br>";
    echo round(25.3) . "<br>";
    echo ceil(9.01) . "<br>";
    echo floor(12.9) . "<br>";
    $a = 4;
    $b = 5;
    $c = $a . $b;
    echo $c . "<br>";





?>

</body>
</html>
