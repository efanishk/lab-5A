<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($length, $width) 
        {
            return $length * $width;
        }

        $length = 6; 
        $width = 7;   

        $area = calculateArea($length, $width);
    ?>

    <h1>Rectangle Area Calculation</h1>
    <?php 
            echo "The area of $length length and $width width is $area.";
        ?>
</body>
</html>
