<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP (freeCodeCamp)</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="favicon.svg">
</head>
<body>
<nav></nav>
<main>
    <section class="list">
        <h3>Список уроков</h3>
        <ol>
            <li><a href="l01.php">Introduction</a></li>
            <li><a href="l02.php">Windows Installation</a></li>
            <li><a href="l03.php">Choosing a Text Editor</a></li>
            <li><a href="l04.php">Hello World & Setup</a></li>
            <li><a href="l05.php">Writing HTML</a></li>
            <li><a href="l06.php">Variables</a></li>
            <li><a href="l07.php">Data Types</a></li>
            <li><a href="l08.php">Working With Strings</a></li>
            <li><a href="l09.php">Working With Numbers</a></li>
            <li><a href="l10.php">Getting User Input</a></li>
            <li><a href="l11.php">Building a Basic Calculator</a></li>
            <li><a href="l12.php">Building a Mad Libs Game</a></li>
            <li><a href="l13.php">URL Parameters</a></li>
            <li><a href="l14.php">POST vs GET</a></li>
            <li><a href="l15.php">Arrays</a></li>
            <li><a href="l16.php">Using Checkboxes</a></li>
            <li><a href="l17.php">Associative Arrays</a></li>
            <li><a href="l18.php">Functions</a></li>
            <li><a href="l19.php">Return Statements</a></li>
            <li><a href="l20.php">If Statements</a></li>
            <li><a href="l21.php">If Statements (con't)</a></li>
            <li><a href="l22.php">Building a Better Calculator</a></li>
            <li><a href="l23.php">Switch Statements</a></li>
            <li class="selected"><a href="l24.php">While Loops</a></li>
            <li><a href="l25.php">For Loops</a></li>
            <li><a href="l26.php">Comments</a></li>
            <li><a href="l27.php">Including HTML</a></li>
            <li><a href="l28.php">Include: PHP</a></li>
            <li><a href="l29.php">Classes & Objects</a></li>
            <li><a href="l30.php">Constructors</a></li>
            <li><a href="l31.php">Object Functions</a></li>
            <li><a href="l32.php">Getters & Setters</a></li>
            <li><a href="l33.php">Inheritance</a></li>
        </ol>
        <div class="source-link">
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Видео-источник</a>
        </div>
    </section>
    <section class="code">
        <h3>While Loops</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="purple">$i <span class="grey">= <span class="blue">1<span class="orange">;</span></span></span></span>

    <span class="orange">while <span class="grey">(<span class="purple">$i</span> <= <span class="blue">23</span>) {</span></span>
        <span class="purple">$i<span class="grey">++<span class="orange">;</span></span></span>
        <span class="orange">echo <span class="green">"<span class="purple">$i <span class="yellow">&lt;br&gt;</span></span>"</span>;</span>
        <span class="purple">$i<span class="grey"> += <span class="blue">10</span><span class="orange">;</span></span></span>
        <span class="orange">echo <span class="green">"<span class="purple">$i <span class="yellow">&lt;br&gt;</span></span>"</span>;</span>
    <span class="grey">}</span>

    <span class="orange">echo <span class="green">"<span class="yellow">&lt;hr&gt;</span>"</span>;</span>

    <span class="purple">$j <span class="grey">= <span class="blue">200</span></span><span class="orange">;</span></span>

    <span class="orange">do <span class="grey">{</span></span>
        <span class="orange">echo <span class="green">"<span class="purple">$j <span class="yellow">&lt;br&gt;</span></span>"</span>;</span>
    <span class="grey">} <span class="orange">while</span>(<span class="purple">$j </span>< <span class="blue">100</span>)</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                $i = 1;

                while ($i <= 23) {
                    $i++;
                    echo "$i <br>";
                    $i += 10;
                    echo "$i <br>";
                }

                echo "<hr>";

                $j = 200;

                do {
                    echo "$j <br>";
                } while ($j < 100)
            ?>
        </div>
    </section>
</main>
</body>
</html>
