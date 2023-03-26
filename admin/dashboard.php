<?php


$host = "127.0.0.1";
$username = "flayestn_test";
$password = "test@2022@";
$dbname = "flayestn_tunisia";
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
 if(!$conn) {
   echo " erreur connexion a la base";
   die();
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fleyes Admin </title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="../acceuil.php">Fleyes Admin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="../acceuil.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
<a class="nav-link" href="product.php">
<i class="fa fa-check-square"></i>
<span class="nav-link-text">Create Product</span>
</a>
</li>-->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="../register.php">
                        <i class="fa fas fa-user"></i>
                        <span class="nav-link-text">Register Users</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="../acceuil.php">
                        <i class="fa fas fa-user"></i>
                        <span class="nav-link-text">Fleyes Acceuil</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="d-lg-none">Messages
                            <span class="badge badge-pill badge-primary">12 New</span>
                        </span>
                        <span class="indicator text-primary d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty
                                awesome! These messages clip off when they reach the end of the box so they don't
                                overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at
                                3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When
                                you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">Alerts
                            <span class="badge badge-pill badge-warning">6 New</span>
                        </span>
                        <span class="indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">New Alerts:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All
                                systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-danger">
                                <strong>
                                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All
                                systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All
                                systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all alerts</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for...">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
            <!-- Icon Cards-->

            <?php
            
            /*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleles";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqll = "SELECT  * from users WHERE id>0 ";
if (mysqli_query($conn, $sqll))
{
echo "";
}
else
{
echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sqll);
if (mysqli_num_rows($result) > 0)
{
// output data of each row
while($row = mysqli_fetch_assoc($result))
{
?>
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <?php
$j=0;
    $tab_users = array(); 
  //fetching the id from the database
  
    $tab_id[$j]=$row['username'];
    $j++;
  ?>

                            <div class="mr-5"><?php echo count($tab_users); ?> Vistors</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5"><?php echo $row['email'];?> Emails</div>
                        </div>
                        <?php
}
}
else
{
echo '0 results';
}
*/
?>

                        <!-- osbrr khaleha comm hedhi w 
****************************** Delete user *********************************************************************  
 $sql4 = 'DELETE * FROM users where id = "'.$user.'" ';
                            try{      
     $pdo = new PDO($dsn, $username, $password);
     $stmt = $pdo->query($sql4);
if($stmt === false ){
        die("Erreur");
     }
     
        }catch (PDOException $e){
        echo $e->getMessage();
    }
                                console.log($id);
                            } -->
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        <div class="table-responsive">
                        <?php
                        
                            if (isset($_GET['supprimer'])){
                              $user = $_GET['supprimer'];
                                  echo($user); 

                                  $sql4 = "DELETE FROM users where id = '".$user."' ";
                                  
                                  if (mysqli_query($conn, $sql4)) {
                                    echo "Record deleted successfully";
                                   } else {
                                    echo "Error deleting record: " . mysqli_error($conn);
                                   }
                            }
                            if (isset($_GET['points'])){
                              $point = $_GET['points'];
                                  echo($point); 
                                  //$sql5 = "UPDATE `basepoints` SET `cpc` = 'cpc-10000' WHERE `basepoints`.`username` = '".$point."' ";
                                  $sql5='UPDATE basepoints
                                  SET cpc = cpc-10000
                                  WHERE username = "'.$point.'" ';
                                  if (mysqli_query($conn, $sql5)) {
                                    echo "Record updated successfully";
                                   } else {
                                    echo "Error updated record: " . mysqli_error($conn);
                                   }

                                  /* 
                                  testi tawa ala wéhed
                                  9a3din nbadlou fel id cpc bel id user
                                  5aterni 8lotet lazem kif ya3ml inscription tsir f 2 tables 
                                  taw nzala9ha ll client 3asba leh wela nbadlha ba3d hhhhhhh
                                  UPDATE `basepoints` SET `cpc` = '1256' WHERE `basepoints`.`id` = 5;
                                  asma3 la7dha
                                  warini f base anéhou champ ili bech tna9aslou?
                                  hata kif yebda 3andou 1 point tzid tnikou fi 10000?
                                  le ken eli 3ando 10000 wela akther
                                  5ater howa kif besh yousel 10000 besh ya3mel demande retrait argent
                                  el admin besh yne7ihomlo w yb3thlou 3al d17
                                  tawa fhemtek méla hakka bech tkoun s3iba chwaya
                                  mao el $row[cpc]  mana3mlo meme fonction ken kif yabda >=10000
                                  la7dha
                                 mahoush 9a3ed yfasa5 mel base normalement wele?
                                  houni mba3ed ta3teha requet ili tna9es les points */
                            }
                          ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Prenom</th>
                                        <th>Ville</th>
                                        <th>Interets</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Prenom</th>
                                        <th>Ville</th>
                                        <th>Interets</th>
                                    </tr>
                                </tfoot>
                                <?php

$sql = 'SELECT * from users';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { ?>
                                <tbody>
                                    <tr>
                                      
                                            <?php 
                                              Print" <td>".$row['id']."</td>";
                                            ?>
                                            
                                        <td>
                                            <?php echo $row['username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['password']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Prenom']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Ville']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['telephone']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Interets']; ?>
                                        </td>
                                        <td> 
                                          <?php 
                                              /* Print" <input type='button' name='btn' value='Delete user' onclick='delete(".$row['id'].")'>"; */
                                              echo "<a href='dash.php?supprimer=".$row['id']."'>Supprimer</a> </br>";
                                              echo "<a href='dash.php?points=".$row['username']."'>Delete 10K points</a>";
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                               
$count++;
}
} else {
echo '0 results';
}
?>
                            </table>
                            
                        </div>
                        <footer class="sticky-footer">
                            <div class="container">
                                <div class="text-center">
                                    <small>Copyright © Fleyes 2022</small>
                                </div>
                            </div>
                            
                        </footer>
                        <!-- Scroll to Top Button-->
                        <a class="scroll-to-top rounded" href="#page-top">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <!-- Logout Modal-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Select "Logout" below if you are ready to end your current
                                        session.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="../logout.php">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script >
                            function delete($id) {
                              console.log($id);
                                /* $this - > conn - > delete('users', array('id' => $id)); */
                            }




                            </script>
                        <!-- Bootstrap core JavaScript-->
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- Core plugin JavaScript-->
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                        <!-- Page level plugin JavaScript-->
                        <script src="vendor/chart.js/Chart.min.js"></script>
                        <script src="vendor/datatables/jquery.dataTables.js"></script>
                        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin.min.js"></script>
                        <!-- Custom scripts for this page-->
                        <script src="js/sb-admin-datatables.min.js"></script>
                        <script src="js/sb-admin-charts.min.js"></script>
                    </div>
</body>

</html>