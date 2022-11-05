<?php
$host="localhost";
$user="root";
$pass="";
$db="sociogram";
$conn=mysqli_connect($host,$user,$pass,$db);
$results=$conn->query("SELECT * FROM users where Username=?");
?>
<?php while($data=$results->fetch_assoc()):?>
<?php $usern=$data['Username'];
print_r($usern);?>
<?php endwhile;?>