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
            <li class="selected"><a href="l05.php">Writing HTML</a></li>
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
            <li><a href="l24.php">While Loops</a></li>
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
        <h3>HTML</h3>
<pre>
<span class="yellow">&lt;!doctype <span class="grey">html</span>&gt;</span>
<span class="yellow">&lt;html <span class="grey">lang<span class="lightgreen">="ru"</span></span>&gt;</span>
<span class="yellow">&lt;head&gt;</span>
    <span class="yellow">&lt;meta <span class="grey">charset<span class="lightgreen">="UTF-8"</span></span>&gt;</span>
    <span class="yellow">&lt;meta <span class="grey">name<span class="lightgreen">="viewport"</span></span>
    <span class="grey">content<span class="lightgreen">="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"</span></span></span>
    <span class="yellow">&lt;meta <span class="grey">http-equiv<span class="lightgreen">="X-UA-Compatible"</span></span> <span class="grey">content<span class="lightgreen">="ie=edge"</span></span>&gt;</span>
    <span class="yellow">&lt;title&gt;<span class="grey">My Web Page</span>&lt;/title&gt;</span>
    <span class="yellow">&lt;link <span class="grey">rel<span class="lightgreen">="stylesheet"</span></span><span class="grey"> href<span class="lightgreen">="index.css"</span></span>&gt;</span>
    <span class="yellow">&lt;link <span class="grey">rel<span class="lightgreen">="icon"</span></span><span class="grey"> href<span class="lightgreen">="favicon.svg"</span></span>&gt;</span>
    <span class="yellow">&lt;script <span class="grey">src<span class="lightgreen">="script.js"</span> defer</span>&gt;&lt;/script&gt;</span>
<span class="yellow">&lt;/head&gt;</span>
<span class="yellow">&lt;body&gt;</span>
    <span class="orange">&lt;?php echo <span class="green">"<span class="grey">Hello,world! <span class="yellow">&lt;br&gt;</span></span>"</span>; ?&gt;</span>
    <span class="orange">&lt;?= <span class="green">"<span class="grey">Hello,world! <span class="yellow">&lt;br&gt;</span></span>"</span>; ?&gt;</span>
    <span class="orange">&lt;?php echo<span class="grey">(<span class="green">"<span class="grey">Hello,world! <span class="yellow">&lt;br&gt;</span></span>"</span>)</span>; ?&gt;</span>
    <span class="orange">&lt;?php</span>
        <span class="orange">echo <span class="green">"<span class="yellow">&lt;h1&gt;<span class="grey">Hello, there!</span>&lt;/h1&gt;</span>"</span>;</span>
        <span class="orange">echo <span class="green">"<span class="yellow">&lt;hr&gt;</span>"</span>;</span>
        <span class="orange">echo <span class="green">"<span class="yellow">&lt;p&gt;<span class="grey">I'm new to php!</span>&lt;/p&gt;</span>"</span>;</span>
    <span class="orange">?&gt;</span>
<span class="yellow">&lt;/body&gt;</span>
<span class="yellow">&lt;/html&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php echo "Hello, world! <br>"; ?>
            <?= "Hello, world! <br>"; ?>
            <?php echo("Hello, world! <br>"); ?>
            <?php
                echo "<h1>Hello there!</h1>";
                echo "<hr>";
                echo "<p>I'm new to php</p>";
            ?>
        </div>
    </section>
</main>
</body>
</html>
