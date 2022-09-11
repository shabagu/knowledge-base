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
            <li class="selected"><a href="../l08/index.php">Working With Strings</a></li>
            <li><a href="../l09/index.php">Working With Numbers</a></li>
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
        <h3>Working With Strings</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="purple">$string</span><span class="grey"> = </span><span class="green">"Hello, world!"</span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$string</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="grey">strtolower(<span class="purple">$string</span>) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="grey">strtoupper(<span class="purple">$string</span>) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="grey">strlen(<span class="purple">$string</span>) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="purple">$string<span class="grey">[<span class="blue">12</span>] . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span></span>;</span>
    <span class="orange">echo <span class="green">"123"<span class="grey">[<span class="blue">0</span>] . <span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span></span></span>;</span>

    <span class="purple">$string<span class="grey">[<span class="blue">0</span>] = </span><span class="green">"B"</span></span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$string</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="purple">$string<span class="grey">[<span class="blue">12</span>] = </span><span class="green">"?"</span></span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$string</span><span class="grey"> . </span><span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span>;</span>

    <span class="orange">echo <span class="grey">str_replace(<span class="orange"><span class="green">"Bello"</span>,<span class="green">"Goodbye"</span>, <span class="purple">$string</span></span>) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="grey">str_replace(<span class="orange"><span class="green">"l"</span>,<span class="green">"!_"</span>, <span class="purple">$string</span></span>) . <span class="green">"<span class="yellow">&lt;br&gt;&lt;br&gt;</span>"</span></span>;</span>

    <span class="orange">echo <span class="grey">substr(<span class="orange"><span class="purple">$string</span>, <span class="blue">0</span>, <span class="blue">4</span></span>) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="grey">substr(<span class="orange"><span class="purple">$string</span>, <span class="blue">12</span>, <span class="blue">1</span></span>)</span>;</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                $string = "Hello, World!";
                echo $string . "<br>";
                echo strtolower($string) . "<br>";
                echo strtoupper($string) . "<br>";
                echo strlen($string) . "<br>";
                echo $string[12] . "<br>";
                echo "123"[0] . "<br><br>";

                $string[0] = "B";
                echo $string . "<br>";
                $string[12] = "?";
                echo $string . "<br><br>";

                echo str_replace("Bello", "Goodbye", $string) . "<br>";
                echo str_replace("l", "!_", $string) . "<br><br>";

                echo substr($string, 0, 4) . "<br>";
                echo substr($string, 12, 1);
            ?>
        </div>
    </section>
</main>
</body>
</html>
