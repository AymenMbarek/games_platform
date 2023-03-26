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
 ?> <h1 class="text-size-50 text-white text-center center text-uppercase"> <b>Username : </b>
     <style> h1 {color: #FF0000;}</style> <b>  <?php echo $_SESSION["username"] ; ?> </b> </h1> <?php
  ?> <h1 class="text-size-50 text-white text-center center text-uppercase"><b> Points: </b><style> h1 {color: #FF0000;}</style> <?php 
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
     $cpctab[$i]=$row['cpc'];
 

   ?>  <?php endwhile;
 foreach ($cpctab as $i => $value) {
        
   ?> <b>   <?php   echo "   $cpctab[$i]   ";     ?>  </b>       
         <?php      

                                        }
?></h1>
<?php if $cpctab[$i]!<10000 
     {
       echo" tu dois avoir 10000 points pour demander retrait argents" ;
       die();
     } 
   ?>