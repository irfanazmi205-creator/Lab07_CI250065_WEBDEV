<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php
        function calcArea($width, $height){

            return $width * $height;

        }

        $width = 5;
        $height = 2;
        $area = calcArea($width, $height);

        echo "<p>The area of rectangle with a width of $width and $height is $area</p>"
    ?>

</body>
</html>