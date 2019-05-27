<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service desk - Gedimo registravimas</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/numeric-value.js"></script>
</head>

<body>      
            <div class="menu" id="myMenu">
                <a class="menuButton" onclick="checkIfMain()" href="#">Gedimo registravimas</a>
                <a class="menuButton" onclick="checkIfGedimai()" href="gedimai.php">Gedimų žurnalas</a>
                <a class="menuButton" onclick="checkIfInstrukcijos()" href="instrukcijos.php">Instrukcijos</a>
                <?php include_once 'includes/logout-btn.inc.php' ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        
            <form class="issueForm" action="includes/form.inc.php" method="post">
                <div>
                    <p>Pasirinkite miestą kuriame registruojate gedimą</p>
                    <select name="miestas" class="cityDropDown" required>
                        <option disabled selected value>--Pasirinkite miestą--</option>
                        <option value="Vilnius">Vilnius</option>
                        <option value="Kaunas">Kaunas</option>
                        <option value="Klaipėda">Klaipėda</option>
                    </select>
                </div>
                <div>
                    <p>Pasirinkite gedimo rūšį</p>
                    <select class="grade" name="gedimas" required>
                        <option disabled selected value>--Pasirinkite gedimą--</option>
                        <option value="IT gedimas">IT gedimas</option>
                        <option value="Techninis gedimas">Techninis gedimas</option>
                    </select>
                </div>
                <div>
                    <p>Gedimo apibūdinimas</p>
                    <textarea name="aprasymas" rows="5" placeholder="Trumpas gedimo apibūdinimas" required></textarea>
                </div>
                <div>
                    <p>Telefono numeris kuriuo galėtume su jumis susisiekti</p>
                    <input class="phoneNumberInput" type="text" name="telefonas" placeholder="Įrašykite telefono numerį" required onkeypress="return isNumber(event)">
                </div>
                <div>
                    <input class="formSubmitButton" type="submit" value="Registruoti gedimą">
                </div>
            </form>
        <script>
            
                var path = window.location.pathname;
                var page = path.split("/").pop();
            
            function checkIfMain() {
                if (page == 'main.php') {
                   alert('Jūs jau esate šiame puslapyje');
                } 
            }

        </script>
</body>
    
</html>
