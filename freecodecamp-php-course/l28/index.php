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
            <li class="selected"><a href="../l28/index.php">Include: PHP</a></li>
            <li><a href="../l29/index.php">Classes & Objects</a></li>
            <li><a href="../l30/index.php">Constructors</a></li>
            <li><a href="../l31/index.php">Object Functions</a></li>
            <li><a href="../l32/index.php">Getters & Setters</a></li>
            <li><a href="../l33/index.php">Inheritance</a></li>
        </ol>
        <div class="source-link">
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Источник</a>
        </div>
    </section>
    <section class="code">
        <h3>Include: PHP</h3>
        <hr>
        <span class="file">article-header.php</span>
        <hr>
<pre>
<span class="darkgrey">&lt;!-- Варианты использования переменной без присвоения ей значения --&gt;</span>
<span class="yellow">&lt;h3&gt;<span class="orange">&lt;?php if <span class="grey">(!<span class="orange">empty</span>(<span class="purple">$title</span>))</span> echo <span class="purple">$title</span>; ?&gt;</span>&lt;/h3&gt;</span>
<span class="yellow">&lt;h4&gt;<span class="orange">&lt;?php if <span class="grey">(<span class="orange">isset</span>(<span class="purple">$author</span>))</span> echo <span class="purple">$author</span>; ?&gt;</span>&lt;/h4&gt;</span>
<span class="orange">&lt;?php <span class="phpdoc">/** <span class="phpdoc-var">@var</span> <span class="grey">string</span> <span class="purple">$wordCount</span> */</span><span class="darkgrey"> # PHPDoc comment</span> ?&gt;</span>
<span class="grey">word count: <span class="orange">&lt;?php echo <span class="purple">$wordCount</span>; ?&gt;</span></span>
<span class="yellow">&lt;hr&gt;</span>
</pre>
        <hr>
        <span class="file">useful-tools.php</span>
        <hr>
<pre>
<span class="orange">&lt;?php</span>
    <span class="purple">$feetInMile <span class="grey">= <span class="blue">5280</span></span>;</span>

    <span class="orange">function <span class="yellow">hi<span class="grey">(<span class="purple">$name</span>) {</span></span></span>
        <span class="orange">echo <span class="green">"<span class="grey">Hello, <span class="purple">$name</span></span> <span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="grey">}</span>
</pre>
        <hr>
        <span class="file">index.php</span>
        <hr>
<pre>
<span class="orange">&lt;?php</span>
    <span class="purple">$title <span class="grey">= <span class="green">"The Very First Post"</span></span></span><span class="orange">;</span>
    <span class="purple">$author <span class="grey">= <span class="green">"@shabagu"</span></span></span><span class="orange">;</span>
    <span class="purple">$wordCount <span class="grey">= <span class="blue">2</span></span></span><span class="orange">;</span>
    <span class="orange">include <span class="green">"article-header.php"</span>;</span>

    <span class="purple">$title <span class="grey">= <span class="green">"The Very Second Post"</span></span></span><span class="orange">;</span>
    <span class="purple">$author <span class="grey">= <span class="green">"@chris"</span></span></span><span class="orange">;</span>
    <span class="purple">$wordCount <span class="grey">= <span class="blue">4</span></span></span><span class="orange">;</span>
    <span class="orange">include <span class="green">"article-header.php"</span>;</span>

    <span class="orange">include <span class="green">"useful-tools.php"</span>;</span>
    <span class="grey">hi(<span class="green">Ivan 3D</span>)</span><span class="orange">;</span>

    <span class="orange">if <span class="grey">(<span class="orange">isset</span>(<span class="purple">$feetInMile</span>))</span> echo <span class="purple">$feetInMile</span>;</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                $title = "The Very First Post";
                $author = "@shabagu";
                $wordCount = 2;
                include "article-header.php";

                $title = "The Very Second Post";
                $author = "@chris";
                $wordCount = 4;
                include "article-header.php";

                include "useful-tools.php";
                hi("Ivan 3D");

                if (isset($feetInMile)) echo $feetInMile;
            ?>
        </div>
    </section>
</main>
</body>
</html>
