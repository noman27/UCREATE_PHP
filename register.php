<?php
    
session_start();
    
include ("connect.php");
include ("function.php");

    //error_reporting(0);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //print_r($_POST);
        $fullName   = $_POST['fullName'];
        $userName   = $_POST['userName'];
        $uEmail     = $_POST['userEmail'];
        $password   = md5($_POST['userPass']);
        $cpassword  = md5($_POST['finalPass']) ;
        $profession = $_POST['profession'];

        if(!empty($fullName)  && !empty($userName) && !empty($uEmail) && !empty($password) && !empty($cpassword) && !empty($profession)){
            if($password==$cpassword){
                //echo "Noice";
                if(uidExists($con,$userName,$uEmail)==false){    
                    $ID=IdGenarate();
                    $prID=profIdGenarate();
                    $LinkID=LinkIdGenarate();

                    $query="INSERT INTO users(UserID, Name, UserName, Email, Password, Profession) VALUES ('$ID','$fullName','$userName','$uEmail','$cpassword','$profession') ";
                    $query2="INSERT INTO profile(ProfileID, UserID, Bio, ProfPicLink) VALUES ('$prID','$ID','Add Bio','Add profile')";
                    $query3="INSERT INTO userlinks(LinkID, UserID, Link) VALUES ('$LinkID','$ID','Add your contact links')";

                    mysqli_query($con,$query);
                    mysqli_query($con,$query2);
                    mysqli_query($con,$query3);

                    //echo "<script>window.location.href='login.php';</script>";

                    
                    //echo '<div> <div id="liveAlertPlaceholder"></div> <div>';

                    //die;
                }
                else{
                    echo "<script>window.location.href='register.php?user-already-exists';</script>";
                }
            }
            else{
                echo "Password mismatch";
            }
        }
        else{
            echo "Fill all the fields of the form";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>UCREATE-Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet"  type="text/css"  href="css/registerStyle.css">
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="fullName" required>
                </div>
                <div class="input-box">
                    <span class="details">User Name</span>
                    <input type="text" placeholder="Enter a username" name="userName" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" name="userEmail" required>
                </div>
                <div class="input-box">
                    <span class="details">Profession</span>
                    <input type="text" placeholder="What's your profession?" name="profession" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Password"  name="userPass" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" name="finalPass" required>
                </div>
            </div>
            <div class="regbtn">
                <input type="submit" value="Register" id="signup">
            </div>
        </form>
        <div class="regbtn">
            <a href="index.php"><input type="submit" value="GO TO HOME PAGE"></a>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>