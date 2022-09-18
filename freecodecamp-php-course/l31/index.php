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
            <li><a href="../l29/index.php">Classes & Objects</a></li>
            <li><a href="../l30/index.php">Constructors</a></li>
            <li class="selected"><a href="../l31/index.php">Object Functions</a></li>
            <li><a href="../l32/index.php">Getters & Setters</a></li>
            <li><a href="../l33/index.php">Inheritance</a></li>
        </ol>
        <div class="source-link">
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Источник</a>
        </div>
    </section>
    <section class="code">
        <h3>Object Functions</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="orange">class <span class="grey">Hero {</span></span>
        <span class="orange">var <span class="purple">$speciality</span>;</span>
        <span class="orange">var <span class="purple">$lvl</span>;</span>
        <span class="orange">var <span class="purple">$name</span>;</span>

        <span class="orange">function <span class="yellow">__construct <span class="grey">(<span class="purple">$speciality <span class="orange">, </span>$lvl <span class="orange">, </span>$name</span>) {</span></span></span>
            <span class="purple">$this<span class="grey">-&gt;</span>speciality <span class="grey">= </span>$speciality<span class="orange">;</span></span>
            <span class="purple">$this<span class="grey">-&gt;</span>lvl <span class="grey">= </span>$lvl<span class="orange">;</span></span>
            <span class="purple">$this<span class="grey">-&gt;</span>name <span class="grey">= </span>$name<span class="orange">;</span></span>
        <span class="grey">}</span>

        <span class="orange">function <span class="yellow">isHighlvl</span></span><span class="grey">() {</span>
            <span class="orange">if <span class="grey">(<span class="purple">$this<span class="grey">-&gt;</span>lvl</span> > <span class="blue">80</span>) {</span></span>
                <span class="orange">return true;</span>
            <span class="grey">}</span>
            <span class="orange">return false;</span>
        <span class="grey">}</span>
    <span class="grey">}</span>

    <span class="purple">$hero1 <span class="grey">= <span class="orange">new </span>Hero(<span class="green">"priest"<span class="orange">, </span><span class="blue">35<span class="orange">, </span></span>"Nicholas"</span>)</span></span><span class="orange">;</span>
    <span class="purple">$hero1 <span class="grey">= <span class="orange">new </span>Hero(<span class="green">"warrior"<span class="orange">, </span><span class="blue">90<span class="orange">, </span></span>"Michael"</span>)</span></span><span class="orange">;</span>

    <span class="orange">echo <span class="purple">$hero1<span class="grey">-&gt;</span><span class="yellow">isHighlvl</span></span><span class="grey">() ? <span class="green">"true"</span> : <span class="green">"false"</span></span>;</span>
    <span class="orange">echo <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="orange">echo <span class="purple">$hero2<span class="grey">-&gt;</span><span class="yellow">isHighlvl</span></span><span class="grey">() ? <span class="green">"true"</span> : <span class="green">"false"</span></span>;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                class Hero {
                    var $speciality;
                    var $lvl;
                    var $name;

                    function __construct ($speciality, $lvl, $name) {
                        $this->speciality = $speciality;
                        $this->lvl = $lvl;
                        $this->name = $name;
                    }

                    function isHighlvl() {
                         if ($this->lvl > 80) {
                             return true;
                         }
                         return false;
                    }
                }

                $hero1 = new Hero("priest", 35, "Nicholas");
                $hero2 = new Hero("warrior", 90, "Michael");

                echo $hero1->isHighlvl() ? "true" : "false";
                echo "<br>";
                echo $hero2->isHighlvl() ? "true" : "false";

            ?>
        </div>
    </section>
</main>
</body>
</html>
