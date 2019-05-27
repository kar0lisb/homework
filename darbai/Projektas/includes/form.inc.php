<?php 
    $miestas = trim($_POST['miestas']);
    $gedimas = trim($_POST['gedimas']);
    $aprasymas = trim($_POST['aprasymas']);
    $telefonas = trim($_POST['telefonas']);

if(!empty($miestas) && !empty($gedimas) && !empty($aprasymas) && !empty($telefonas)) {
        header("Location: ../main.php?=success");
    }

 include('db.inc.php');
 mysqli_query($conn, "INSERT INTO gedimai (miestas, gedimas, aprasymas, telefonas) VALUES('$_POST[miestas]', '$_POST[gedimas]', '$_POST[aprasymas]', '$_POST[telefonas]')");
?>