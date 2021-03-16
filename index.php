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
$r = rand(1,100);

// pí
define('PI', 3.14);

// obsah kruhu (S = π r²).
$area = $r * $r * PI; 

// obvod kruhu  o = 2 π (3,14) × poloměr r
$perimeter = PI + PI * $r / 2; 

?>

<p>r = <?= $r ?> cm </p>
<p>Obvod kruhu je <?= PI ?> + <?= PI ?> * <?= $r ?> / <?= 2 ?> = <?= $area ?> cm </p>
<p>Obsah kruhu je <?= $r ?> * <?= $r ?> * <?= PI ?> = <?= $perimeter ?> cm  </p> 



    
</body>
</html>