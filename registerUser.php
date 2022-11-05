<?php
session_start();
include("chatdb.php");
include("links.php");

if(isset($_POST["uName"]))
{
    $sql = "INSERT INTO user (user) VALUES('".$_POST["uName"]."')";
    if($conn->query($sql))
    {
        header('Location: chatapp.php');
    }
    else{
        echo "Error occured";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sociogram-chat</title>
        <link rel="icon" href="img/sicon.png">
    </head>
    <body style="background-image:url('img/Sociogram_bg-blur.jpg')">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="text-center">
                    <h2 style="font-family:Lobster; color:purple">Sociogram</h2>
                </div>
                <div class="modal-header">
                    <h4>Register</h4>
                </div>
                <div class="modal-body">
                    <form action="registerUser.php" method="POST">
                        <p>Name</p>
                        <input type="text" name="uName" id="uName" class="form-control">
                        <br>
                        <input type="submit" name="Register" class="btn btn-primary" style="float:right;" value="OK">

                    </form>
                
                </div>
            </div>
        </div>
    </body>
</html>