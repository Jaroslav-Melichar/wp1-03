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
PI - define('PI', 3.14);

// obsah kruhu (S = π r²).
$content = $number1 * $number1 * PI; 

// obvod kruhu  o = 2 π (3,14) × poloměr r
$circuit = PI + PI * $number1 / 2; 

?>

<p>r = <?= $number1 ?> cm </p>
<p>Obvod kruhu je <?= PI ?> + <?= PI ?> * <?= $number1 ?> / <?= 2 ?> = <?= $circuit ?> cm </p>
<p>Obsah kruhu je <?= $number1 ?> * <?= $number1 ?> * <?= PI ?> = <?= $circle ?> cm  </p> 



    
</body>
</html>