
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3_2</title>
</head>

<body>
    <div>
        <?php

        function plotas($a, $b) {
            $s = $a * $b;
            echo $s;
            }
        
        if(isset($_POST['submit']))
        {
            if($_POST['ilgis'] && $_POST['plotis']) {
                
            plotas($_POST['ilgis'], $_POST['plotis']);
            } 
                    
            } else { ?>
            
                <form action="php3_2.php" method="POST">
                <input name="ilgis" type="text" placeholder="ilgis">
                <input name="plotis" type="text" placeholder="plotis">
                <input name="submit" type="submit" value="Skaičiuoti">
                </form>
        
        <?php } ?>
                

    </div>
    
</body>
    
</html>
   