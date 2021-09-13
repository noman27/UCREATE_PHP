<?php
session_start();
    
    include ("connect.php");
    include ("function.php");
    
    //$user_data=check_login($con);
    
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
<!---------------------------------------------->


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/welcome2.png" class="d-block w-100" alt="...">
                <h1 class="welcomeTitle">U-CREATE</h1>
                <P  class="motto">Let the world know your talent</P>
            </div>
            <div class="carousel-item">
                <img src="images/Welcome_Ideas.png" class="d-block w-100" alt="...">
                <h1 class="MidBannerTitle">GET NEW IDEAS AND SHARE IDEAS</h1>
                <a href="#learnIdea2" id="learnIdea1"><button class="learnMore">LEARN MORE</button></a>
            </div>
            <div class="carousel-item">
                <img src="images/skill4.png" class="d-block w-100" alt="...">
                <h1 class="lastTitle1">IMPROVE</h1>
                <h1 class="lastTitle2">YOUR</h1>
                <a href="#impskil2" id="#impskil1"><button class="learnMore">LEARN MORE</button></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="NewIdea" id="learnIdea2" onclick="window.location.hash='learnIdea1';">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="descript">
                        <h3 class="innerTitles">GET NEW IDEAS AND SHARE IDEAS</h3>
                        <p  class="innerDetails">In this platform ,you can demonstrate your project which is the manifastation of your idea.This might someone who
                            need new idea for his/her project. UCREATE is the growing hive of ideas.As you surf through out the 
                            site you will come across various unique projects that feed your brain with ideas.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="descImage">
                        <img src="images/unlockIdea2.png" alt="new ideas">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="improveSkill" id="impskil2" onclick="window.location.hash='impskil1';">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="descript">
                        <h3 class="innerTitles">IMPROVE YOUR SKILL</h3>
                        <p  class="innerDetails">People can visit your project and rate it. The rating will indicate how much unique your project is and
                            how improvment you have to make.You can also communicate with experts who will give you proper direction to improvise your project 
                            and also your skill.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="descImage">
                        <img src="images/skillup2.png" alt="improve skill">
                    </div>
                </div>
            </div>
        </div>
    </div>


<!----------------------------------------------->

    <footer class="footer"> 
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <img class="topLogo" src="images/logoFooter.jpg" alt="">
                </div>
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="About.php">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>follow us</h4>
					<div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
