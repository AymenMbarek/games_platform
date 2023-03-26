<?php


session_start();
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
  


?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
      <meta name="viewport" content="width=device-width" />
      	 <meta http-equiv="refresh" content="900;url=logout.php" /> <!-- deconnexion si inactivité -->
      <title>Click to Earn website</title>
      <?php echo"Utilisateur connecté :     ". $_SESSION["username"]; ?>
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

   <body class="size-1520 primary-color-red background-dark">
      <!-- PREMIUM FEATURES BUTTON -->
    	<a target="_blank" class="hide-s" href="/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
      <!-- HEADER -->
     
      
      <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <header class="grid">
        	<div class="s-12 padding-2x">
            <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Click To Earn</h1>
            <p class="text-size-20 text-white text-center center text-uppercase">Jouez pour gagner de l'argents<br> Avec chaque clique vous gagnez des points que vous pouvez les transferer en argents .</p>
          </div>
        </header>
  
        

            



<!--

<section class="grid">        
          <div class="l-6 hide-s hide-m">
           <h1> <a id="title1" href="jeux/penalty/index.html"> Play our Flapp Bird </a></h1>  
           

<p><a href="jeux/FlappyBird/index.html">
<img src="jeux/FlappyBird/Capture.png" alt="Fleles  Puzzle Game" width="100" height="132">
</a></p>
          </div>
  </section>
           <style> #title1 {  color:white; }   

</style> -->
             <section class="grid">        
          <div class="l-6 hide-s hide-m">
           <h1> <a id="title1" href="jeux/penalty/ball.php"> Play our foot game earn money </a></h1>  
           

<p><a href="jeux/penalty/ball.php">
<img src="jeux/penalty/img/Capture.PNG" alt="Fleles  Puzzle Game" width="100" height="132">
</a></p>
          </div>

           <style> #title1 {  color:white; }   
         </style>
       
     </section>
         
          <!-- Image-->
     <!--      <div class="l-6 hide-s hide-m">
           <h1> <a id="title1" href="jeux/Memory-Matching-Game/index.html"> Play our Memory Game and earn money </a></h1>  
           

<p><a href="jeux/Memory-Matching-Game/index.html">
<img src="jeux/Puzzle/img/memory.png" alt="Fleles  Memory Game" width="100" height="132">
</a></p>
          </div>-->
     
        
        <!-- SECTION 2 -->

       
        </section>
        
        <!-- SECTION 3 -->
        <section class="grid margin">
         
        </section>
                 
      </main>
      
       
      <!-- FOOTER -->
        <footer class="grid">
        <!-- Footer - top -->
        <!-- Image-->
        <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(img/img-04.jpg)"></div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Who We Are?</h2>
           <p>This brand new startup was build by  professional  designers and developers </p>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Where We Are?</h2>
           <p> Startup Located in Tunisia  </p>
           <img class="full-img" src="img/map.svg" alt=""/>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Contact Us</h2>
           <p><b class="text-primary margin-right-10"></b></p>
           <p><b class="text-primary margin-right-10">Flayestn@gmail.com</b> <a class="text-primary-hover" href="">email</a></p>
           <p><b class="text-primary margin-right-10">Darkyxxx@protonmail.com</b> <a class="text-primary-hover" href="">email </a></p>
        </div>
        
        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
          <p class="text-size-12">Copyright 2022, Flayes team</p>
          <p class="text-size-12">Tous les droits reservé.</p>
          <p><a class="text-size-12 text-primary-hover" href="" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
        </div>
      </footer>                                                                    
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>

   </body>
</html>