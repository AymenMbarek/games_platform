<?php


session_start();
 ?> <h1>Username : <style> h1 {color: #FF0000;}</style> <?php echo $_SESSION["username"] ; ?> </h1> <?php
  ?> <h1>Points: <style> h1 {color: #FF0000;}</style> <?php 
$host = 'localhost';
    $dbname = 'fleles';
    $username = 'root';
    $password = '';   
    $dsn = "mysql:host=$host;dbname=$dbname"; 
        $sql4 = "SELECT cpc FROM users as u ,basepoints as b where u.username=b.username and b.id>0"; 
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
   


    $host = 'localhost';
    $dbname = 'fleles';
    $username = 'root';
    $password = '';   
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

  echo "Le tableau contient ".count($tab_users)." éléments";?> </br> <?php
   foreach ($tab_users as $i => $value) {
        
           echo " Connected User $tab_users[$i]  with   $cpctab[$i]  points  imported from database table basepoints <br/>";  
                                       
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
        
           echo "First table in database: Connected User $firstuser[$j] from basepoints  <br/>";  
                                       
                                        }
?>


<html>
  <head>
    <title>Flappy Bird using JS | by learnWD</title>
  </head>
  <body>
   <h3>flappyBird by LearnWD</h3>
   
   <canvas id="canvas" width="288" height="512"></canvas>
   
   <script src="flappyBird.js"></script>
  </body>
</html>