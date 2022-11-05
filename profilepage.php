<?php
    // session_start();
    // include 'php/signup.php';
    include 'db.conn.php';
     
    // if(isset($uname)){
    //     echo $uname;
    // }
    // else{
    //     echo "not set";
    // }
    $uname=$_GET['user'];
    // echo $uname;
    $sqlfn="SELECT First_Name from users where Username='$uname'";
    $stmtfn=$conn->prepare($sqlfn);
    $stmtfn->execute();
    $datafn=$stmtfn->fetchAll(PDO::FETCH_ASSOC);
    if(isset($datafn))
    {
        $un=$uname;
        $datafn=$datafn[0];
        // print_r($data[0]);
        // echo implode(" ", $datafn);
            
        
    }

    $sqlln="SELECT Last_name from users where Username='$uname'";
    $stmtln=$conn->prepare($sqlln);
    $stmtln->execute();
    $dataln=$stmtln->fetchAll(PDO::FETCH_ASSOC);
    if(isset($dataln))
    {
        $un=$uname;
        $dataln=$dataln[0];
        // print_r($data[0]);
        // echo implode(" ", $dataln);
            
        
    }

    $sqldt="SELECT DOB from users where Username='$uname'";
    $stmtdt=$conn->prepare($sqldt);
    $stmtdt->execute();
    $datadt=$stmtdt->fetchAll(PDO::FETCH_ASSOC);
    if(isset($datadt))
    {
        $un=$uname;
        $datadt=$datadt[0];
        // print_r($data[0]);
        // echo implode(" ", $datadt);
            
        
    }

    $sqlhb="SELECT Hobbies from users where Username='$uname'";
    $stmthb=$conn->prepare($sqlhb);
    $stmthb->execute();
    $datahb=$stmthb->fetchAll(PDO::FETCH_ASSOC);
    if(isset($datahb))
    {
        $un=$uname;
        $datahb=$datahb[0];
        // print_r($data[0]);
        // echo implode(" ", $datadt);
            
        
    }

    $sqlpp="SELECT profile_picture from users where Username='$uname'";
    $stmtpp=$conn->prepare($sqlpp);
    $stmtpp->execute();
    $datapp=$stmtpp->fetchAll(PDO::FETCH_ASSOC);
    if(isset($datapp))
    {
        $un=$uname;
        $datapp=$datapp[0];
        // print_r($datapp);
        // echo implode(" ", $datadt);
            
        
    }
    
    
    
?>
<!DOCTYPE html>
<html lang="!en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script type='text/javascript' src='login.php'></script>
    <link rel="icon" href="img/sicon.png">
    <title>Profile</title>

    <style type="text/css" rel="stylesheet">
        body {
            /* overflow-y: hidden;  */
            overflow-x: hidden;
            /* position: absolute; */
            background: url("img/Sociogram bg-blur.jpg");
        }
    </style>
    
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd; border-radius: 20%;">
        <a class="navbar-brand" style="font-family: Lobster; color: #223C6C; font-size: 40px; padding-left: 5%;">Sociogram</a>
        
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-size: 20px;">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">My Profile</span></a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chatapp.php"><img style="height: 25px; width: 25px;" src="https://icons.getbootstrap.com/assets/icons/chat-text-fill.svg"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="table.php">View other's profile</a>
            </li>
          </ul>
        </div>
        
        <!-- <form class="form" >
            <input name="search" style="font-size: 20px; padding: 3px; margin-top: 2px; border-radius: 10px;" type="search" placeholder="Search" aria-label="Search">
            <button name="search button" class="btn btn-outline-success" style="margin-right: 20px;" type="submit">Search</button>
            <ul class="list-group mvh-50 overflow auto">
                <li class="list-group-item">
                    <a href="profilepage.html">Hello</a>
                </li>
                <li class="list-group-item">
                    <a href="profilepage.html">Hello</a>
                </li>
            </ul>
        </form> -->
    </nav>

    <!--External white box-->
    <div class="container my-3 p-3 bg-white border shadow-lg"
        style=" max-height: 90%; max-width: 90%; border-radius: 20px; align-items: center;">
        <div style="margin: 5%; margin-top: 2%;">

            <!--Profile Picture-->
            <div id="profile pic" style="padding-bottom: 2px;">
                <center>
                    <img class="rounded-circle shadow-lg" style="padding: 2px; border-radius: 100%; height: 15%; width: 15%; align-items: center;" src="data:image/jpg/png;<?php echo($datapp['profile_picture']); ?>" /> 
                </center>
            </div>
            
            <center>
            <div style="padding-top: 25px; font-family: 'Times New Roman', Times, serif; color: #911c81; font-weight: bolder;">
                <h2>
                    
                    <!--Username-->
                    @<span id="username" value=><?php echo $un; ?></span>
                </h2>
            </div>
            </center>

            <center>
                <form class="form-inline" style="padding-bottom: 10px;">
                <h1>

                    <!--Name & Surname-->
                    <span id="name"><?php echo implode("", $datafn);?> </span><span id="surname"><?php echo implode("", $dataln);?></span>
                </h1>
                </form>
            

            <div style="max-width:40%;">

                <!--Date of Birth-->
                <p style="color: #6b686b; font-size: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                    Wish me on: <span id="dob"><?php echo implode(" ", $datadt);?></span>
                </p><br>
                <span style="color: purple; font-family: Lobster; font-size: 20px;">Hobbies: </span>
                
                <!--Hobbies-->
                <span id="hobbies" style="font-family: Lobster; font-size: 20px;"><?php echo implode("", $datahb);?></span>
            </div>
        </center>

        </div>
    </div>



    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        
    </script>
</body>

</html>