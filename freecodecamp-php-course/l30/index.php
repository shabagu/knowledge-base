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
            <li class="selected"><a href="../l30/index.php">Constructors</a></li>
            <li><a href="../l31/index.php">Object Functions</a></li>
            <li><a href="../l32/index.php">Getters & Setters</a></li>
            <li><a href="../l33/index.php">Inheritance</a></li>
        </ol>
        <div class="source-link">
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Видео-источник</a>
        </div>
    </section>
    <section class="code">
        <h3>Constructors</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="orange">class <span class="grey">Phone {</span></span>
        <span class="orange">var <span class="purple">$brand</span>;</span>
        <span class="orange">var <span class="purple">$model</span>;</span>
        <span class="orange">var <span class="purple">$price</span>;</span>

        <span class="orange">function <span class="yellow">__construct<span class="grey">(<span class="purple">$brand <span class="orange">, </span>$model <span class="orange">, </span>$price</span>) {</span></span></span>
            <span class="purple">$this<span class="grey">-&gt;</span>brand <span class="grey">= </span>$brand</span><span class="orange">;</span>
            <span class="purple">$this<span class="grey">-&gt;</span>model <span class="grey">= </span>$model</span><span class="orange">;</span>
            <span class="purple">$this<span class="grey">-&gt;</span>price <span class="grey">= </span>$price</span><span class="orange">;</span>
            <span class="orange">echo <span class="green">"<span class="grey">~ New phone created <span class="yellow">&lt;br&gt;</span></span>"</span>;</span>
        <span class="grey">}</span>
    <span class="grey">}</span>

    <span class="purple">$phone <span class="grey">= <span class="orange">new</span> Phone(<span class="green">"Honor"<span class="orange">, </span>"10 Plus"<span class="orange">, </span><span class="blue">400</span></span>)</span></span><span class="orange">;</span>
    <span class="purple">$phone <span class="grey">= <span class="orange">new</span> Phone(<span class="green">"Realme"<span class="orange">, </span>"GT Neo 2"<span class="orange">, </span><span class="blue">280</span></span>)</span></span><span class="orange">;</span>
    <span class="purple">$phone2<span class="grey">-&gt;</span>price <span class="grey">= </span><span class="blue">299</span></span><span class="orange">;</span>

<span class="orange">?&gt;</span>

<span class="yellow">&lt;pre&gt;<span class="orange">&lt;?php <span class="grey">var_dump(<span class="purple">$phone1</span>)</span>;?&gt;</span>&lt;/pre&gt;</span>
<span class="yellow">&lt;pre&gt;<span class="orange">&lt;?php <span class="grey">var_dump(<span class="purple">$phone2</span>)</span>;?&gt;</span>&lt;/pre&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                class Phone {
                    var $brand;
                    var $model;
                    var $price;

                    function __construct($brand, $model, $price) {
                        $this->brand = $brand;
                        $this->model = $model;
                        $this->price = $price;
                        echo "~ New phone created <br>";
                    }
                }

                $phone1 = new Phone("Honor", "10 Plus", 400);
                $phone2 = new Phone("Realme", "GT Neo 2", 280);
                $phone2->price = 299;

            ?>

            <pre><?php var_dump($phone1);?></pre>
            <pre><?php var_dump($phone2);?></pre>

        </div>
    </section>
</main>
</body>
</html>
