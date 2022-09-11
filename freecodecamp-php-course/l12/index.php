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
            <li class="selected"><a href="../l12/index.php">Building a Mad Libs Game</a></li>
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
        <h3>Building a Mad Libs Game</h3>
<pre>
<span class="yellow">&lt;form <span class="grey">action= <span class="lightgreen">"index.php"</span> method= <span class="lightgreen">"get"</span></span>&gt;</span>
    <span class="grey">Color: <span class="yellow">&lt;br&gt;&lt;input</span> type=<span class="lightgreen">"text"</span> name=<span class="lightgreen">"color"</span></span><span class="yellow">&gt;&lt;br&gt;</span>
    <span class="grey">Plural noun: <span class="yellow">&lt;br&gt;&lt;input</span> type=<span class="lightgreen">"text"</span> name=<span class="lightgreen">"noun"</span></span><span class="yellow">&gt;&lt;br&gt;</span>
    <span class="grey">Verb: <span class="yellow">&lt;br&gt;&lt;input</span> type=<span class="lightgreen">"text"</span> name=<span class="lightgreen">"verb"</span></span><span class="yellow">&gt;&lt;br&gt;</span>
    <span class="yellow">&lt;input <span class="grey">type=<span class="lightgreen">"submit"</span></span>&gt;</span>
<span class="yellow">&lt;/form&gt;</span>

<span class="orange">&lt;?php</span>
    <span class="purple">$color<span class="grey"> = </span>$_GET<span class="grey">[<span class="green">"color"</span>]</span></span><span class="orange">;</span>
    <span class="purple">$noun<span class="grey"> = </span>$_GET<span class="grey">[<span class="green">"noun"</span>]</span></span><span class="orange">;</span>
    <span class="purple">$verb<span class="grey"> = </span>$_GET<span class="grey">[<span class="green">"verb"</span>]</span></span><span class="orange">;</span>

    <span class="orange">echo <span class="green">"<span class="grey">roses are <span class="purple">$color</span></span>"</span><span class="grey"> . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="green">"<span class="grey"><span class="purple">$noun</span> are blue</span>"</span><span class="grey"> . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="orange">echo <span class="green">"<span class="grey">I <span class="purple">$verb</span> you</span>"</span><span class="grey"> . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <form action="index.php" method="get">
                Color:<br><input type="text" name="color"><br>
                Plural noun:<br><input type="text" name="noun"><br>
                Verb:<br><input type="text" name="verb"><br>
                <input type="submit">
            </form>

            <?php
                $color = $_GET["color"];
                $noun = $_GET["noun"];
                $verb = $_GET["verb"];

                echo "roses are $color" . "<br>";
                echo "$noun are blue" . "<br>";
                echo "I $verb you" . "<br>";
            ?>
        </div>
    </section>
</main>
</body>
</html>
