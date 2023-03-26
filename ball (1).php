<?php


session_start();

 ?> <h1>Username : <style> h1 {color: #FF0000;}</style> <?php echo $_SESSION["username"] ; ?> </h1> <?php
  ?> <h1>Points: <style> h1 {color: #FF0000;}</style> <?php 

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
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 $cpctab[1]=$row['cpc'];
echo $cpctab[1];
   ?> </h1> <?php
   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleles";   
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql2 = "SELECT * FROM users"; 
    $sql="SELECT * FROM basepoints ";
        try{      
     $pdo = new PDO($dsn, $username, $password);
     $stmt = $pdo->query($sql);
    // $cpcrequest=$pdo->query($sql2);
     if($stmt === false ){
        die("Erreur");
     }
     
        }catch (PDOException $e){
        echo $e->getMessage();
    }
 
 $i=0;
  $cpctab=array();
   $tab_users = array(); 
   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 
                
          $i++;
          $tab_users[$i]=$row['username'];

          $cpctab[$i]=$row['cpc'];
?>
<?php endwhile; 

  //echo "Le tableau contient ".count($tab_users)." éléments";?> </br> <?php
   foreach ($tab_users as $i => $value) {
        
        //   echo " Connected User $tab_users[$i]  with   $cpctab[$i]  points  imported from database table basepoints <br/>";  
                                       
                                        }
try{      
     $pdo = new PDO($dsn, $username, $password);
     $stmtx = $pdo->query($sql2);
                                        $stmtx = $pdo->query($sql2);
    // $cpcrequest=$pdo->query($sql2);
     if($stmt === false ){
        die("Erreur");
     }
     
        }catch (PDOException $e){
        echo $e->getMessage();
    }
    $j=0;
  $firstuser=array();
   
   while($row = $stmtx->fetch(PDO::FETCH_ASSOC)) : 
                
          $j++;
          $firstuser[$j]=$row['username'];

     
?>
<?php endwhile; 
 foreach ($firstuser as $j => $value) {
        
        //   echo "First table in database: Connected User $firstuser[$j] from basepoints  <br/>";  
                                       
                                        }
?>


<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
 
      
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="10">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="HTML, CSS, JavaScript">
   <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/> -->
        <title>Penalty Shootout</title>
        
     <!--     <meta name="viewport" content="width=device-width" > -->
          
        <!-- <base href="https://flayes.tn/jeux/penalty/ball.php"> -->
        <link rel="stylesheet"  type="text/css" href="css/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- favicon -->
        <link rel="icon" type="image/png" href="img/favicons/zee-ball-16x16.png" sizes="16x16">
        <link rel="apple-touch-icon" sizes="152x152" type="image/png" href="img/favicons/zee-ball-43x43.png" sizes="43x43">


        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        
          
    <script>
   
        //function increment points when shooting
        window.addEventListener("click", function(){
  console.log('inc function on');

  
});
     
function inc()
{
	alert('ball choosed keep clicking');
   var cpcarray=  <?php echo json_encode($cpctab); ?>;
   var basetab= <?php echo json_encode($tab_users); ?>;
  <?php
  
$user=$_SESSION['username'];
 $sql5=' UPDATE basepoints
SET cpc = cpc+2
WHERE username = "'.$user.'" ';
 try{      
     $pdo = new PDO($dsn, $username, $password);
     $s = $pdo->query($sql5);
if($s == false ){
        die("Erreur base de données");
     }
        }catch (PDOException $e){
        echo $e->getMessage();
    }
       if ($s){  
   $cpctab[0]= $cpctab[0]+2;
   echo " $cpctab[0] ";
   }
    ?>
}

    </script>
    </head>

       <body>
            <!--  <body onload="myFunction()"> -->
<script>
function myFunction() {
  alert (' Bienvenue Dans Flayes')  ;
}
</script>
        <!-- [if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<script>
    window.addEventListener("scroll", function(){
   console.log('scrolling');
    });   
</script>

        <div id="zee-game">

          <!-- game objects -->
          <div class="goal-keeper standing" id="goal-keeper-state-1"></div>
          <div class="goal-keeper left-jump" id="goal-keeper-state-2"></div>
          <div class="goal-keeper right-jump" id="goal-keeper-state-3"></div>
          <img id="zee-ball" src="img/zee-ball.png" width="43" height="43"/>
          <canvas id="kickAnimation"></canvas>

          <!-- modals -->
          <div id="modal-1" class="modal">Click to fix vertical direction</div>
          <div id="modal-2" class="modal">Click to fix horizontal direction</div>
          <div id="modal-3" class="modal">Click to adjust power and kick</div>
          <div id="modal-4" class="modal">Click to try again</div>
          <div id="modal-5" class="modal">Goal!</div>
          <div id="modal-6" class="modal">Go on, give it another shot</div>
          <div id="modal-7" class="modal">Congrats! You won!</div>

          <!-- control meters -->
          <div id="vertical-direction"></div>
          <div id="vertical-direction-indicator" class="small-ball one-end"></div>
          <div id="horizontal-direction"></div>
          <div id="horizontal-direction-indicator" class="small-ball one-end"></div>
          <div id="power-level"></div>
          <div id="power-level-indicator" class="small-ball one-end"></div>

          <!-- scoring -->
          <ul id="score-board">
            <li><img src="img/zee-ball.png" width="32" height="32"></li>
            <li><img src="img/zee-ball.png" width="32" height="32"></li>
            <li><img src="img/zee-ball.png" width="32" height="32"></li>
            <li><img src="img/zee-ball.png" width="32" height="32"></li>
            <li><img src="img/zee-ball.png" width="32" height="32"></li>
          </ul>

        </div>
 <!-- <input type="button" value="Click 3 times to shot" id="btn" name="btn" onclick="inc()"> -->
   <!--   <input type="button" value="refresh" id="refreshbtn" onclick="history.go(0)" ></br> -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script> -->

        <script src="js/vendor/pathAnimator.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script> -->
        <a href="../../acceuil.php"><h3>Return Home </h3></a> <style> h3 {color: #FF0000;}</style>
    </body>

</html>
