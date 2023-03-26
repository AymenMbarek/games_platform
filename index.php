<?php
session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location:login.php");
		exit(); 
	}
	 
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	 <meta name="viewport" content="width=device-width" />
	 <meta http-equiv="refresh" content="900;url=logout.php" /> <!-- deconnexion si inactivité -->
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
		<a href="acceuil.php">Continuez vers le site </a></br>
		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>