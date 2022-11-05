<?php
if(isset($_POST['uname']) &&
    isset($_POST['pw'])){
        include '../db.conn.php';
        $uname=$_POST['uname'];
        $pw=$_POST['pw'];
        if(empty($uname)){
            $er = "Username is required";
            header("Location: ../login.php?error=$er");
        
        }
        else if(empty($pw)){
            $er = "password is required";
            header("Location: ../login.php?error=$er");
            
        
        }else{
            $sql="SELECT * FROM users WHERE Username=?";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$uname]);
            if($stmt->rowCount()===1){
                $user=$stmt->fetch();
            if($user['Username']===$uname){
                 if(password_verify($pw,$user['Password'])){
                    $_SESSION['uname'] = $user['Username'];
                    $_SESSION['fname'] = $user['First_Name'];
                    
                    header("Location: ../profilepage.php?user=$uname");
                    
                    // header("Location: ../login.php?error=$er"); 

                 }else{
                    $er="Incorrect Username or Password";
                    header("Location: ../login.php?error=$er"); 
                 }
            }else{
                $er="Incorrect Username or Password";
                header("Location: ../login.php?error=$er"); 
            }
            }
        }
}else{
    header("Location: ../profilepage.php?user=$uname");
    exit;
}
?>