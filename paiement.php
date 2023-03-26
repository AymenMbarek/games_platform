<?php
session_start();
?>
<style>
	#points {color: #FF0000;}
</style>
<?php
if(!isset($_SESSION["username"])){
   require_once('header.php');
   
  }else
  
    if($_SESSION["username"]!="Bennourm9@gmail.com")
    { 
    require_once('headerafterlog.php');
    }
  else
    if($_SESSION["username"]=="Bennourm9@gmail.com")
    {
      require_once('headeradmin.php');
    }
 ?> <h1 class="text-size-50 text-white text-center center text-uppercase"> <b>Username : </b>
     <style> h1 {color: #FF0000;}</style> <b>  <?php echo $_SESSION["username"] ; ?> </b> </h1> <?php
  ?> <h1 id="points" class="text-size-50 text-white text-center center text-uppercase"> <?php 
$i=0;
$host = "localhost";
$username = "root";
$password = "";
$dbname = "fleles";
    $dsn = "mysql:host=$host;dbname=$dbname"; 
       // $sql4 = "SELECT cpc FROM basepoints as b ,users as u where b.username=u.username and b.id>0"; 
    $user=$_SESSION['username'];
        $sql4 = 'SELECT cpc FROM basepoints  WHERE username = "'.$user.'" ';
 try{      
     $pdo = new PDO($dsn, $username, $password);
     $stmt = $pdo->query($sql4);
if($stmt === false ){
        die("Erreur");
     }
     
        }catch (PDOException $e){
        echo $e->getMessage();
    }
     $cpctab=array();
 while   ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
     $i++;
     $cpctab[0]=$row['cpc'];
 

   ?>  <?php endwhile;
 foreach ($cpctab as $i => $value) {
        
   ?>    <?php   echo "   $cpctab[0]   ";     ?>         
         <?php                              
                                        }
?></h1>


<!DOCTYPE html>
<html lang="en-US">
   <head>
       
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      	 <meta http-equiv="refresh" content="900;url=logout.php" /> <!-- deconnexion si inactivité -->
      <script>
        window.addEventListener("scroll", function(){
  console.log('scrolling');
});
window.addEventListener("resize", function(){
 console.log('window resized');
});
window.addEventListener("click", function(){
  console.log('Window clicked');
});

 //check for Navigation Timing API support
 if (window.performance) {
   
  console.info("window.performance works fine on this browser");
  } 
  console.info(performance.navigation.type);
  if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
  console.info( "This page is reloaded" );
  }
</script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- <meta http-equiv="refresh" content="0;url=https://flayes.tn/index.php/">  redirection de lien -->
      <title>Click to Earn website</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->      
      <link rel="stylesheet" href="css/template-style.css">
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">  
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
   </head>

   <!--
    You can change the color scheme of the page. Just change the class of the <body> tag. 
    You can use this class: "primary-color-white", "primary-color-red", "primary-color-orange", "primary-color-blue", "primary-color-aqua", "primary-color-dark" 
    -->
    
    <!--
    Each element is able to have its own background or text color. Just change the class of the element.  
    You can use this class: 
    "background-white", "background-red", "background-orange", "background-blue", "background-aqua", "background-primary" 
    "text-white", "text-red", "text-orange", "text-blue", "text-aqua", "text-primary"
    -->

   <body class="size-1520 primary-color-white background-blue">
       
      <!-- PREMIUM FEATURES BUTTON -->
    	<a target="_blank" class="hide-s" href="/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
      
      
         <main role="main">
            <header class="grid">
          <div class="s-12 padding-2x">
            <h1 class="text-strong text-white text-center center text-size-20 text-uppercase margin-bottom-20">envoyer demande retrait argents</h1>
            
          </div>
          
         <FORM method="POST" action="" class="text-strong text-white text-center center text-size-40 text-uppercase margin-bottom-20">
<!-- <P>Votre nom:<br>
<INPUT type="text" name="nom" size=30 class="text-strong text-dark  ">
</p>
<P>Votre adresse E-Mail:<br>
<INPUT type="text" name="email" size=30 class="text-strong text-dark  ">
</p>
<P>Message:<br>
<textarea name="message" cols=30 rows=5 class="text-strong text-dark  "></textarea>
</p> -->


          <ol class="text-strong text-white text-center center text-size-40 text-uppercase margin-bottom-20 ">
  <li> <input type="checkbox" id="etape1" name="etape1"> <b> Avoir un compte actif  </b> </li>
  <li> <input type="checkbox" id="etape2" name="etape2"> <b> Atteindre 10000 points dans le compte</b></li>
  <li> <input type="checkbox" id="etape3" name="etape3"><b> Inviter 3 amis pour essayer la plateforme</b></li>
</ol>
<style>
    #za{ color :white;}
</style>

<a href="mailto:bennourm9@gmail.com" onclick="" class="text-strong text-dark text-center center text-size-50 text-uppercase margin-bottom-20"
id="za">Send email</a>
</FORM>
<script>
let x = document.getElementById("points").innerHTML;
console.log(x);
if(x<10000)
{ 
	alert(" tu ne peux pas retirer tes points sans avoir 1000 minimum ");
	alert("Redirection vers l'acceuil dans 10 secondes");
	window.setTimeout(function() {
    window.location.href = 'acceuil.php';
}, 5000);
}


</script>


        </header>
        <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>

   </body>
</html>