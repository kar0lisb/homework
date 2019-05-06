<?php

$x = 10;
$y = 7;

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3</title>
</head>

<body>
    <div>
        <?php $z = $x + $y; ?>
        <p><?php echo "$x  + $y  = $z"; ?> </p>
    </div>
    <div>
        <?php $z = $x - $y; ?>
        <p><?php echo "$x  - $y  = $z"; ?> </p>
    </div>
    <div>
        <?php $z = $x * $y; ?>
        <p><?php echo "$x  * $y  = $z"; ?> </p>
    </div>
    <div>
        <?php $z = $x / $y; ?>
        <p><?php echo "$x  / $y  = $z"; ?> </p>
    </div>
    <div>
        <?php $z = $x % $y; ?>
        <p><?php echo "$x  % $y  = $z"; ?> </p>
    </div>
    
</body>
    
</html>
