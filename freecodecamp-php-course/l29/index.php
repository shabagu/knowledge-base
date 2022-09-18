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
            <li><a href="../l28/index.php">Include: PHP</a></li>
            <li class="selected"><a href="../l29/index.php">Classes & Objects</a></li>
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
        <h3>Classes & Objects</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="orange">class <span class="grey">Book {</span></span>
        <span class="orange">var <span class="purple">$title</span>;</span>
        <span class="orange">var <span class="purple">$author</span>;</span>
        <span class="orange">var <span class="purple">$pages</span>;</span>
    <span class="grey">}</span>

    <span class="purple">$book1 <span class="grey">= <span class="orange">new <span class="grey">Book()</span>;</span></span></span>
    <span class="purple">$book1<span class="grey">-></span>title <span class="grey">= <span class="green">"Flow My Tears, the Policeman Said"</span></span></span><span class="orange">;</span>
    <span class="purple">$book1<span class="grey">-></span>author <span class="grey">= <span class="green">"Philip K. Dick"</span></span></span><span class="orange">;</span>
    <span class="purple">$book1<span class="grey">-></span>pages <span class="grey">= <span class="blue">231</span></span></span><span class="orange">;</span>

    <span class="purple">$book2 <span class="grey">= <span class="orange">new <span class="grey">Book()</span>;</span></span></span>
    <span class="purple">$book2<span class="grey">-></span>title <span class="grey">= <span class="green">"The Lord of the Rings"</span></span></span><span class="orange">;</span>
    <span class="purple">$book2<span class="grey">-></span>author <span class="grey">= <span class="green">"J. R. R. Tolkien"</span></span></span><span class="orange">;</span>
    <span class="purple">$book2<span class="grey">-></span>pages <span class="grey">= <span class="blue">1178</span></span></span><span class="orange">;</span>
<span class="orange">?&gt;</span>

<span class="yellow">&lt;pre&gt;<span class="orange">&lt;?php <span class="grey">var_dump(<span class="purple">$book1</span>)</span>;?&gt;</span>&lt;/pre&gt;</span>
<span class="yellow">&lt;pre&gt;<span class="orange">&lt;?php <span class="grey">var_dump(<span class="purple">$book2</span>)</span>;?&gt;</span>&lt;/pre&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                class Book {
                    var $title;
                    var $author;
                    var $pages;
                }

                $book1 = new Book();
                $book1->title = "Flow My Tears, the Policeman Said";
                $book1->author = "Philip K. Dick";
                $book1->pages = 231;

                $book2 = new Book();
                $book2->title = "The Lord of the Rings";
                $book2->author = "J. R. R. Tolkien";
                $book2->pages = 1178;
            ?>

            <pre><?php var_dump($book1);?></pre>
            <pre><?php var_dump($book2);?></pre>

        </div>
    </section>
</main>
</body>
</html>
