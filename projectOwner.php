<?php 
session_start();
    include 'connect.php';
    include 'function.php';
    if(isset($_SESSION['UserID'])){
        $uid=$_GET['u'];
        $pid=$_GET['p'];

        $Owner_user=profileDataGet($con,$uid);
        $picNbio=profPicandBioGet($con,$uid);

        $name=$Owner_user['Name'];
        $prof=$Owner_user['Profession'];
        $bio=$picNbio['Bio'];
        $profPic=$picNbio['ProfPicLink'];
        $linkz=linkzget($con,$uid);

    }
     else{
        echo "<script>window.location.href='login.php';</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UCREATE</title>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width , initial-scale=1.0">

        <link rel="stylesheet" href="css/bootstrap.min.css" > 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <link rel = "icon"     type = "images/png" href = "images/logo_icon.png">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/projectOwner.css">
    
    </head>
    <body>
        <header>
            <?php include 'header.php' ?>
        </header>
        <div class="container mt-5">
            <h3>PROJECT OWNER CARD</h3>
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card p-3 py-4">
                        <div class="text-center"> <?php echo "<img src=$profPic width='100' class='rounded-circle'>" ?> </div>
                        <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">USER</span>
                            <?php echo "<h5 class='mt-2 mb-0'>$name</h5> <span>$prof</span>" ?>
                            <div class="px-4 mt-1">
                               <?php echo "<p class='fonts'>$bio </p>"; ?>
                            </div>
                            <?php echo "<h5 class='mt-2 mb-0'>Social Links:</h5>"; 
                                  echo "<ul>";
                                  while($row=mysqli_fetch_assoc($linkz)) {
                                    echo "<li><a href='$row[Link]' class='linc'>$row[Link]</a></li>";
                                  }
                                  echo "</ul>";       
                            ?>
                            <ul class="social-list">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-dribbble"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                                <li><i class="fa fa-google"></i></li>
                            </ul>
                            <div class="buttons"> 
                              <?php echo "<a href='product.php?productID=$pid'><button class='btn btn-outline-primary px-4'>Back</button></a>"; ?> 
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>