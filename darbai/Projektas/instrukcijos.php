<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Desk - Instrukcijos</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/menu.js"></script>
</head>

<body>
    <script async src="js/popLangas1.js"></script>
    <script async src="js/popLangas2.js"></script>
    <script async src="js/popLangas3.js"></script>
    <script async src="js/popLangas4.js"></script>
    
            <div class="menu" id="myMenu">
                <a class="menuButton" onclick="checkIfMain()" href="main.php">Gedimo registravimas</a>
                <a class="menuButton" onclick="checkIfGedimai()" href="gedimai.php">Gedimų žurnalas</a>
                <a class="menuButton" onclick="checkIfInstrukcijos()" href="#">Instrukcijos</a>
                <?php include_once 'includes/logout-btn.inc.php' ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

        <div class="flex-image">
            
            <div class="tooltip" id="myBtn">
                <img src="images/462530-brother-hl-l2300d.jpg" alt="printer" />
                <p>Spausdintuvo nunulinimas</p>
            </div>
            <div id="myModal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <p>Ištraukite maitinimo laidą ir paspauskite įjungimo mygtuką 7 kartus</p>
              </div>

            </div>
            <div class="tooltip" id="myBtn1">
                <img src="images/korteliu-skaitytuvas.jpg" alt="card reader" />
                <p>Kortelių skaitytuvo perkrovimas</p>
            </div>
            <div id="myModal1" class="modal1">
              <div class="modal-content1">
                <span class="close1">&times;</span>
                <p>Nuspauskite ir laikykite <span style="color:yellow; background-color:black">geltoną</span> ir # mygtukus kol skaitytuvas persikraus</p>
              </div>

            </div>
            
            
            <div class="tooltip" id="myBtn2">
                <img src="images/router.jpg" alt="router" />
                <p>Interneto gedimai</p>
            </div>
            <div id="myModal2" class="modal2">
              <div class="modal-content2">
                <span class="close2">&times;</span>
                <p>Patikrinkite ar abu interneto kabelio galai tvirtai įstatyti į kompiuterį/interneto rozetę</p>
              </div>

            </div>
            
            <div class="tooltip" id="myBtn3">
                <img src="images/rechercher.jpg" alt="zoom" />
                <p>Blogas kalendoriaus laikas</p>
            </div>
            <div id="myModal3" class="modal3">
              <div class="modal-content3">
                <span class="close3">&times;</span>
                <p>Paspauskite vienu metu mygtuką CTRL ir 0 (nulis)</p>
              </div>

            </div>
    </div>
    <script>
            
                var path = window.location.pathname;
                var page = path.split("/").pop();
            
            function checkIfInstrukcijos() {
                if (page == 'instrukcijos.php') {
                   alert('Jūs jau esate šiame puslapyje');
                } 
            }

        </script>

</body>
    
</html>
