<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Service Desk - Gedimai</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="js/table-sort.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
</head>

<body>
        <div class="menu" id="myMenu">
                <a class="menuButton" onclick="checkIfMain()" href="main.php">Gedimo registravimas</a>
                <a class="menuButton" onclick="checkIfGedimai()" href="#">Gedimų žurnalas</a>
                <a class="menuButton" onclick="checkIfInstrukcijos()" href="instrukcijos.php" style="">Instrukcijos</a>
                <?php include_once 'includes/logout-btn.inc.php' ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
        </div>
    
        <div class="gedimuLangas">
            <table id="myTable">
                <thead>
                <tr>
                    <th onclick="sortTable(0)">Reg. Nr</th>
                    <th onclick="sortTable(1)">Reg. Data</th>
                    <th onclick="sortTable(2)">Miestas</th>
                    <th onclick="sortTable(3)">Gedimo rūšis</th>
                    <th>Gedimo aprašymas</th>
                    <th>Telefono Nr.</th>
              <?php
                include_once 'includes/table.inc.php';
                ?>
            </form>
        </div>  

<script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
            
    function checkIfGedimai() {
        if (page == 'gedimai.php') {
            alert('Jūs jau esate šiame puslapyje');
            } 
        }
</script>   
    
</body>
    
</html>
