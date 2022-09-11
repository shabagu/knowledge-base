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
            <li class="selected"><a href="../l21/index.php">If Statements (con't)</a></li>
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
        <h3>If Statements (con't)</h3>
<pre>
<span class="yellow">&lt;form <span class="grey">action=<span class="lightgreen">""</span></span>&gt;</span>
    <span class="yellow">&lt;label&gt;<span class="grey">Number #1 </span>&lt;input <span class="grey">type=<span class="lightgreen">"number"</span></span> <span class="grey">name=<span class="lightgreen">"number1"</span></span>&gt;&lt;/label&gt;&lt;br&gt;</span>
    <span class="yellow">&lt;label&gt;<span class="grey">Number #2 </span>&lt;input <span class="grey">type=<span class="lightgreen">"number"</span></span> <span class="grey">name=<span class="lightgreen">"number2"</span></span>&gt;&lt;/label&gt;&lt;br&gt;</span>
    <span class="yellow">&lt;label&gt;<span class="grey">Number #3 </span>&lt;input <span class="grey">type=<span class="lightgreen">"number"</span></span> <span class="grey">name=<span class="lightgreen">"number3"</span></span>&gt;&lt;/label&gt;&lt;br&gt;</span>
    <span class="yellow">&lt;input <span class="grey">type=<span class="lightgreen">"submit"</span></span>&gt;</span>
<span class="yellow">&lt;/form&gt;</span>

<span class="orange">&lt;?php</span>
    <span class="orange">function <span class="yellow">findMaxOfThree<span class="grey">(<span class="orange"><span class="purple">$number1</span>, <span class="purple">$number2</span>, <span class="purple">$number3</span></span>) {</span></span></span>
        <span class="orange">if <span class="grey">(<span class="purple">$number1</span> >= <span class="purple">$number2</span> && <span class="purple">$number1</span> >= <span class="purple">$number3</span>) {</span></span>
            <span class="orange">return <span class="purple">$number1</span>;</span>
        <span class="grey">} <span class="orange">elseif</span> (<span class="purple">$number2</span> >= <span class="purple">$number3</span>) {</span>
            <span class="orange">return <span class="purple">$number2</span>;</span>
        <span class="grey">} <span class="orange">else</span> {</span>
            <span class="orange">return <span class="purple">$number3</span>;</span>
        <span class="grey">}</span>
    <span class="grey">}</span>

    <span class="purple">$number1 <span class="grey">=</span> $_GET<span class="grey">[<span class="green">"number1"</span>]</span></span><span class="orange">;</span>
    <span class="purple">$number2 <span class="grey">=</span> $_GET<span class="grey">[<span class="green">"number2"</span>]</span></span><span class="orange">;</span>
    <span class="purple">$number3 <span class="grey">=</span> $_GET<span class="grey">[<span class="green">"number3"</span>]</span></span><span class="orange">;</span>

    <span class="grey"><span class="orange">if</span> (<span class="orange">isset</span>(<span class="purple">$_GET</span>[<span class="green">"number1"</span>]) && <span class="orange">isset</span>(<span class="purple">$_GET</span>[<span class="green">"number2"</span>]) &&
<span class="orange">isset</span>(<span class="purple">$_GET</span>[<span class="green">"number3"</span>])) {</span>
        <span class="orange">echo <span class="green">"<span class="grey">Max number found by max() - </span>"
<span class="grey">. max(</span></span><span class="purple">$number1</span>, <span class="purple">$number2</span>, <span class="purple">$number3</span><span class="grey">) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
        <span class="orange">echo <span class="green">"<span class="grey">Max number found by findMaxOfThree() - </span>"
<span class="grey">. findMaxOfThree(</span></span><span class="purple">$number1</span>, <span class="purple">$number2</span>, <span class="purple">$number3</span><span class="grey">) . <span class="green">"<span class="yellow">&lt;br&gt;</span>"</span></span>;</span>
    <span class="grey">}</span>

    <span class="darkgrey"># >      - Больше</span>
    <span class="darkgrey"># <      - Меньше</span>
    <span class="darkgrey"># >=     - Больше или равно</span>
    <span class="darkgrey"># <=     - Меньше или равно</span>
    <span class="darkgrey"># ==     - Равно</span>
    <span class="darkgrey"># !=, <> - Не равно</span>
    <span class="darkgrey"># ===    - Тождественно равно (равны значение и тип)</span>
    <span class="darkgrey"># !==    - Тождественно не равно (не равно значение или тип)</span>
    <span class="darkgrey"># <=>    - spaceship (возвращает -1, 0 или 1)</span>
<span class="orange">?&gt;</span>
</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <form action="">
                <label>Number #1 <input type="number" name="number1"></label><br>
                <label>Number #2 <input type="number" name="number2"></label><br>
                <label>Number #3 <input type="number" name="number3"></label><br>
                <input type="submit">
            </form>

            <?php
                function findMaxOfThree($number1, $number2, $number3) {
                    if ($number1 >= $number2 && $number1 >= $number3) {
                        return $number1;
                    } elseif ($number2 >= $number3) {
                        return $number2;
                    } else {
                        return $number3;
                    }
                }

                $number1 = $_GET["number1"];
                $number2 = $_GET["number2"];
                $number3 = $_GET["number3"];

                if (isset($_GET["number1"]) && isset($_GET["number2"]) && isset($_GET["number3"])) {
                    echo "Max number found by max() - " . max($number1, $number2, $number3) . "<br>";
                    echo "Max number found by findMaxOfThree() - " . findMaxOfThree($number1, $number2, $number3) . "<br>";
                }

                # >      - Больше
                # <      - Меньше
                # >=     - Больше или равно
                # <=     - Меньше или равно
                # ==     - Равно
                # !=, <> - Не равно
                # ===    - Тождественно равно (равны значение и тип)
                # !==    - Тождественно не равно (не равно значение или тип)
                # <=>    - spaceship (возвращает -1, 0 или 1)
            ?>
        </div>
    </section>
</main>
</body>
</html>
