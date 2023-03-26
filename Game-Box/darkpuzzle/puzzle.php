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

<!DOCTYPE html>
<html lang="en-US">
   <head>
       
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
         <meta http-equiv="refresh" content="900;url=logout.php" /> 
          <script>
        window.addEventListener("scroll", function(){
  console.log('scrolling');
});
window.addEventListener("resize", function(){
 console.log('window resized');
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
      
   </head>
<script >
//  Jeu : Puzzle
//  Auteur : Samir AMGOUNE
// E-mail : ghost6x6@yahoo.fr


//********************************************Initier le puzzle**********************************************************

function init()
{
var html="";
for(var cpt=0;cpt<4;cpt++)
  {
  for(var cmp=0;cmp<4;cmp++)html+="<div id='"+(cpt*4+cmp)+"' style='position:absolute;left:"+(cmp*50)+";top:"+(cpt*50)+";width:48;height:48;background-color:black;' onclick='move(this.id)'></div>";
  }
document.all.cadre.innerHTML+=html;
}

//*****************************************La fonction main*********************************************************15

function start()
{
var tablo=Array(15);
for(var cpt=0;cpt<15;cpt++)tablo[cpt]=0;

var cpt=0;
while(cpt<15)
          {
  var rnd=parseInt(Math.random()*15);
  if(tablo[rnd]==0)
  {
    document.getElementById(cpt).innerHTML="<font size=6 color=green>"+rnd+"</font>";
    tablo[rnd]=1;
    cpt++;
  }
          }//40

}


//*****************************************La fonction pour faire bouger les carreaux**************************************************15

function move(id)
{
var tampon;
if(document.getElementById(id).style.top==document.getElementById(15).style.top)
  {
  if((parseInt(document.getElementById(id).style.left)==parseInt(document.getElementById(15).style.left)+50) |  (parseInt(document.getElementById(id).style.left)==parseInt(document.getElementById(15).style.left)-50))
    {
    tampon=document.getElementById(15).style.left;
    document.getElementById(15).style.left=document.getElementById(id).style.left;
    document.getElementById(id).style.left=tampon;
    }
  }
else if(document.getElementById(id).style.left==document.getElementById(15).style.left)
  {
  if((parseInt(document.getElementById(id).style.top)==parseInt(document.getElementById(15).style.top)+50) |  (parseInt(document.getElementById(id).style.top)==parseInt(document.getElementById(15).style.top)-50))
    {
    tampon=document.getElementById(15).style.top;
    document.getElementById(15).style.top=document.getElementById(id).style.top;
    document.getElementById(id).style.top=tampon;
    }
  }

}

window.addEventListener("scroll", function(){
  console.log('scrolling');
});
<?php $x=0; ?>
window.addEventListener("load", function(){
 var x= <?php echo json_encode($x); ?> ;
 console.log("page loaded x=");
 console.log(x);




});
</script>
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
<!-- cookies -->

  


<body onload="init()" class="background-dark text-white">

<center><a href="javascript:start()">Start</a>
<div id="cadre" style="position:absolute;left=290;top:100;width:200;height:200;background-color:green;"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h4>Clickez sur les cases pour les faire bouger
<br>
<?php
            if(isset($_COOKIE['pid'])){
                echo 'Votre ID de session est le ' .$_COOKIE['pid'];
            }
        ?>

</html>