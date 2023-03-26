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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    	 <meta http-equiv="refresh" content="900;url=logout.php" /> <!-- deconnexion si inactivité -->
    <title>Free responsive business website template</title>
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
  	<a target="_blank" class="hide-s" href="../template/bricker-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    
      
      <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <header class="grid">
        	<div class="s-12 padding-2x">
            <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Contact Us</h1>
          </div>
        </header>
        
        <!-- SECTION 1 -->
        <section class="grid margin-bottom-20">
          <div class="m-12 l-7 center">
            <!-- Contact Information-->
            <div class="s-12 padding-2x background-white text-center">                  
              <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase text-dark">Company Address</h2>                
              <p>Tunisia Ariana</p>
              <p>Tunisia governorate</p>             

              <h2 class="text-size-20 margin-top-30 margin-bottom-10 text-strong text-uppercase text-dark">E-mail</h2>                
              <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">Flayestn@gmail.com</a></p>
              <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">darkyxxx@protonmail.com</a></p>               

             <!-- <h2 class="text-size-20 margin-top-30 margin-bottom-10 text-strong text-uppercase text-dark">Phone Numbers</h2>                
              <p>0800 4521 800 50</p>
              <p>0450 5896 625 16</p>
              <p>0798 6546 465 </p>    -->           
            </div>

           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d407924.71932133404!2d9.834026151467443!3d36.98803679853007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fcd34f7cfa81e1%3A0xb04b64d62081e0a7!2sGouvernorat%20de%20l&#39;Ariana!5e0!3m2!1sfr!2stn!4v1652547582319!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>                  

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