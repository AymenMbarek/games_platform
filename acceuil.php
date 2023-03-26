<?php
session_start();
if(!isset($_SESSION["username"])){
   require_once('header.php');
   
  }else
  
    if($_SESSION["username"]!="Admin")
    { 
    require_once('headerafterlog.php');
    }
  else
    if($_SESSION["username"]=="Admin" )
    {
      require_once('headeradmin.php');
    }
 ?> <h1>Username :  <?php echo $_SESSION["username"] ; ?> </h1> <?php
  ?> <h1>Points:  <?php 

?> <!-- $_SESSION["password"]=="23850721Mabrouk" --> <?php
$host = "127.0.0.1";
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
     $i=0;
 while   ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
     $i++;
     $cpctab[0]=$row['cpc'];
 

   ?>  <?php endwhile;
 foreach ($cpctab as $i => $value) {
        
         echo "    $cpctab[0]   <br>";  
                                       
                                        }
?></h1>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/gif" href="/Game-Box/logo1.png">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

    <link rel="stylesheet" type="text/css" href="/Game-Box/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Game Box</title>

    
  </head>
  <body class="background-dark text-white">
   <!--
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="acceuil.php"><img src="Game-Box/logo1.png" width="30" height="30" class="d-inline-block align-top" style="margin-right: 10px; margin-left: 10px;" >
    GAME BOX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="  false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item ">
        <a class="nav-link active" href="acceuil.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Game-Box/about.html">About</a>
      </li>
  </div>
</nav>
-->
  
  <h1 class="slideInDown animated"><img src="/Game-Box/logo1.png" class="rounded logo rubberBand animated">FLAYES GAME BOX</h1>
  <hr>
  <br>

  <div>
    <h4 class="text-muted">Welcome to Game Box</h4>
    <h6 class="text-muted">Collection of best classic Games at one place. Enjoy Our latest Games and play for Free .</h6>

  </div>


  <div class="container">
   <div class="row">

    <div class="col-sm-4">
      <div class="box  fadeIn animated">
     <a href="/Game-Box/steal the cupcake\cupcake.php"><img src="/Game-Box/game1.JPG" class="rounded mx-auto d-block" ></a>
           <h4 class="background-dark text-white">Steal cupcake</h4>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="box fadeIn animated">
      <a href="/Game-Box/Snake Game\snake.php"><img src="/Game-Box/game2.jpg" class="rounded mx-auto d-block" ></a>
           <h4 class="background-dark text-white">Snake Game</h4>
    </div>
   </div>

    <div class="col-sm-4">
      <div class="box fadeIn animated">
      <a href="/Game-Box/Breakout Game\breakout.php"><img src="/Game-Box/game3.png" class="rounded mx-auto d-block" ></a>
           <h4 class="background-dark text-white">BreakOut Game</h4>
    </div>
   </div> 
     

   </div>

  </div>
       
       
         <div class="container">
   <div class="row">

    <div class="col-sm-4">
      <div class="box  fadeIn animated">
     <a href="/Game-Box//Pig Game\pig.php"><img src="/Game-Box/game4.JPG" class="rounded mx-auto d-block" ></a>
          <h4 class="background-dark text-white">Pig Game</h4>
      </div>
    </div>

    <div class="col-sm-4">
     <!--   Game Slot        -->  
     <div class="box  fadeIn animated">
     <a href="/Game-Box/penalty/ball.php"><img src="/Game-Box/penalty/img/Capture.PNG" class="rounded mx-auto d-block" ></a>
          <h4 class="background-dark text-white">Shot Game</h4>
      </div>
   </div>

    <div class="col-sm-4">
      <div class="box fadeIn animated">
      <a href="/Game-Box/darkpuzzle/puzzle.php"><img src="/Game-Box/darkpuzzle/Capture.PNG" class="rounded mx-auto d-block" ></a>
          <h4 class="background-dark text-white">Puzzle</h4>
          <!--    Game slot       -->  
          
     </div>
   </div> 
   
   
   
   
     

   </div>

  </div>
   <div class="container">
   <div class="row">

    <div class="col-sm-4">
      <div class="box  fadeIn animated">
     <a href="/Game-Box//Pig Game\pig.php"><img src="/Game-Box/game4.JPG" class="rounded mx-auto d-block" ></a>
          <h4 class="background-dark text-white">Pig Game</h4>
      </div>
    </div>

    <div class="col-sm-4">
     <!--   Game Slot        -->  
     <div class="box  fadeIn animated">
     <a href="/Game-Box/penalty/ball.php"><img src="/Game-Box/penalty/img/Capture.PNG" class="rounded mx-auto d-block" ></a>
          <h4 class="background-dark text-white">Shot Game</h4>
      </div>
   </div>

    <div class="col-sm-4">
      <div class="box fadeIn animated">
      <a href="/Game-Box/darkpuzzle/puzzle.php"><img src="/Game-Box/darkpuzzle/Capture.PNG" class="rounded mx-auto d-block" ></a>
          <h4 class="background-dark text-white">Puzzle</h4>
          <!--    Game slot       -->  
          
     </div>
   </div> 
     

   </div>

  </div>       

  <div class= "background-dark text-white">
    <p class="background-dark text-white">All rights reserved <i class="far fa-copyright"></i> Flayes <a href=""><i class="fab fa-github icon"></i></a> <a href=""><i class="fab fa-instagram icon"></i></a></p>
    
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
     <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>                                                                   
     
