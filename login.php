<?php
    session_start();
    if(!isset($_SESSION['uname'])){
        
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link rel="icon" href="img/sicon.png">
    <title>Login</title>

    <style type="text/css" rel="stylesheet">
        body {
                overflow-y: hidden; 
                overflow-x: hidden; 
                position: absolute;
                background: url("img/Sociogram bg-blur.jpg");
            }

    </style>
    <style>
        #panel{
       width: 0ch;
       overflow:hidden;
       white-space: nowrap;
       animation: text 3s  forwards;
       
   }
   @keyframes text{
     0%{
       width: 0ch;
     }
     100%{
       width: 8ch;
     }
   }
   </style>
</head>

<body style="background-image:url('img/Sociogram_bg-blur.jpg')">
    
    <div class="container" style="border-radius: 100px;">
    <div class="login">
        <div class="col-4 bg-white p-4 shadow-sm shadow-lg" style="border-radius: 20px;">
            <form method="post" action="php/login.php">
                <div  class="d-flex justify-content-center p-1" style=" font-family: Lobster; font-size: 60px; color: #223C6C;">
                    <h1 id="panel" style="font-size: 60px; " >Sociogram</h1>
                </div>
                <?php if (isset($_GET['error'])) { ?> 
                <div class="alert alert-warning" role="alert">
                    <?php echo htmlspecialchars($_GET['error']);?>
                </div>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?> 
                <div class="alert alert-warning" role="alert">
                    <?php echo htmlspecialchars($_GET['success']);?>
                </div>
                <?php } ?>

                
                <h1 class="h5 mb-3 mt-3 fw-normal text-center"><b>Log In</b></h1>
                <div class="form-floating">
                    <input type="text" id="un" name="uname" class="form-control" style="border-radius: 20px;" placeholder="username/email">
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="password" name="pw" class="form-control" style="border-radius: 20px;" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                
                <center>
                    <div class="d-grid gap-2">
                <button class="btn btn-lg btn mt-3" type="submit" style="border-radius: 20px; background-color: purple; color: white;">Log In</button>
                </div>
            </center>
                
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    
                    <a href="signup.php" class="text-decoration-none">Create New Account</a>
                    <!-- <a href="#" class="text-decoration-none">Forgot password?</a> -->


                </div>
            </form>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</div>

</body>

</html>
<?php
    }else{
        header("Location: profilepage.php");
        exit;
    }
?>