<?php

$cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];

?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3</title>
</head>

<body>
    <div>
        <ul>
            <?php for ($i=0; $i < count($cities4); $i++) {
                echo "<li>$cities4[$i]</li>";
            }?>
        </ul>
    </div>
    <div>
        <ul>
            <?php foreach ($cities4 as $cities) {
    echo "<li>$cities</li>";
}?>
        </ul>
    </div>
</body>
    
</html>
