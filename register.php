<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
 <meta name="viewport" content="width=device-width" />
</head>
<body>
<?php
require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password']
, $_REQUEST['Prenom'], $_REQUEST['Ville'], $_REQUEST['telephone'], $_REQUEST['Interets'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requéte SQL + mot de passe crypté
	$Prenom = stripslashes($_REQUEST['Prenom']);
	$Prenom = mysqli_real_escape_string($conn, $Prenom);

	$Ville = stripslashes($_REQUEST['Ville']);
	$Ville = mysqli_real_escape_string($conn, $Ville);

	$telephone = stripslashes($_REQUEST['telephone']);
	$telephone = mysqli_real_escape_string($conn, $telephone);
		//$téléphone = mysqli_real_escape_string($conn, $téléphone);
	$Interets = stripslashes($_REQUEST['Interets']);
	$Interets= mysqli_real_escape_string($conn, $Interets);
     
    $cpc=1;
// test email
/*	$email = test_input($_REQUEST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}*/
    $query = "INSERT into `users` (username, email, password, Prenom, Ville, telephone, Interets)
              VALUES ('$username', '$email', '".hash('sha256', $password)."' ,'$Prenom','$Ville','$telephone','$Interets')";
 //remplissage du tableau basepoints et generation de 10 points de bienvenue
         $query2 = "INSERT into `basepoints` ( email, username, cpc)
              VALUES ('$email', '$username', $cpc)";
         $res2 = mysqli_query($conn, $query2);


	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res&&$res2){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
	echo "erreur formulaire" ;
?>
<form class="box"  method="POST" autocomplete="off" id="form">
	<h1 class="box-logo box-title"><a href="">Flayes</a></h1>
    <h1 class="box-title"></h1>
    <div class="form-control">
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required >
    <small>Error message</small>
        </div>
    <div class="form-control">
        	<input type="text" class="box-input" name="Prenom" placeholder="Nom Complet" required >
 <small>Error message</small>
        </div>
<div class="form-control">
    <input type="email" class="box-input"   name="email" placeholder="Email" required >
 <small>Error message</small>
        </div>
    <div class="form-control">
         <input type="text" class="box-input" name="Ville" placeholder="Ville" required id="Ville" maxlength="30" >
 <small>Error message</small>
        </div>
   <div class="form-control">
       <input type="text" class="box-input" pattern="[0-9]{8}" name="telephone" placeholder="Télephone" required id="telephone">
 <small>Error message</small>
  
        </div>
   <div class="form-control">
        <input type="text" class="box-input" name="Interets" id="Interets" placeholder="Interets" required maxlength="30" >
 <small>Error message</small>
</div>
   <div class="form-control">
       <input type="password" id="password" pattern=".{6,}" class="box-input" name="password" placeholder="Mot de passe" required >
 <small>Error message</small>
</div>

    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    
</form>

<?php } ?>
<!-- <script src="app.js"></script> -->
</body>
<style>
.form-control small{
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small{

    visibility: visible;
}
    input:invalid {
  box-shadow: 0 0 5px 1px red ;
  border-color: #900;
  background-color:  #FF6347;
}
 input:valid {
  box-shadow: 0 0 5px 1px green ;
  border-color: white;
  background-color:#9ACD32;
}
input:focus:invalid {
  outline: none;
}
-webkit-appearance: none;

  width : 100%;
  border: 1px solid #333;
  margin: 0;

  font-family: inherit;
  font-size: 90%;

  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

</style>
</html>