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
            <li class="selected"><a href="../l22/index.php">Building a Better Calculator</a></li>
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
            <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">* Источник</a>
        </div>
    </section>
    <section class="code">
        <h3>Building a Better Calculator</h3>
<pre>
<span class="yellow">&lt;form <span class="grey">action=<span class="lightgreen">"index.php"</span> method=<span class="lightgreen">"post"</span></span>&gt;</span>
    <span class="yellow">&lt;label&gt;<span class="grey"> Number #1
        <span class="yellow">&lt;input <span class="grey">type=<span class="lightgreen">"number"</span></span> <span class="grey">step=<span class="lightgreen">"any"</span></span> <span class="grey">name=<span class="lightgreen">"number1"</span></span></span></span>&gt;
    &lt;/label&gt;&lt;br&gt;</span>
    <span class="yellow">&lt;label&gt;<span class="grey"> Math operator</span></span>
        <span class="yellow">&lt;select <span class="grey">name=<span class="lightgreen">"operator"</span></span>&gt;</span>
            <span class="yellow">&lt;option <span class="grey">value=<span class="lightgreen">"+"</span></span>&gt;<span class="grey">+</span>&lt;/option&gt;</span>
            <span class="yellow">&lt;option <span class="grey">value=<span class="lightgreen">"-"</span></span>&gt;<span class="grey">-</span>&lt;/option&gt;</span>
            <span class="yellow">&lt;option <span class="grey">value=<span class="lightgreen">"*"</span></span>&gt;<span class="grey">*</span>&lt;/option&gt;</span>
            <span class="yellow">&lt;option <span class="grey">value=<span class="lightgreen">"/"</span></span>&gt;<span class="grey">/</span>&lt;/option&gt;</span>
            <span class="yellow">&lt;option <span class="grey">value=<span class="lightgreen">"^"</span></span>&gt;<span class="grey">^</span>&lt;/option&gt;</span>
        <span class="yellow">&lt;/select&gt;</span>
    <span class="yellow">&lt;/label&gt;&lt;br&gt;</span>
    <span class="yellow">&lt;label&gt;<span class="grey"> Number #2
        <span class="yellow">&lt;input <span class="grey">type=<span class="lightgreen">"number"</span></span> <span class="grey">step=<span class="lightgreen">"0.1"</span></span> <span class="grey">name=<span class="lightgreen">"number2"</span></span></span></span>&gt;
    &lt;/label&gt;</span>
    <span class="yellow">&lt;input <span class="grey">type=<span class="lightgreen">"submit"</span></span>&gt;</span>
<span class="yellow">&lt;/form&gt;</span>

<span class="orange">&lt;?php</span>
    <span class="purple">$number1 <span class="grey">= </span> $_POST<span class="grey">[<span class="green">"number1"</span>]</span></span><span class="orange">;</span>
    <span class="purple">$number2 <span class="grey">= </span> $_POST<span class="grey">[<span class="green">"number2"</span>]</span></span><span class="orange">;</span>
    <span class="purple">$operator <span class="grey">= </span> $_POST<span class="grey">[<span class="green">"$operator"</span>]</span></span><span class="orange">;</span>

    <span class="orange">if </span><span class="grey">(<span class="purple">$operator</span> == <span class="green">"+"</span>) {</span>
        <span class="purple">$result <span class="grey">=</span> $number1 <span class="grey">+ </span>$number2</span><span class="orange">;</span>
        <span class="orange">echo <span class="green">"<span class="purple">$number1 $operator $number2</span> = <span class="purple">$result</span>"</span>;</span>
    <span class="grey">} <span class="orange">elseif </span>(<span class="purple">$operator</span> == <span class="green">"-"</span>) {</span>
        <span class="purple">$result <span class="grey">=</span> $number1 <span class="grey">- </span>$number2</span><span class="orange">;</span>
        <span class="orange">echo <span class="green">"<span class="purple">$number1 $operator $number2</span> = <span class="purple">$result</span>"</span>;</span>
    <span class="grey">} <span class="orange">elseif </span>(<span class="purple">$operator</span> == <span class="green">"*"</span>) {</span>
        <span class="purple">$result <span class="grey">=</span> $number1 <span class="grey">* </span>$number2</span><span class="orange">;</span>
        <span class="orange">echo <span class="green">"<span class="purple">$number1 $operator $number2</span> = <span class="purple">$result</span>"</span>;</span>
    <span class="grey">} <span class="orange">elseif </span>(<span class="purple">$operator</span> == <span class="green">"/"</span>) {</span>
        <span class="purple">$result <span class="grey">=</span> $number1 <span class="grey">/ </span>$number2</span><span class="orange">;</span>
        <span class="orange">echo <span class="green">"<span class="purple">$number1 $operator $number2</span> = <span class="purple">$result</span>"</span>;</span>
    <span class="grey">} <span class="orange">elseif </span>(<span class="purple">$operator</span> == <span class="green">"^"</span>) {</span>
        <span class="purple">$result <span class="grey">= pow(</span>$number1 <span class="orange">, </span>$number2</span><span class="grey">)</span><span class="orange">;</span>
        <span class="orange">echo <span class="green">"<span class="purple">$number1 $operator $number2</span> = <span class="purple">$result</span>"</span>;</span>
    <span class="grey">} <span class="orange">else </span>{</span>
        <span class="orange">echo <span class="green">"Invalid operator"</span>;</span>
    <span class="grey">}</span>
<span class="orange">?&gt;</span>

</pre>
    </section>
    <section class="result">
        <h3>http://localhost:4000</h3>
        <div class="result-output">
            <form action="index.php" method="post">
                <label> Number #1
                    <input type="number" step="any" name="number1">
                </label><br>
                <label> Math operator
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="^">^</option>
                    </select>
                </label><br>
                <label> Number #2
                    <input type="number" step="0.1" name="number2">
                </label>
                <input type="submit">
            </form>

            <?php
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                $operator = $_POST["operator"];

                if ($operator == "+") {
                    $result = $number1 + $number2;
                    echo "$number1 $operator $number2 = $result";
                } elseif ($operator == "-") {
                    $result = $number1 - $number2;
                    echo "$number1 $operator $number2 = $result";
                } elseif ($operator == "*") {
                    $result = $number1 * $number2;
                    echo "$number1 $operator $number2 = $result";
                } elseif ($operator == "/") {
                    $result = $number1 / $number2;
                    echo "$number1 $operator $number2 = $result";
                } elseif ($operator == "^") {
                    $result = pow($number1, $number2);
                    echo "$number1 $operator $number2 = $result";
                } else {
                    echo "Invalid operator";
                }
            ?>
        </div>
    </section>
</main>
</body>
</html>
