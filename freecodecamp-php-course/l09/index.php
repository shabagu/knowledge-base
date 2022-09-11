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
            <li class="selected"><a href="../l09/index.php">Working With Numbers</a></li>
            <li><a href="../l10/index.php">Getting User Input</a></li>
            <li><a href="../l11/index.php">Building a Basic Calculator</a></li>
            <li><a href="../l12/index.php">Building a Mad Libs Game</a></li>
            <li><a href="../l13/index.php">URL Parameters</a></li>
            <li><a href="../l14/index.php">POST vs GET</a></li>
            <li><a href="../l15/index.php">Arrays</a></li>
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
        <h3>Working With Numbers</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="orange">echo <span class="blue">10</span><span class="grey"> . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="blue"><span class="grey">-<span class="blue">301.123</span> . </span></span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="blue">2<span class="grey"> * </span>2<span class="grey"> . </span></span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="blue">2<span class="grey"> / </span>5<span class="grey"> . </span></span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="blue">10<span class="grey"> % </span>3<span class="grey"> . </span></span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="blue">2<span class="grey"> + </span>2<span class="grey"> * </span>2<span class="grey"> . </span></span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="blue"><span class="grey">(</span>2<span class="grey"> + </span>2<span class="grey">) * </span>2<span class="grey"> . </span></span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>

    <span class="purple">$number</span><span class="grey"> = </span><span class="blue">1</span><span class="orange">;</span>
    <span class="purple">$number</span><span class="grey">++</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$number</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="purple">$number</span><span class="grey">--</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$number</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="purple">$number</span><span class="grey"> = </span><span class="purple">$number</span><span class="grey"> + </span><span class="blue">100</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$number</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="purple">$number</span><span class="grey"> += </span><span class="blue">100</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$number</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span>;</span>

    <span class="orange">echo <span class="grey">abs(-<span class="blue">100</span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">pow(<span class="orange"><span class="blue">2</span>, <span class="blue">4</span></span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">sqrt(<span class="blue">1024</span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">max(<span class="orange"><span class="blue">5</span>, <span class="blue">10</span>, <span class="blue">-19</span>, <span class="blue">4444</span></span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">min(<span class="orange"><span class="blue">5</span>, <span class="blue">10</span>, <span class="blue">-19</span>, <span class="blue">4444</span></span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">round(<span class="blue">25.3</span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">ceil(<span class="blue">9.01</span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">floor(<span class="blue">12.9</span>) . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="purple">$a</span><span class="grey"> = </span><span class="blue">4</span><span class="orange">;</span>
    <span class="purple">$b</span><span class="grey"> = </span><span class="blue">5</span><span class="orange">;</span>
    <span class="purple">$c<span class="grey"> = </span>$a<span class="grey"> . </span>$b</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$c</span>;</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                echo 10 . "<br>";
                echo -301.123 . "<br>";
                echo 2 * 2 . "<br>";
                echo 2 / 5 . "<br>";
                echo 10 % 3 . "<br>";
                echo 2 + 2 * 2 . "<br>";
                echo (2 + 2) * 2 . "<br><br>";

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
                echo $number . "<br><br>";

                echo abs(-100) . "<br>";
                echo pow(2, 4) . "<br>";
                echo sqrt(1024) . "<br>";
                echo max(5, 10, -19, 4444) . "<br>";
                echo min(5, 10, -19, 4444) . "<br>";
                echo round(25.3) . "<br>";
                echo ceil(9.01) . "<br>";
                echo floor(12.9) . "<br>";
                $a = 4;
                $b = 5;
                $c = $a . $b;
                echo $c;
            ?>
        </div>
    </section>
</main>
</body>
</html>
