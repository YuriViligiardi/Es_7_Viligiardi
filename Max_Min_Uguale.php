<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = rand(1,100);
        $y = rand(1,100);
        if ($x > $y) {
            echo "<h1>La variabile $x è maggiore di $y</h1>"
            $max = $x;
        } else if ($x < $y) {
            echo "<h1>La variabile $x è minore di $y</h1>"
            $max = $y;
        } else {
            echo "<h1>La variabile $x è uguale a $y</h1>"
        }

        if ($max <) {
            # code... e
        } elseif (condition) {
            # code...
        } elseif (condition) {
            # code...
        } else {
            # code...
        }
    ?>
</body>
</html>