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
     $i=0;
 while   ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
     $i++;
     $cpctab[0]=$row['cpc'];
 

   ?>  <?php endwhile;
 foreach ($cpctab as $i => $value) {
        
         echo "    $cpctab[0]   <br>";  
                                       
                                        }
?></h1>

<!DOCTYPE html>
<html lang="en-US">
   <head>
     <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <!--   <link rel="icon" href="data:;base64,iVBORw0KGgo="> solve flavicon error -->
      <meta charset="UTF-8">
     <!--  <meta name="viewport" content="width=device-width" /> -->
      <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit=no"/>
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
    	<a target="_blank" class="hide-s" href="" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
      
      
         <main role="main">
            <!-- google adsence -->
             <section>
                 <amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-7854039263524702"
     data-ad-slot="7566467351"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad>
             </section>
             
        <!-- TOP SECTION -->
        <header class="grid">
        	<div class="s-12 padding-2x">
            <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Click To Earn</h1>
            <p class="text-size-20 text-white text-center center text-uppercase"><b>Jouez pour gagner de l'argents</b><br> <b>1 clique = Gain d'argents</b></p>
          </div>
        </header>
  
        

            






            <section class="grid">        
          <div class="l-8 hide-s hide-m" id="a"> 
           <h1> <a class="text-size-20 text-white text-center center text-uppercase" id="title1" href="jeux/penalty/ball.php" ><b>    Shot Game </b>  </a></h1>  
           

<p><a href="jeux/penalty/ball.php">
<img src="jeux/penalty/img/Capture.PNG" alt="Fleles  Puzzle Game"  class="l-6 hide-s hide-m">
</a></p>
        </div> 
</section>
<section>
        <div class="l-8 hide-s hide-m"> 
           <h1> <a class="text-size-20 text-white text-center center text-uppercase" id="title1" href="jeux/darkpuzzle/puzzle.php" ><b>    Puzzle </b>  </a></h1>  
           

<p><a href="jeux/darkpuzzle/puzzle.php">
<img src="jeux/darkpuzzle/Capture.PNG" alt="Flayes  Puzzle Game" class="l-6 hide-s hide-m">
</a></p>
        </div> 
</section>

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
      
      <!-- MAIN 
      <main role="main">-->
        <!-- TOP SECTION -->
     <!--   <section class="grid">
           Main Carousel 
          <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
          	<div class="item background-image" style="background-image:url(img/carousel-01.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Click to Earn website</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">You can earn money by just clicking and playing our games </p>
            </div>
          	<div class="item background-image" style="background-image:url(img/carousel-02.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Inspired by Technologies</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white"> with each click you will earn points .these points are easily converted into cash</p>
            </div>
            <div class="item background-image" style="background-image:url(img/carousel-03.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">your account will be blocked if you are inactive for long periods of time </p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">Earn money by simply clicking</p>
            </div>
          </div>  
        </section>
        -->
        <!-- SECTION 1  
        <section class="grid margin text-center">
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
            <i class="icon-sli-equalizer text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Whole team of experts</h3>
          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Fast payments</h3>
          </a>
          -->
          <!-- Image
          <img class="m-12 l-6 l-row-2 margin-bottom" src="img/img-06.jpg">
          
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
            <i class="icon-sli-diamond text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">make profit of your free time by clicking and easily earning money</h3>
          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
            <i class="icon-sli-share text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">video games collection coming soon</h3>
          </a>
        </section>
        -->
        <!-- SECTION 2 
        <section class="grid section margin-bottom background-dark">
          <h2 class="s-12 l-6 center text-thin text-size-30 text-white text-uppercase margin-bottom-30">Flayes <b>Platform</b></h2>
          <p class="s-12 l-6 center">this new platform was recently founded with the objective of manipulating the "play to earn" mechanism. You can simply play our games and win.</p>
        </section>-->
        
        <!-- SECTION 3 
        <section class="grid margin">--> 
          <!-- Image
          <img class="s-12 m-6 margin-bottom" src="img/img-01.jpg">
        
          <div class="s-12 m-6 padding-2x margin-bottom background-blue">
            <h2 class="text-strong text-size-50 text-line-height-1">flayes will soon  be available in  IOS/ Android<br>Keep the eyes open</h2>
            <ul>
              <li>Available in all platforms</li> 
              <li>Points exchangeability vs. cryptocurrencies</li>
              <li>All copyrights are reserved</li>
              <li>A big community</li>
             
            </ul>
          </div>
        </section>
   -->
        <!-- SECTION 4 
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-40 center text-center">Top <b>References</b></h2>
        <section class="grid margin">
          <a class="s-12 m-6 margin-bottom" href="">
            <img class="full-img" src="img/portfolio/thumb-01.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="">
            <img class="full-img" src="img/portfolio/thumb-02.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="">
            <img class="full-img" src="img/portfolio/thumb-03.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="">
            <img class="full-img" src="img/portfolio/thumb-04.jpg" alt=""/>
          </a>	
        </section>
        -->
        <!-- SECTION 5 
        <section class="grid margin text-center">
          <div class="m-12 l-4 padding-2x background-dark margin-bottom text-right">
            <h3 class="text-strong text-size-25 text-uppercase margin-bottom-10">Flayes Platform</h3>
            <p>Available in all platforms</p>
          </div>
          <a href="/acceuil.php" class="s-12 m-6 l-2 padding vertical-center margin-bottom facebook hover-zoom">
             <i class="icon-sli-social-facebook text-size-60 text-white center"></i>
          </a>
          <a href="acceuil.php" class="s-12 m-6 l-2 padding vertical-center margin-bottom twitter hover-zoom">
            <i class="icon-sli-social-twitter text-size-60 text-white center"></i>
          </a>
          <a href="acceuil.php" class="s-12 m-6 l-2 padding vertical-center margin-bottom youtube hover-zoom">
            <i class="icon-sli-social-youtube text-size-60 text-white center"></i>
          </a>
          <a href="acceuil.php" class="s-12 m-6 l-2 padding vertical-center margin-bottom linkedin hover-zoom">
            <i class="icon-sli-social-linkedin text-size-60 text-white center"></i>
          </a>
        </section>
                -->
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
   <style> h1 {color: #FF0000;}</style>
</html>