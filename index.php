<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// r
$number1 = rand(1,100);

// pí
$number2 = rand (3.14,3.14);

// obsah kruhu (S = π r²).
$area = $number1 * $number1 * $number2; 

// obvod kruhu  o = 2 π (3,14) × poloměr r
$circuit = $number2 + $number2 * $number1 / 2; 

?>

<p>r = <?= $number1 ?> </p>
<p>Obvod kruhu je <?= $number2 ?> + <?= $number2 ?> * <?= $number1 ?> / <?= 2 ?> = <?= $circuit ?>        </p>
<p>Obsah kruhu je <?= $number1 ?> * <?= $number1 ?> * <?= $number2 ?> = <?= $area ?> </p>



    
</body>
</html>