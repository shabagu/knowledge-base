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
    $string = "Hello, World!";
    echo $string . "<br><br>";
    echo strtolower($string) . "<br>";
    echo strtoupper($string) . "<br>";
    echo strlen($string) . "<br>";
    echo $string[12] . "<br>";
    echo "123"[0] . "<br><br>";

    $string[0] = "B";
    echo $string . "<br>";
    $string[12] = "?";
    echo $string . "<br>";

    echo str_replace("Bello", "Goodbye", $string) . "<br>";
    echo str_replace("l", "!_", $string) . "<br>";

    echo substr($string, 0, 4)  . "<br>";
    echo substr($string, 12, 1) . "<br>";


?>

</body>
</html>
