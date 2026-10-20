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

        // Array type
        $names = ["Daniel", "Bella", "Frida"];

        // Object type
        $object = new Car();
    ?>
</body>
</html>