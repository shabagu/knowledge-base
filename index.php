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
<!--<form action="index.php" method="get">-->
<!--    Password:-->
<!--    <input type="password" name="password">-->
<!--    <input type="submit">-->
<!--</form>-->
<form action="index.php" method="post">
    Password:
    <input type="password" name="password">
    <input type="submit">
</form>
<?php
//    echo @$_GET["password"];
    echo @$_POST["password"];
?>
</body>
</html>
