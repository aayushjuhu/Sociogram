<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=sociogram","root","");

}catch(PDOException $e){
    echo $e->getMessage();
}
?>