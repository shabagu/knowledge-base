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
            <li class="selected"><a href="../l07/index.php">Data Types</a></li>
            <li><a href="../l08/index.php">Working With Strings</a></li>
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
        <h3>Data types</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="purple">$stringVar</span><span class="grey"> = </span><span class="green">"My name is Jeff"</span><span class="orange">;</span>
    <span class="purple">$integerVar</span><span class="grey"> = </span><span class="blue">123</span><span class="orange">;</span>
    <span class="purple">$floatVar</span><span class="grey"> = </span><span class="blue">10.5</span><span class="orange">;</span>
    <span class="purple">$booleanVar</span><span class="grey"> = </span><span class="orange">true;</span>
    <span class="purple">$nullVar</span><span class="grey"> = </span><span class="orange">null;</span>

    <span class="darkgrey">// array</span>
    <span class="darkgrey">// object</span>
    <span class="darkgrey">// resource</span>
    <span class="darkgrey">// mixed</span>

    <span class="darkgrey">// Имя класса/интерфейса</span>
    <span class="darkgrey">// self</span>
    <span class="darkgrey">// parent</span>
    <span class="darkgrey">// iterable</span>
    <span class="darkgrey">// callable</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>Типы данных</h3>
        <?php
            $stringVar = "My name is Jeff";
            $integerVar = 123;
            $floatVar = 10.5;
            $booleanVar = true;
            $nullVar = null;

            // array
            // object
            // resource
            // mixed

            // Имя класса/интерфейся
            // self
            // parent
            // iterable
            // callable
        ?>
        <ol>
            <li>String</li>
            <li>Integer</li>
            <li>Float (Double)</li>
            <li>Boolean</li>
            <li>Null</li>
            <hr>
            <li>Array</li>
            <li>Object</li>
            <li>Resource</li>
            <li><a href="https://www.php.net/manual/ru/language.types.declarations.php#language.types.declarations.mixed" target="_blank">Mixed</a></li>
            <hr>
            <li>Имя класса/интерфейса</li>
            <li>Self</li>
            <li>Parent</li>
            <li><a href="https://www.php.net/manual/ru/language.types.iterable.php" target="_blank">Iterable</a></li>
            <li><a href="https://www.php.net/manual/ru/language.types.callable.php" target="_blank">Callable</a></li>
        </ol>
    </section>
</main>
</body>
</html>
