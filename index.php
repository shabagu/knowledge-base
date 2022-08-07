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
    Color:<br><input type="text" name="color"><br>
    Plural noun:<br><input type="text" name="noun"><br>
    Verb:<br><input type="text" name="verb"><br>
    <input type="submit">
</form>

    <?php
    $color = $_GET["color"];
    $noun = $_GET["noun"];
    $verb = $_GET["verb"];

    echo "roses are $color" . "<br>";
    echo "$noun are blue" . "<br>";
    echo "I $verb you" . "<br>";
    ?>

</body>
</html>
