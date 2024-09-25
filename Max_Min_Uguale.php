<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massimo, Minimo e Uguale</title>
</head>
<body>
    <?php
        $x = rand(1,50);
        $y = rand(1,50);
        $max = 0;
        if ($x > $y) {
            echo "<h1>La variabile $x è maggiore di $y</h1>";
            $max = $x;
        } elseif ($x < $y) {
            echo "<h1>La variabile $x è minore di $y</h1>";
            $max = $y;
        } else {
            echo "<h1>La variabile $x è uguale a $y</h1>";
        }
    ?>
    <?php
        if ($max != 0) {
            if ($max < 10) {
                echo "<p>$max è minore di 10</p>";
            } elseif ($max >= 10 && $max <= 20) {
                echo "<p>$max è compreso tra 10 e 20</p>";
            } elseif ($max >= 21 && $max <= 30) {
                echo "<p>$max è compreso tra 21 e 30</p>";
            } else {
                echo "<p>$max è maggiore di 30</p>";
            }
        }  
    ?>
</body>
</html>