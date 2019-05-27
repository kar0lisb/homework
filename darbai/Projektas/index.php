<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="lt">
    
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Service desk</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="js/show-password.js"></script>
</head>
    
<body>
    
	<div class="main">
		<div class="logInWindow">
			<h1>Gedimų žurnalas</h1>
			<h3>Norėdami užregistruoti gedimą prisijunkite prie sistemos</h3>
			<div class="logInForm">
				<form action="includes/login.inc.php" method="post">
					<div>
						<label class="idInput">Prisijungimo vardas</label>
                        <input id="idField" name="user_name" placeholder="Įveskite prisijungimo vardą" type="text" maxlength="12" required>
					</div>
					<div>
						<label class="pwInput">Slaptažodis</label>
                        <input id="pwField"  name="user_pw" placeholder="Įveskite slaptažodį" type="password" maxlength="12" required>
                        <div>
                            <input  class="showPassword" onclick="showPassword()" type="checkbox">
                            <span>Rodyti slaptažodį</span>
                        </div>
					</div>
					<div>
                        <input class="logIn" name="submit" type="submit" value="Prisijungti">
					</div>
				</form>
			</div>
		</div>
	</div>
    
</body>
    
</html>