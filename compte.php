<?php
session_start();
?>
<?php
if(!isset($_SESSION["username"])){
   require_once('header.php');
   
  }else
  
    if($_SESSION["username"]!="Admin")
    { 
    require_once('headerafterlog.php');
    }
  else
    if($_SESSION["username"]=="Admin")
    {
      require_once('headeradmin.php');
    }
  


?>

<head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        	 <meta http-equiv="refresh" content="900;url=logout.php" /> <!-- deconnexion si inactivité -->
</head>
<body class="background-dark text-white"> 
<h1> Espace Client </h1>
<div class="table-responsive">
<table class="table table-bordered background-dark text-white" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr class="background-dark text-white">
<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Prenom</th>
<th>Ville</th>
<th>Telephone</th>
<th>Interets</th>
</tr>
</thead>
<tfoot>

<tr class="background-dark text-white">
<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Prenom</th>
<th>Ville</th>
<th>Telephone</th>
<th>Interets</th>
</tr>
</tfoot>
<?php
$host = "127.0.0.1";
$username = "flayestn_test";
$password = "test@2022@";
$dbname = "flayestn_tunisia";
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
$user=$_SESSION['username'];
$sql = 'SELECT * from users WHERE username = "'.$user.'" ';
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
<th>
<?php echo $row['id']; ?>
</th>
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
</body>