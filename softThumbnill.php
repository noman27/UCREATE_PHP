<?php 
session_start();
  include 'connect.php';
  include 'function.php';

  $type="software";
  
  $rs=allProjectGet($con,$type);

?>
<!DOCTYPE html>
<html>
<head>
    <title>UCREATE</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
       
<!------------------------------>
    <link rel="stylesheet" href="css/bootstrap.min.css" >   
    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/f_style.css">
	   
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     
</head>
        

<body>
	
	<header>
    <?php include 'header.php'; ?>
  </header>
	
<!----------Testing pull----------------->
<div class="midbody">
	
  <div class ="text-container">
		<div class = "text-animation"
			<span class="text-first">Software</span>
			<span class="text-slide">
			<span class="text-second">Hub</span>
			</span>
		</div>
	</div>
  
  <div class="image-wrapper">
    <?php
      while($row=mysqli_fetch_assoc($rs)){
       echo  "<div class='media'>
                <div class='overlay'></div>
                <img src='$row[ScreenShotOne]' alt='Projectthumbnail'>
                <div class='image-details'>
                  <a href='product.php?productID=$row[ProjectID]'><p>Project :$row[Title]</p></a>
                </div>
              </div>";
      }
    ?>
  </div>

</div>
</body>
</html>

