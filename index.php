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
    ?>
</body>
</html>