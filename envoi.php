

<?php 
//Pour d�finir chaque input du formulaire, ajouter le signe de dollar devant

$nom = "Nom:\t$nom\n";
$email .= "E-Mail:\t$email\n";
$msg .= "Message:\t$message\n\n";
//Pourait continuer ainsi jusqu'� la fin du formulaire

$recipient = "aymen199719@hotmail.Fr";
$subject = "Demande retrait point";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci $nom </H1>";
echo "<P align=center>";
echo "Votre demande retrait argents � bien �t� envoy� !</P>";
echo "</BODY></HTML>";

?>