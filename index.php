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
    # Объявление массивов
//    $friends = array("Димас", "Игорь", "Владос", "Колюпаха");
    $friends = ["Димас", "Игорь", "Владос", "Колюпаха", 1, false];
    $fish = ["new"=>"yellow", "old"=>"green", "river"=>"grey"];

?>
    <pre><?php
    # Вывод массива через функцию var_dump()
    var_dump($friends);

    # Вывод элемента массива по индексу
    echo $friends[1];
    echo "<br><br>";

    # Добавление/удаление элементов массива
    $friends[6] = "Каркасы";
    unset($friends[2]);
    $friends[100] = "Олег";

    var_dump($friends);
    echo "<br>";

    # Вывод ассоциативного массива
    var_dump($fish);
    echo "<br>";
    echo $fish["river"] . "<br>";

    $fish["river"] = "nice"; // Изменение элемента массива
    echo $fish["river"][0] . "<br><br>"; // Вывод символа строки по индексу

    # Расчёт количества элементов массива
    echo "Количество элементов массива \$fish - " . count($fish);

    ?></pre>

</body>
</html>
