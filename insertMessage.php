<?php
session_start();
include("chatdb.php");
include("links.php");

$fromUser=$_POST["fromUser"];
$toUser=$_POST["toUser"];
$message=$_POST["message"];
$output="";
$sql="INSERT INTO messages(FromUser, ToUser, message) VALUES('$fromUser','$toUser','$message')";
if($conn->query($sql))
{
    $output.="";
}
else{
    $output.="Error";
}
echo $output;
?>