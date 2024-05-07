
<h1>PHP</h1>
<link rel="stylesheet" href="styles.css">
<?php
    $globalName = 'World';
    function sayHello($name) {
        echo "<p>Hello, $name!</p>";
    }     
    echo "<h1>Welcome to PHP Learning Series - Module 1</h1>";
    // variables basicas
    $text = "Hello World!";
    echo "<p>$text</p>";
    // variables numericas
    $number = 5;
    $number2 = 10;
    $number3 = $number * $number2;
    echo "<p>$number x $number2 = $number3</p>";
    // variables booleanas
    $bool = true;
    echo "<h1>FRUITS</h1>";
    echo "<p>$bool</p>";
    // variables de tipo array
    $fruits = array("Apple", "Banana", "Orange");
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    // variables de tipo objeto
    $person = (object) [
        'name' => 'John',
        'age' => 30,
        'nationality' => 'American'
    ];
    echo "<p>$person->name is $person->age years old and is $person->nationality.</p>";
?>
<hr>
<h1>Operators</h1>
<?php 
// operadoroes aritmeticos

// suma
$n1 = 10;
$n2 = 5;
$suma = $n1 + $n2;
echo "<p>SUM: $n1 + $n2 = $suma</p>";

// resta
$n1 = 10;
$n2 = 5;
echo "<p>RES: $n1 - $n2 = " . ($n1 - $n2) . "</p>";

// multiplicacion
$n1 = 10;
$n2 = 5;
$mult = $n1 * $n2;
echo "<p>MULT: $n1 x $n2 = $mult</p>";

// division
$n1 = 10;
$n2 = 5;
$div = $n1 / $n2;
echo "<p>DIV: $n1 / $n2 = $div</p>";

// modulo
$n1 = 10;
$n2 = 5;
$mod = $n1 % $n2;
echo "<p>MOD: $n1 % $n2 = $mod</p>";

?>

<h1>OPERADORES DE COMPARACION</h1>

<?php
$igual = 5 == 5;
echo "Igual: " . ($igual ? "Verdadero" : "Falso") . "\n";

$identico = 5 === 5.00;
echo "Identico: " . ($identico ? "Verdadero" : "Falso") . "\n";

?>

<h1>OPERADORES LOGICOS</h1>

<?php
// and 
$y = true && false;
echo "AND: " . ($y ? "Verdadero" : "Falso") . "\n";
// or 
$y = true || false;
echo "OR: " . ($y ? "Verdadero" : "Falso") . "\n";
// not
$y = !true;
echo "NOT: " . ($y ? "Verdadero" : "Falso") . "\n";
?>
<hr>
<h1>FUNCTIONS</h1>
<div class="functions">
</div>
<?php
    sayHello("John");
    sayHello("Jane");
    sayHello("Doe");

    function sayHello2($name) {
        echo "HELLO HELLO $name";
    }  

    function withdrawByTwo($value) {
        if ($value <= 2) {
            return;
        }

        $value = $value - 2;
        
        echo "<p>VALOR DESPUES DE ROBO: $value</p>";
        withdrawByTwo($value);
    }

    withdrawByTwo(10);
?>
<h1>VARIABLE SCOPES</h1>
<hr>
<?php 

    function sayHello3() {
        global $globalName;
        echo "<p>Hello, $globalName!</p>";
    }
    function sayHello4() {
        $globalName = 'Mundo';
        echo "<p>HOLA, $globalName!</p>";
    }
    sayHello3(); 
    sayHello4();    
?>

<h1>
CONTROL STRUCTURES
</h1>
<hr>
<?php 

// if 
if(5 > 3) {
    echo "<p>5 es mayor que 3</p>";
}

// if else
if(5 < 3) {
    echo "<p>5 es menor que 3</p>";
} else {
    echo "<p>5 no es menor que 3</p>";
}

// foreach
$fruits = array("Apple", "Banana", "Orange");
foreach ($fruits as $fruit) {
    echo "<p>$fruit</p>";
}
print_r($fruits);

while (count($fruits) > 0) {
    echo "<p>FRUIT: " . array_pop($fruits) . "</p>";
}
print_r($fruits);

echo ("<hr>");

// switch
$day = "Saturday";
switch($day) {
    case "Monday":
        echo "<p>Today is Monday</p>";
        break;
    case "Tuesday":
        echo "<p>Today is Tuesday</p>";
        break;
    case "Wednesday":
        echo "<p>Today is Wednesday</p>";
        break;
    case "Saturday":
    case "Sunday":
        echo "<p>Today is a weekend</p>";
        break;
    default:
        echo "<p>Today is not a weekday</p>";
}

echo ("<hr>");

if ($day == "Monday"){
    echo "<p>Today is Monday</p>";
} else if ($day == "Tuesday") {
    echo "<p>Today is Tuesday</p>";
} else if ($day == "Wednesday") {
    echo "<p>Today is Wednesday</p>";
} else {
    echo "<p>Today is not a weekday</p>";
}

$text = "Hello World!";
echo "$text[0]";

// match example
$fruit = "Watermelon";
$resultado = match($fruit) {
    "Apple" => "It's an apple",
    "Banana" => "It's a banana",
    default => "<p>this is nothing</p>"
};
echo $resultado;

// STRINGS
$var1 = "uno dos y tres";
echo "<p>VAR1: $var1</p>";
echo "<p>VAR1: " . strtoupper($var1) . "</p>";
echo "<p>VAR1: " . strtolower($var1) . "</p>";
echo "<p>VAR1: " . ucfirst($var1) . "</p>";
echo "<p>VAR1: " . ucwords($var1) . "</p>";
echo "<p>VAR1: " . strlen($var1) . "</p>";


echo "ARRAYS";

$fruits = array("Apple", "Banana", "Orange");
// 
$persona = [
    0 => "Alex",
    1 => "20",
    2 => "Martinez",
    "nacionalidad" => "Espana",
];

$persona["juan"]="Perez";

foreach ($persona as $llave => $valor) {
    echo "<p>$llave)  $valor</p>";
}

?>
