<?php
session_start();
setcookie('pid', '');
?>
<style>
  #points {color: #FF0000;}
</style>
<?php 
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
<html lang="en">
  <head>
       <script>
  

  //document.getElementById("cadre").addEventListener("click", function(){
   let o=document.getElementById("points").innerHTML;
   console.log("points when page started");
   console.log(o);
  </script>  
  <script>
     
var cpcarray=  <?php echo json_encode($cpctab); ?>;

window.addEventListener("click", function(){
  console.log('Window clicked');

//reglage cookies

var a=document.getElementById("points").innerHTML;
let z=parseInt(a)+2;
document.getElementById("points").innerHTML=z;
var g=parseInt(z);
console.log(g);

    document.cookie= "pid="+g; 
//ajout de points
<?php 
 if(isset($_COOKIE['pid'])){
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
  }
    ?>

});


</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <link rel="icon" type="image/gif" href="logo1.png">
      
    <link rel="stylesheet" type="text/css" href="style.css">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">  
      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  

    <title>Game Box | Pig Game</title>
  </head>
  <body>
      
       <!--  NAVBAR       -->  
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../../../acceuil.php"><img src="logo1.png" width="30" height="30" class="d-inline-block align-top" style="margin-right: 10px; margin-left: 10px;" >
    GAME BOX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="  false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item ">
        <a class="nav-link" href="../../../acceuil.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../../acceuil.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal">Rules</a>
      </li>
  </div>
</nav>
          
<div class="container">
 <div class="row">
  <div class="col-sm-1"></div> 
     
  <div class="col-sm-10 box">
      
      <h5 id="new"><i class="fas fa-plus-circle icon"></i> NEW GAME</h5>
          
      
      <div class="row innerRow">
      <div class="player-0 col-sm-5 active">
          
          <h2 id="pl-0">PLAYER 1 <i class="fas fa-circle"></i></h2>
          <h1 class="score-0 display-4">15</h1>
         
          <div class="current-box">
            <h5>SCORE</h5>
            <h3 class="current-0">45</h3>
          </div>
          
      </div>
          
     <div class="dice-box col-sm-2">
         
          <img src="dice-5.JPG" id="dice-img" class="rounded mx-auto d-block shake animated">
         
          <h5 id="rotate"><i class="fas fa-sync-alt r-icon"></i> DICE</h5>
          <h5 id="hold"><i class="fas fa-chevron-down h-icon"></i> HOLD </h5>
          
    </div>      
          
      
            
      <div class="player-1 col-sm-5">
         
          <h2 id="pl-1">PLAYER 2  <i class="fas fa-circle"></i></h2>
           <h1 class="score-1 display-4">23</h1>
         
          <div class="current-box">
            <h5> SCORE</h5>
            <h3 class="current-1">76</h3>
          </div>
          
      </div>       
         
      
      </div> 
  </div>     
    
     
  <div class="col-sm-1"></div>     
     
     
 </div>
          
</div> 
          


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RULES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <br>
        <h5>1.This is a Two Player Game</h5>  
        <h5>2.The player Reach Global score of 100 first will win the Game</h5>
        <h5>3.You have to Roll the dice and the Number will be added to your current score</h5>
        <h5>4.If you get a 1 your current score willl become zero and the chance is shift to other player</h5>
        <h5>5.You can hold your current score by pressing hold to add them in your global score</h5>
        <h5>6.If you hold your score the chance to roll the dice is shift to other player</h5>
        <h5>7.Click new game to start a new game</h5>  
          
        <br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    <script type="text/javascript" src="javascript.js"></script>
          
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <a href="../../../acceuil.php"><h3>Return Home </h3></a> <style> h3 {color: #FF0000;}</style>
        <?php
            if(isset($_COOKIE['pid'])){
                echo 'Votre ID de session est le ' .$_COOKIE['pid'];
            }
        ?>
  </body>
</html>
      
      
      
      
      
      
   

    