<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php

    function calculateArea($width, $height){
        return $width * $height;
    }

    $width = 4;
    $height = 2;
    $area = calculateArea($width, $height);

    echo "<p><strong>The area of a rectangle with a width of $width and $height is $area</strong></p>";
    ?>
</body>
</html>
