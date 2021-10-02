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
	<link rel="stylesheet" href="css/hardStyle.css">
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     
</head>
        

<body>
	
	<header>
        <img class="topLogo" src="images/logo1.png" alt="">
        <nav>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="project.php">Projects</a></li>
                <li><a href="devTeam.php">Dev Team</a></li>
                <li><a href="contactUs.php">Contact US</a></li>
                <li><a class="LoginButton" href="login.php"><button>Sign In</button></a></li>
                <li><a class="LoginButton" href="register.php"><button>Sign Up</button></a></li>
            </ul>
        </nav>
    </header>
	
<!----------Testing pull----------------->

<div class="midbody">

  <div class ="text-container">
		<div class = "text-animation"
			<span class="text-first">Hardware & </span>
			<span class="text-slide">
			<span class="text-second">Robotics</span>
			</span>
		</div>
	</div>
   
  <div class="image-wrapper">
    <?php
      for($i=0;$i<9;$i++){
       echo  "<div class='media'>
                <div class='overlay'></div>
                <img src='https://i.postimg.cc/rsd9NmsW/pic-11.png' alt=''>
                <div class='image-details'>
                  <p>Image 1</p>
                </div>
              </div>";
      }
    ?>
  </div>

</div>
</body>
</html>

