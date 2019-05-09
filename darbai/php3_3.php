
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3_3</title>
</head>

<body>
    <div>
        <?php

        function vardasPavarde($a, $b) {
            echo "Vardas yra: $a";
            echo "<br>";
            echo "Pavardė yra: $b";
            }
        
        if(isset($_POST['submit']))
        {
            if($_POST['vardas'] && $_POST['pavarde']) {
                
            vardasPavarde($_POST['vardas'], $_POST['pavarde']);
            } 
                    
            } else { ?>
            
                <form action="php3_3.php" method="POST">
                <input name="vardas" type="text" placeholder="vardas">
                <input name="pavarde" type="text" placeholder="pavarde">
                <input name="submit" type="submit" value="Skaičiuoti">
                </form>
        
        <?php } ?>
                

    </div>
    
</body>
    
</html>
   