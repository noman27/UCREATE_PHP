<!DOCTYPE html>
<html>
<head>
    <title>UCREATE-Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet"  type="text/css"  href="css/bootstrap.min.css" >
    <link rel="stylesheet"  type="text/css"  href="css/f_style.css">
    <link rel="stylesheet"  type="text/css"  href="css/style.css">
    <link rel="stylesheet"  type="text/css"  href="css/projectPageStyle.css">
    <link rel="stylesheet"  type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
</head>
<body>
    <header>
    <?php include 'header.php'; ?>
    </header>

    <div class="Midbody">
        <h1 class="titles">PROJECTS</h1>
        <p class="titles">Here is the collection of projects from Software/Hardware development to Arts</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="itemBox">
                        <h5 class="subjectTitle">Software development</h3>
                        <p class="description">Softwares developed in C++,Java,Python,C# and other languages</p>
                        <img src="images/progIcon3.png" alt="coding">
                        <a href="softThumbnill.php"><Button class="clickHere">Click Here</Button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="itemBox">
                        <h5 class="subjectTitle">Hardware and Robotics</h3>
                        <p class="description">Devices and Robots created by talented hardware engineers</p>
                        <img src="images/hardware4.png" alt="roboticsnhard">
                        <Button class="clickHere">Click Here</Button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="itemBox">
                        <h5 class="subjectTitle">Arts</h3>
                        <p class="description">Paintings,sculptures,short stories,novels, comics <br> and <br> other unique creations</p>
                        <img src="images/arts3.png" alt="arts">
                        <Button class="clickHere">Click Here</Button>
                    </div>
                </div>   
            </div>
        </div>
    </div>

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