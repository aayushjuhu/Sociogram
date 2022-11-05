<?php
require_once 'functions.php';
if(isset($_GET['signup'])){
$response=validate($_POST);

if($response['status']){

}
}
else{
    $_SESSION['error']=$response;
    header("location:../?signup");
}