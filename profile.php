<?php 
session_start();
    include 'connect.php';
    include 'function.php';
    
    $id='';
    $userName='';
    $profession='';
    $links='';
    $Bio='';
    $profpic='';

    if(isset($_SESSION['UserID'])){
        $id=$_SESSION['UserID'];
        
        $userData=profileDataGet($con,$id);
        $bio=profPicandBioGet($con,$id);
        $linkz=linkzget($con,$id);
        
        $userName=$userData['Name'];
        $profession=$userData['Profession'];
        $links=$linkz['Link'];
        $Bio=$bio['Bio'];
        $profpic=$bio['ProfPicLink'];

        if($profpic=='Add profile'){
            $profpic='images/profilepic2.jpg';
        }
        
        // $userName=$users["UserName"];
        // $profession=$users["Profession"];
        // $Bio=$profils["Bio"];
        // $links=$linkss["Link"];
    }
    else{
        $userName='User Name';
        $profession='Profession';
        $links='https://github.com/';
        $Bio='Say something about you';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>UCREATE | User profile</title>
        <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        <div class="container">
            <div class="profile-header">
                <div class="profile-pic">
                   <?php echo "<img src='$profpic' alt='' height='150px' width='150px'>" ?> 
                </div>
                <div class="profileUsername">
                    <?php echo "<h3>$userName</h3>"; ?>  
                </div>
                <div class="profileProfession">
                    <?php echo "<h5>$profession</h5>"; ?>  
                </div>
            </div>
            
                <div class="body-parent">
                    <div class="profile-options">
                        <div class="profile-links">
                            <h5>LINKS:</h5>
                            <ul>
                                <?php echo "<li><a href='$links' class='linker'>$links</a></li>" ?>
                            </ul>
                        </div>
                        <div class="profile-bio">
                            <h5>BIO:</h5>
                            <?php echo "<p>$Bio</p>" ?>
                        </div>
                        <div class="profile-buttons">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="profileEdit.php"><button>Edit Profile</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href=""><button>ADD PROJECT</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index.php"><button>HOME</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="recent-projects">
                        <h3>Recent Projects</h3> 
                    </div>

                </div>
            
        </div>
    </body>
</html>