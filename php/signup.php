<?php
if((isset($_POST['fname']) &&
   isset($_POST['lname']) &&
   isset($_POST['gend']) &&
   isset($_POST['pno'])) &&
   isset($_POST['hb']) &&
   isset($_POST['DOB']) &&
   isset($_POST['email']) &&
   isset($_POST['uname']) &&
   isset($_POST['pp']) &&
   isset($_POST['pw'])){
    include '../db.conn.php';
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gend=$_POST['gend'];
    $pno=$_POST['pno'];
    $hb=$_POST['hb'];
    $DOB=$_POST['DOB'];
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pw=$_POST['pw'];
    $pp=$_POST['pp'];
    $data='name='.$fname.'&username='.$uname;
    if(empty($fname)){
        $er = "First Name is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($lname)){
        $er = "last Name is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($gend)){
        $er = "Gender Name is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($hb)){
        $er = "Hobbies is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($DOB)){
        $er = "DOB is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($email)){
        $er = "Email is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($uname)){
        $er = "Username is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else if(empty($pw)){
        $er = "password is required";
        header("Location: ../signup.php?error=$er");
        exit;
    }
    else{
        $sql ="SELECT Username FROM users WHERE Username=?";
        // $rowCount=$sql->rowCount();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stmt->rowCount()>0){
            $er ="The username ($uname) is taken";
            header("Location: ../signup.php?error=$er");
            exit;
        }else{
            if(isset($_FILES['pp'])){
                $img_name = $_FILES['pp']['name'];
                $tmp_name = $_FILES['pp']['tmp_name'];
                $error = $_FILES['pp']['error'];
                if($error===0){
                    $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                    $img_ex=strtolower($img_ex);
                    $allowed = array("jpg","jpeg","png");
                    if(in_array($img_ex, $allowed)){
                        $newname=$uname. '.'.$img_ex;
                        $img_upload_path='../uploads/'.$newname;
                        move_uploaded_file($tmp_name, $img_upload_path);
                    }else{
                        $er="Unsupported file- type";
                        header("Location: ../signup.php?error=$er");
                        exit;
                    }
                }else{
                    $er= "Unknown Error";
                    header("Location: ../signup.php?error=$er");
                    exit;
                }  
            }
            $pw=password_hash($pw,PASSWORD_DEFAULT);
            if(isset($newname)){
                $sql="INSERT INTO users(First_name,Last_name,Gender,Phone_No,Hobbies,DOB,Email,Username,Password,profile_picture) values(?,?,?,?,?,?,?,?,?,?)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$fname,$lname,$gend,$pno,$hb,$DOB,$email,$uname,$pw,$pp]);
            }else{
                $sql="INSERT INTO users(First_name,Last_name,Gender,Phone_No,Hobbies,DOB,Email,Username,Password,profile_picture) values(?,?,?,?,?,?,?,?,?,?)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$fname,$lname,$gend,$pno,$hb,$DOB,$email,$uname,$pw,$pp]);

            }
        $sm = "Success";
        header("Location: ../login.php?success=$sm");
        exit;
    }
    
}}
// else{
//     header("Location: ../signup.php?error=$er");
//     exit;
// }