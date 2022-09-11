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
            <li class="selected"><a href="../l26/index.php">Comments</a></li>
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
        <h3>Comments</h3>
<pre>
<span class="orange">&lt;?php</span>

    <span class="darkgrey">// comment (style #1)</span>

    <span class="darkgrey"># comment (style #2)</span>

    <span class="darkgrey">/* comment (style #3) */</span>

    <span class="darkgrey">/*</span>
    <span class="darkgrey"> * multiline</span>
    <span class="darkgrey"> * comment</span>
    <span class="darkgrey"> * (comment block)</span>
    <span class="darkgrey"> * can only be used with third style comment</span>
    <span class="darkgrey"> */</span>

    <span class="darkgrey">// describing line of code #1</span>
    <span class="orange">echo <span class="green">"something"</span>;</span><span class="darkgrey">// describing line of code #2</span>

    <span class="darkgrey">// excluding line of code from execution</span>
    <span class="darkgrey">// echo "byak";</span>

    <span class="darkgrey">// <span class="lightgreen">TODO</span> (<span class="lightgreen">todo</span>) for IDE</span>

<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php

                // comment (style #1)

                # comment (style #2)

                /* comment (style #3) */

                /*
                 * multiline
                 * comment
                 * (comment block)
                 * can only be used with third style comment
                 */

                // describing line of code #1
                echo "something"; // describing line of code #2

                // excluding line of code from execution
                // echo "byak";

                // to%do (without %) - for IDE

            ?>
        </div>
    </section>
</main>
</body>
</html>
