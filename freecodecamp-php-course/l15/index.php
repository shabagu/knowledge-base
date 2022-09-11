<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>freecodecamp-php-course</title>
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
            <li class="selected"><a href="../l15/index.php">Arrays</a></li>
            <li><a href="../l16/index.php">Using Checkboxes</a></li>
            <li><a href="../l17/index.php">Associative Arrays</a></li>
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
        <h3>Arrays</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="darkgrey"># Объявление массивов</span>
    <span class="darkgrey">//    $friends = array("Димас", "Игорь", "Владос", "Колюпаха");</span>
    <span class="purple">$friends <span class="grey">= [<span class="orange"><span class="green">"Димас"</span>, <span class="green">"Игорь"</span>, <span class="green">"Владос"</span>, <span class="green">"Колюпаха"</span>, <span class="blue">1</span>, false</span>]</span></span><span class="orange">;</span>
    <span class="purple">$fish <span class="grey">= [<span class="green">"new"</span>=&gt;<span class="green">"yellow"</span><span class="orange">,</span> <span class="green">"old"</span>=&gt;<span class="green">"green"</span><span class="orange">,</span><span class="green">"river"</span>=&gt;<span class="green">"grey"</span>]</span></span><span class="orange">;</span>
<span class="orange">?&gt;</span>

<span class="yellow">&lt;pre&gt;</span><span class="orange">&lt;?php</span>
    <span class="darkgrey"># Вывод массива через функцию var_dump()</span>
    <span class="grey">var_dump(<span class="purple">$friends</span>)</span><span class="orange">;</span>

    <span class="darkgrey"># Вывод элемента массива по индексу</span>
    <span class="orange">echo <span class="purple">$friends<span class="grey">[<span class="blue">1</span>]</span></span>;</span>
    <span class="orange">echo <span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span>;</span>

    <span class="darkgrey"># Добавление/удаление элементов массива</span>
    <span class="purple">$friends<span class="grey">[<span class="blue">6</span>] = <span class="green">"Каркасы"</span></span></span><span class="orange">;</span>
    <span class="purple">$friends<span class="grey">[<span class="blue">100</span>] = <span class="green">"Олег"</span></span></span><span class="orange">;</span>
    <span class="orange">unset <span class="grey">(<span class="purple">$friends</span>[<span class="blue">2</span>])</span></span><span class="orange">;</span>
    <span class="grey">var_dump(<span class="purple">$friends</span>)<span class="orange">;</span></span>
    <span class="orange">echo <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>

    <span class="darkgrey"># Вывод ассоциативного массива</span>
    <span class="grey">var_dump(<span class="purple">$fish</span>)</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$fish</span><span class="grey">[<span class="green">"river"</span>] . <span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span></span></span>

    <span class="darkgrey"># Изменение элемента массива</span>
    <span class="purple">$fish<span class="grey">[<span class="green">"river"</span>] = <span class="green">"nice"</span></span></span><span class="orange">;</span>
    <span class="grey">var_dump(<span class="purple">$fish</span>)</span><span class="orange">;</span>

    <span class="darkgrey"># Вывод символа строки по индексу</span>
    <span class="orange">echo <span class="purple">$fish<span class="grey">[<span class="green">"river"</span>][<span class="blue">0</span>] . <span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span></span></span>;</span>

    <span class="darkgrey"># Расчёт количества элементов массива</span>
    <span class="orange">echo <span class="green">"Количество элементов массива <span class="orange"> \$</span>fish = "</span><span class="grey">. count(<span class="purple">$fish</span>)</span>;</span>
<span class="orange">?&gt;<span class="yellow">&lt;/pre&gt;</span></span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
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
                $friends[100] = "Олег";
                unset($friends[2]);
                var_dump($friends);
                echo "<br>";

                # Вывод ассоциативного массива
                var_dump($fish);
                echo $fish["river"] . "<br><br>";

                # Изменение элемента массива
                $fish["river"] = "nice";
                var_dump($fish);

                # Вывод символа строки по индексу
                echo $fish["river"][0] . "<br><br>";

                # Расчёт количества элементов массива
                echo "Количество элементов массива \$fish = " . count($fish);
            ?></pre>
        </div>
    </section>
</main>
</body>
</html>
