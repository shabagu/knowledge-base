<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP (freeCodeCamp)</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="icon" href="../favicon.svg">
</head>
<body>
<nav></nav>
<main>
    <section class="list">
        <h3>Список уроков</h3>
        <ol>
            <li><a href="../l01/index.php">Introduction</a></li>
            <li><a href="../l02/index.php">Windows Installation</a></li>
            <li><a href="../l03/index.php">Choosing a Text Editor</a></li>
            <li><a href="../l04/index.php">Hello World & Setup</a></li>
            <li><a href="../l05/index.php">Writing HTML</a></li>
            <li><a href="../l06/index.php">Variables</a></li>
            <li><a href="../l07/index.php">Data Types</a></li>
            <li><a href="../l08/index.php">Working With Strings</a></li>
            <li><a href="../l09/index.php">Working With Numbers</a></li>
            <li><a href="../l10/index.php">Getting User Input</a></li>
            <li><a href="../l11/index.php">Building a Basic Calculator</a></li>
            <li><a href="../l12/index.php">Building a Mad Libs Game</a></li>
            <li><a href="../l13/index.php">URL Parameters</a></li>
            <li><a href="../l14/index.php">POST vs GET</a></li>
            <li><a href="../l15/index.php">Arrays</a></li>
            <li><a href="../l16/index.php">Using Checkboxes</a></li>
            <li class="selected"><a href="../l17/index.php">Associative Arrays</a></li>
            <li><a href="../l18/index.php">Functions</a></li>
            <li><a href="../l19/index.php">Return Statements</a></li>
            <li><a href="../l20/index.php">If Statements</a></li>
            <li><a href="../l21/index.php">If Statements (con't)</a></li>
            <li><a href="../l22/index.php">Building a Better Calculator</a></li>
            <li><a href="../l23/index.php">Switch Statements</a></li>
            <li><a href="../l24/index.php">While Loops</a></li>
            <li><a href="../l25/index.php">For Loops</a></li>
            <li><a href="../l26/index.php">Comments</a></li>
            <li><a href="../l27/index.php">Including HTML</a></li>
            <li><a href="../l28/index.php">Include: PHP</a></li>
            <li><a href="../l29/index.php">Classes & Objects</a></li>
            <li><a href="../l30/index.php">Constructors</a></li>
            <li><a href="../l31/index.php">Object Functions</a></li>
            <li><a href="../l32/index.php">Getters & Setters</a></li>
            <li><a href="../l33/index.php">Inheritance</a></li>
        </ol>
        <div class="source-link">
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Видео-источник</a>
        </div>
    </section>
    <section class="code">
        <h3>Associative Arrays</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="purple">$prices<span class="grey"> = [<span class="orange"><span class="green">"burger"<span class="grey">=&gt;<span class="blue">120</span></span></span>, <span class="green">"fries"<span class="grey">=&gt;<span class="blue">60</span></span></span>, <span class="green">"coke"<span class="grey">=&gt;<span class="blue">90</span></span></span>, <span class="green">"nuggets"<span class="grey">=&gt;<span class="blue">100</span>]</span></span></span></span></span><span class="orange">;</span>

    <span class="orange">echo <span class="green">"<span class="grey">Кока-кола стоит $</span>" <span class="grey">. <span class="grey"><span class="purple">$prices<span class="grey">[<span class="green">"coke"</span>] . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span></span></span></span></span>;</span>
    <span class="orange">echo <span class="green">" Количество позиций в меню: " <span class="grey">. count(<span class="purple">$prices</span>)</span></span>;</span>
<span class="orange">?&gt;</span>
<span class="yellow">&lt;hr&gt;</span>
<span class="yellow">&lt;form <span class="grey">action=<span class="lightgreen">""</span> method=<span class="lightgreen">"post"</span></span>&gt;</span>
    <span class="yellow">&lt;label&gt;</span><span class="grey"> Наименование товара</span>
        <span class="yellow">&lt;input </span><span class="grey">type=<span class="lightgreen">"text"</span> name=<span class="lightgreen">"item"</span> value=<span class="orange">&lt;?= <span class="purple">$_POST</span><span class="grey">[<span class="green">"item"</span>]</span>?&gt;</span></span><span class="yellow">&gt;</span>
    <span class="yellow">&lt;/label&gt;</span>
    <span class="yellow">&lt;input <span class="grey">type=<span class="lightgreen">"submit"</span> value=<span class="lightgreen">"Узнать стоимость"</span></span>&gt;</span>
<span class="yellow">&lt;/form&gt;</span>
<span class="orange">&lt;?php</span>
    <span class="grey"><span class="purple">$selected</span> = <span class="purple">$_POST</span>[<span class="green">"item"</span>]</span><span class="orange">;</span>
    <span class="orange">if <span class="grey">(array_key_exists(<span class="purple">$selected</span><span class="orange">, </span><span class="purple">$prices</span>)) {</span></span>
        <span class="orange">echo <span class="green">"Цена выбранного товара - $"</span><span class="grey"> . <span class="purple">$prices</span>[<span class="purple">$selected</span>]</span>;</span>
    <span class="grey">} <span class="orange">else</span> {</span>
        <span class="orange">echo <span class="green">"Товар не найден!"</span>;</span>
    <span class="grey">}</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                $prices = ["burger"=>120, "fries"=>60, "coke"=>90, "nuggets"=>100];

                echo "Кока-кола стоит $" . $prices["coke"] . "<br>";
                echo "Количество позиций в меню: " . count($prices);
            ?>
            <hr>
            <form action="" method="post">
                <label>Наименования товара
                    <input type="text" name="item" value=<?= $_POST["item"]?>>
                </label>
                <input type="submit" value="Узнать стоимость">
            </form>
            <?php
                $selected = $_POST["item"];
                if (array_key_exists($selected, $prices)) {
                    echo "Цена выбранного товара - $" . $prices[$selected];
                } else {
                    echo "Товар не найден!";
                }
            ?>
        </div>
    </section>
</main>
</body>
</html>
