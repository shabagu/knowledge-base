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
            <li><a href="../l31/index.php">Object Functions</a></li>
            <li class="selected"><a href="../l32/index.php">Getters & Setters</a></li>
            <li><a href="../l33/index.php">Inheritance</a></li>
        </ol>
        <div class="source-link">
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Видео-источник</a>
        </div>
    </section>
    <section class="code">
        <h3>Getters & Setters</h3>
<pre>
<span class="orange">&lt;?php</span>
    <span class="darkgrey"># Getters & Setters are used to control the access</span>
    <span class="darkgrey"># to the attributes of described classes</span>

    <span class="orange">class <span class="grey">Film {</span></span>
        <span class="darkgrey"># public keyword equivalent to var that is obsolete</span>
        <span class="darkgrey"># (public, private and protected should be used instead)</span>
        <span class="orange">public <span class="purple">$title</span>;</span>
        <span class="darkgrey">// public $rating;</span>
        <span class="orange">private <span class="purple">$rating</span>;</span>

        <span class="darkgrey"># class constructor</span>
        <span class="orange">function <span class="yellow">__construct<span class="grey">(<span class="purple">$title<span class="orange">, </span> $rating</span>) {</span></span></span>
            <span class="purple">$this<span class="grey">-&gt;</span>title<span class="grey"> = </span>$title</span><span class="orange">;</span>
            <span class="purple">$this<span class="grey">-&gt;</span><span class="yellow">setRating<span class="grey">(<span class="purple">$rating</span>)</span></span></span><span class="orange">;</span>
        <span class="grey">}</span>

        <span class="darkgrey"># getter (is needed to get private properties)</span>
        <span class="orange">function</span><span class="yellow"> getRating<span class="grey">() {</span></span>
            <span class="orange">return <span class="purple">$this<span class="grey">-&gt;</span>rating</span>;</span>
        <span class="grey">}</span>

        <span class="darkgrey"># setter (is needed to set private properties)</span>
        <span class="orange">function <span class="yellow">setRating<span class="grey">(<span class="purple">$rating</span>) {</span></span></span>
            <span class="darkgrey">// $this-&gt;rating = $rating</span>

            <span class="darkgrey">// if ($rating == "G" || $rating == "PG" || $rating ==
"PG-13" || $rating == "R" || $rating == "NC-17" || $rating == "NR") {}</span>
            <span class="purple">$allowedRatings <span class="grey">= [<span class="green">"G"<span class="orange">, </span>"PG"<span class="orange">, </span>"PG-13"<span class="orange">, </span>"R"<span class="orange">, </span>"NC-17<span class="orange">, </span>"NR"</span>]</span></span><span class="orange">;</span>
            <span class="orange">if <span class="grey">(in_array(<span class="purple">$rating<span class="orange">, </span>$allowedRatings</span>)) {</span></span>
                <span class="purple">$this<span class="grey">-&gt;</span>rating<span class="grey"> = </span>$rating</span><span class="orange">;</span>
            <span class="grey">} <span class="orange">else</span> {</span>
                <span class="purple">$this<span class="grey">-&gt;</span>rating <span class="grey">= <span class="green">"NR"</span><span class="orange">;</span></span></span>
            <span class="grey">}</span>
        <span class="grey">}</span>
    <span class="grey">}</span>

    <span class="darkgrey">// valid ratings: G, PG, PG-13, R, NC-17, NR (not rated)</span>
    <span class="purple">$film1 <span class="grey">= <span class="orange">new </span>Film(<span class="green">"The Thing"<span class="orange">, </span>"12345"</span>)</span></span><span class="orange">;</span><span class="darkgrey"> // will set "NR"</span>
    <span class="darkgrey">// $film1->rating = "123"; // since $rating is private,
access outside of class denied</span>

    <span class="orange">echo <span class="purple">$film1</span><span class="grey">-&gt;<span class="yellow">getRating</span>() . </span><span class="green">"<span class="yellow">&lt;br&gt;</span>"</span>;</span>
    <span class="purple">$film1<span class="grey">-&gt;</span><span class="grey"><span class="yellow">setRating</span>(<span class="green">"NC-17"</span>)</span></span><span class="orange">;</span>
    <span class="orange">echo <span class="purple">$film1</span><span class="grey">-&gt;<span class="yellow">getRating</span>()</span>;</span>
<span class="orange">?&gt;</span>

<span class="yellow">&lt;pre&gt;<span class="orange">&lt;?php <span class="grey">var_dump(<span class="purple">$film1</span>)</span>; ?&gt;</span>&lt;/pre&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <?php
                # Getters & Setters are used to control the access
                # to the attributes of described classes

                class Film {
                    # public keyword equivalent to var that is obsolete
                    # (public, private and protected should be used instead)
                    public $title;
                    // public $rating;
                    private $rating;

                    # class constructor
                    function __construct($title, $rating) {
                        $this->title = $title;
                        $this->setRating($rating);
                    }

                    # getter (is needed to get private properties)
                    function getRating() {
                        return $this->rating;
                    }

                    # setter (is needed to set private properties)
                    function setRating($rating) {
                        // $this->rating = $rating;

                        // if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NC-17" || $rating == "NR") {}
                        $allowedRatings = ["G", "PG", "PG-13", "R", "NC-17", "NR"];
                        if (in_array($rating, $allowedRatings)) {
                            $this->rating = $rating;
                        } else {
                            $this->rating = "NR";
                        }
                    }
                }

                // valid ratings: G, PG, PG-13, R, NC-17, NR (not rated)
                $film1 = new Film("The Thing", "12345"); // will set "NR"
                // $film1->rating = "123"; // since $rating is private, access outside of class denied

                echo $film1->getRating() . "<br>";
                $film1->setRating("NC-17");
                echo $film1->getRating();
            ?>

            <pre><?php var_dump($film1); ?></pre>
        </div>
    </section>
</main>
</body>
</html>
