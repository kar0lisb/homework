<?php
/* Prisijungiame prie duomenų bazės */
$link = mysqli_connect("localhost", "root", "", "search");
 
// Error, jei nepavyksta prisijungti
if($link === false){
    die("KLAIDA: nepavyko prisijungti. " . mysqli_connect_error());
}
 
if(isset($_REQUEST['term'])){
    // SQL užklausa
    $sql = "SELECT * FROM countries WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Susiejame kintamuosius su prepared statement 
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Nustatome parametrus
        $param_term = $_REQUEST['term'] . '%';
        
        // Vykdome prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Patikriname eilučių kiekį rezultate
            if(mysqli_num_rows($result) > 0){
                // Sukuriame asociatyvinį masyvą, kuriame patalpiname rezultato eilutes
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["name"] . "</p>";
                }
            } else{
                echo "<p>Nerasta</p>";
            }
        } else{
            echo "KLAIDA: nepavyko įvykdyti $sql. " . mysqli_error($link);
        }
    }
     
    // Uždarome statement
    mysqli_stmt_close($stmt);
}
 
// Uždarome pasijungimą prie duomenų bazės
mysqli_close($link);
?>