<?php 
  session_start();
  if (!isset($_SESSION['uname'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link rel="icon" href="img/sicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Sign Up</title>

    <style type="text/css" rel="stylesheet">
        body {
            /* overflow-y: hidden; */
            overflow-x: hidden;
            position: absolute;
            background: url("img/Sociogram bg-blur.jpg");
        }
    </style>

</head>

<body>
    <div class="container" style="border-radius: 100px; padding: 10%; ">
    <div class="login">
        <div class="col-4 bg-white border p-4 shadow-sm shadow-lg" style="border-radius: 20px; width: 40%;">
            <form method="post" action="php/signup.php">
                <div class="d-flex justify-content-center p-1" style="font-family: Lobster; font-size: 60px; color: #223C6C;">

                            <h1 id="panel" style="font-size: 60px; overflow: hidden;">
                                Sociogram
                            </h1>
                    <!-- <img class="mb-4" src="img/pictogram.png" alt="" height="45"> -->
                </div>
                <?php if (isset($_GET['error'])) { ?> 
                <div class="alert alert-warning" role="alert">
                    <?php echo htmlspecialchars($_GET['error']);?>
                </div>
                <?php }
                    if(isset($_GET['fname'])){
                        $fname=$_GET['fname'];
                    }
                    else $fname = '';

                    if(isset($_GET['lname'])){
                        $lname=$_GET['lname'];
                    }
                    else $lname = '';

                    if(isset($_GET['gend'])){
                        $gend=$_GET['gend'];
                    }
                    else $gend = '';

                    if(isset($_GET['pno'])){
                        $pno=$_GET['pno'];
                    }
                    else $pno = '';

                    if(isset($_GET['hb'])){
                        $hb=$_GET['hb'];
                    }
                    else $hb = '';

                    if(isset($_GET['DOB'])){
                        $DOB=$_GET['DOB'];
                    }
                    else $DOB = '';
                    if(isset($_GET['email'])){
                        $email=$_GET['email'];
                    }
                    else $email = '';

                    if(isset($_GET['uname'])){
                        $uname=$_GET['uname'];
                    }
                    else $uname = '';

                    if(isset($_GET['pw'])){
                        $pw=$_GET['pw'];
                    }
                    else $pw = '';

                    if(isset($_GET['pp'])){
                        $pw=$_GET['pp'];
                    }
                    else $pp = '';
                ?>
                <h1 class="h5 mb-3 mt-3 fw-normal text-center"><b>Sign Up</b></h1>
                
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" value="<?=$fname?>" class="form-control" name="fname" style="border-radius: 20px;" placeholder="username/email">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" value="<?=$lname?>" class="form-control" name="lname" style="border-radius: 20px;" placeholder="username/email">
                        <label for="floatingInput">Last Name</label>
                    </div>
                </div>
                
                <div class="d-flex gap-3 my-3" style="font-size: 10px 2vw; overflow: hidden;">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gend" id="exampleRadios1"
                            value="M" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gend" id="exampleRadios3"
                            value="F">
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gend" id="exampleRadios2"
                            value="O">
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>

                        
                    </div>
                    
                
            
            </div>

                <div class="form-floating mt-1">
                    <input type="int" value="<?=$pno?>" class="form-control" name="pno" style="border-radius: 20px;" placeholder="phone">
                    <label for="floatingInput">Phone No.</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="textarea" value="<?=$hb?>" class="form-control" name="hb" style="border-radius: 20px;" placeholder="hobbies">
                    <label for="floatingInput">Hobbies</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="date" value="<?=$DOB?>" class="form-control" name="DOB" style="border-radius: 20px;" placeholder="dd/mm/yyyy">
                    <label for="floatingInput">Date of Birth</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="email" value="<?=$email?>" class="form-control" name="email" style="border-radius: 20px;" placeholder="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" value="<?=$uname?>"  name="uname" style="border-radius: 20px;" placeholder="email">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control" value="<?=$pw?>" name="pw" style="border-radius: 20px;" id="floatingPassword" placeholder="password">
                    <label for="floatingPassword">Password</label>
                    
                </div>
                <div class="form-floating mt-3">
                    <input type="file" class="form-control" value="<?=$pp?>" name="pp" style="border-radius: 20px;" id="floatingPassword" placeholder="password">
                    <label for="floatingPassword">Profile Picture</label>
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-lg btn mt-3" type="submit" style="border-radius: 20px; background-color: purple; color: white;">Sign Up</button>
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
  	header("Location: home.php");
   	exit;
  }
 ?>
    