<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is a <?php echo "awesome"; ?> paragraph!</p>
    <?php
        echo "This is ALSO a paragraph!";

        // Scalar types (contains one value)
        $name = "Dieguin";
        echo $name;
        $string = "Diego";
        $int = 12354353;
        $float = 2.5678;
        $bool = true;
        $test = $name;

        // Array type
        $names = ["Daniel", "Bella", "Frida"];

        // Object type
        $object = null;
    ?>

    <p>Hi! My name is <?php echo $test; ?>, and I'm refreshing PHP!</p>

    <?php 
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";
        echo $_GET["name"];
        echo " ";
        echo $_GET["eyecolor"];
        $_SESSION["username"] = "Dieguin Dieganero";
        echo "<br>";
        echo $_SESSION["username"];
        echo "<br>";

        // String operator
        $a = "Hello";
        $b = "World!";
        $c = $a . " " . $b;
        echo $c;

        echo "<br>";

        // Arithmetic operator
        echo 1 + 2;
        echo "<br>";
        echo 10 % 3;
        echo "<br>";
        echo 10 ** 3;
        echo "<br>";
        echo (1 + 2) * (4 - 2);

        echo "<br>";

        // Assignment operators
        $a = 2;
        $a *= 4;
        echo $a;

        echo "<br>";

        // Comparison operator
        $a = 4;
        $b = 4;

        if ($a <= $b) {
            echo "This statement is true!";
        }

        echo "<br>";

        // Logical operators
        $a = 4;
        $b = 4;
        $c = 2;
        $d = 6;

        if ($a == $b || $c == $d && $a == $c) {
            echo "This statement is true!";
        }

        echo "<br>";

        // Incrementing/decrementing operators
        $a = 1;
        echo $a--;
        echo "<br>";
        echo $a;

        echo "<br>";

        // Control structures
        $bool = true;
        $a = "1";
        $b = 4;

        

        switch($a) {
            case 1:
                echo "The first case is correct";
                break;
            case 2:
                echo "The second case is correct!";
                break;
            case 3:
                echo "The third case is correct";
                break;
            default:
                echo "None of the conditions were true!";
                break;
        }

        // Match (only works in PHP 8+)

        $returnedStr = match(true) {
            $a < $b && !$bool => "First condition is true!",
            $a < $b && $bool => "Second condition is true!",
            default => "None of the conditions were true!"

        };
        echo $returnedStr;

        echo "<br>";

        $result = match($a) {
            1, 3, 5 => "Variable a is equal to one!",
            2 => "Variable a is equal to two!",
            default => "None were a match",
        };

        echo $result;

        echo "<br>";


        

        /* if ($a < $b && !$bool) {
            echo "First condition is true!";
        } else if ($a < $b && $bool) {
            echo "Second condition is true!";
        } else {
            echo "None of the conditions were true!";
        } */
    ?>
</body>
</html>