<?php 
session_start();
    include ("connect.php");
    include ("function.php");

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_SESSION['UserID'])){
        
        $id=$_SESSION['UserID'];
        $fullName   = $_POST['fullName'];
        $userName   = $_POST['userName'];
        $uEmail     = $_POST['userEmail'];
        $password   = md5($_POST['userPass']);
        $cpassword  = md5($_POST['finalPass']) ;
        $profession = $_POST['profession'];
        $Links=$_POST['Links'];
        $Bio=$_POST['Bio'];

        $destination="profilePics/$id";
        $destination_file="";

        if(!empty($fullName)  && !empty($userName) && !empty($uEmail) && !empty($password) && !empty($cpassword) && !empty($profession) && !empty($Links) && !empty($Bio) && !empty($_FILES)){
            
            if($password==$cpassword){
                $destination_file=$destination.basename($_FILES['userimage']['name']);
                move_uploaded_file($_FILES['userimage']['tmp_name'],$destination_file);
                
                $query1="UPDATE profile SET Bio='$Bio',ProfPicLink='$destination_file' WHERE UserID='$id' ";
                $query2="UPDATE userlinks SET Link='$Links' WHERE UserID='$id' ";
                $query3="UPDATE users SET Name='$fullName', UserName='$userName', Email='$uEmail', Password='$cpassword', Profession='$profession' WHERE UserID='$id' ";

                mysqli_query($con,$query1);
                mysqli_query($con,$query2);
                mysqli_query($con,$query3);
                
            }
            else{
                echo "Password mismatch";
            }
        }
        else{

        }

    }

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
        <title>UCREATE | User Profile Edit</title>
        <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/profileEdit.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">Edit Profile</div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="user-details">
                        <div class="mb-3">
                            <span class="details">Full Name</span>
                            <input type="text" placeholder="Enter your name" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">User Name</span>
                            <input type="text" placeholder="Enter a username" name="userName" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">Email</span>
                            <input type="email" placeholder="Enter your email" name="userEmail" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">Profession</span>
                            <input type="text" placeholder="What's your profession?" name="profession" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">Password</span>
                            <input type="password" placeholder="Password"  name="userPass" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">Confirm Password</span>
                            <input type="password" placeholder="Confirm Password" name="finalPass" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">Contact Links</span>
                            <input type="text" placeholder="Social Links" name="Links" required>
                        </div>
                        <div class="mb-3">
                            <span class="details">Bio</span>
                            <textarea name="Bio" id="" placeholder="Say something about yourself"></textarea>
                        </div>
                        <div class="mb-3">
                            <span class="details">Profile Pic</span>
                            <input type="file" name="userimage" id="" class="form-control"></textarea>
                        </div>
                        <div class="Update">
                            <input type="submit" value="Update" id="Updat">
                        </div>
                        
                    </div>
                </form>
                <div class="Cancel">
                    <a href="profile.php"><Button class="cans" id="cancel">Cancel</Button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>