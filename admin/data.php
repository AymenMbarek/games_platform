<div class="table-responsive">
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
<?php


session_start();


?>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleles";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
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
<td> <input type="button" name="btn" value="Delete user"onclick="delete()"> </td>
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
<script type="text/javascript">
	function delete()
	{



		
	}





</script>