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
    Username:<br>
    <input type="text" name="username"><br>
    Age:<br>
    <input type="number" name="age"><br>
    <input type="submit">
</form>
Your username is <?php echo $_GET["username"]; ?> <br>
Your age is <?php echo $_GET["age"]; ?>

</body>
</html>
