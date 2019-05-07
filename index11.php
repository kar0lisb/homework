<?php

$cities = array('Berlynas', 'Roma', 'Londonas');
$cities[] = 'Tokijas';

print_r($cities);

echo '<br>';

$cities2 = [
    'Tokijas'=> 13.6,
    'Vasingtonas'=>0.6,
    'Maskva'=>11.5,
];
$cities2[] = ['Londonas'=>8.6];

print_r($cities2);
?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php1</title>
</head>

<body>
    <div>
        <ul>
            <li><?php print_r($cities[1]); ?></li>
        </ul>
    </div>
    <div>
        <ul>
            <?php echo "Gyventojų skaičius: $cities2[Tokijas] mln."; ?>
        </ul>
    </div>
    
</body>
    
</html>
