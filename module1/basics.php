<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics Review</title>
</head>
<body>
    <h1>PHP Review: Basics</h1>

    <section>
        <h2>PHP Tags</h2>
        <p>PHP code is enclosed in special start and end tags that allow you to jump into and out of "PHP mode."</p>
        <pre>&lt;?php // PHP code goes here ?&gt;</pre>
    </section>

    <section>
        <h2>Variables</h2>
        <p>Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.</p>
        <pre>$age = 25;</pre>
        <p>Variable variables have a dynamic name, defined by another variable.</p>
        <pre>$varname = "age"; $$varname = 25; // same as $age = 25;</pre>
        <h3>Comments</h3>
        <p>Single-line comments are made using // or #, and multi-line comments can be made using /* and */.</p>
        <pre>
// This is a single-line comment
# Another single-line comment
/*
This is a multi-line comment
which spans over multiple lines
*/</pre>
    </section>

    <section>
        <h2>Exercise [up01]</h2>
        <p>Create a PHP program that receives the title as a GET parameter and adds the content inside an HTML &lt;h1&gt; tag.</p>
        <form method="get">
            <input type="text" name="title" placeholder="Enter a title" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if (isset($_GET['title'])) {
            echo '<h1>' . htmlspecialchars($_GET['title']) . '</h1>';
        }
        ?>
    </section>

    <section>
        <h2>Review: Types</h2>
        <h3>Scalar Types</h3>
        <ul>
            <li><strong>Booleans:</strong> Can only have two values, true or false.</li>
            <li><strong>Integers:</strong> Whole numbers, positive or negative, including zero.</li>
            <li><strong>Floats:</strong> Numbers with a decimal point or in exponential form.</li>
            <li><strong>Strings:</strong> A sequence of characters inside quotes.</li>
        </ul>
        <h3>Compound Types</h3>
        <p>Include Arrays and Objects.</p>
        <h3>Special Types</h3>
        <p>Include resources, NULL, and some others.</p>
    </section>

    <section>
        <h2>Operators</h2>
        <p>PHP includes many operator types such as assignment, comparison, and logical operators.</p>
        <pre>
// Assignment
$number = 5;
// Comparison
if ($number == 5) echo 'Five';
// Increment/Decrement
$number++;
// String operator
$name = "John";
$greeting = "Hello " . $name;
// Logical
if ($age > 18 && $name == "John") {
    echo "You are over 18 and your name is John.";
}
// Ternary operator
$message = ($age < 18) ? "You are younger than 18." : "You are 18 or older.";
        </pre>
    </section>

    <section>
        <h2>Variable Scope</h2>
        <p>Scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope.</p>
        <p>This scope spans included and required files as well.</p>
        <pre>
// Global scope
$globalName = 'World';
function sayHello() {
    global $globalName;
    echo "Hello, $globalName!";
}
sayHello();
        </pre>
    </section>

</body>
</html>
