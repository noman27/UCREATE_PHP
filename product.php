<?php 
session_start();
	include 'connect.php';
	include 'function.php';
	$prID=$_GET['productID'];
	
	$projectDetails=projectGet($con,$prID);
	$userID=$projectDetails['UserID'];
	$title=$projectDetails['Title'];
	$desc=$projectDetails['Description'];
	$ss1=$projectDetails['ScreenShotOne'];
	$ss2=$projectDetails['ScreenShotTwo'];
	$ss3=$projectDetails['ScreenShotThree'];
	$link=$projectDetails['Link'];
	$date=$projectDetails['Date'];

	$userData=profileDataGet($con,$userID);
	$userName=$userData['Name'];

	$bio=profPicandBioGet($con,$userID);
	$profpic=$bio['ProfPicLink'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>UCREATE-Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css"  href="css/bootstrap.min.css" >
    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
   
	<link rel="stylesheet"  type="text/css"  href="css/style.css">
    <link rel="stylesheet"  type="text/css"  href="css/productStyle.css">
	
    <link rel="stylesheet"  type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>

	<header>
    <?php include 'header.php'; ?>
    </header>

    <div class="container">
		<div class="product-title">
		   	<?php echo "<p>$title</p>"; ?> 
		</div>
		<div class="publishDate">
					<p class="publishedOn">Published On:</p>
					<?php echo "<p class='date'>$date</p>" ?>
		</div>	
		
		<!------------------slider------------------------->
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
				  <?php echo "<img src=$ss1   alt=''>"; ?> 
				</div>

				<div class="item">
				   <?php echo "<img src=$ss2  alt=''>"; ?>
				</div>
				<div class="item">
				   <?php echo "<img src=$ss3  alt=''>"; ?>
				</div>

			</div>
		  
		   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		
		
		<div class="product-discription">
			<p class="idea"> Idea :</p>
			<?php echo "<p class='des'>$desc</p>"; ?>
		</div>
			<div class="product-link">
			<p>Link :</p>
			<?php echo "<a href='$link'><p class='linkDes'>$link</p> </a>"; ?>
			
		</div>
			<a href="#"><button class="pre-btn">Previous</button></a>
		<div class="line"></div>
	
		<div class="user-info">
					<div class="col-md-8">	
						
						<div class="picture">
								<?php echo "<img src='$profpic' height='150px' width='150px' alt='...'>" ?>
						</div>
					
					
                        <?php echo "<a class='linc' href='projectOwner.php?u=$userID&p=$prID'><p class='User-name'>$userName</p></a>"; ?>
						<!------------------------------------------>
							<div class="wrapper">
							<div class="button">
							<div class="icon">
								<i class="fab fa-facebook-f"></i></div>
							<span>Facebook</span>
							</div>
							<div class="button">
							<div class="icon"><i class="fab fa-twitter"></i></div>
							<span>Twitter</span>
							</div>
							<div class="button">
							<div class="icon">
							<div class="gh">
							<i class="fab fa-github"></i>
							</div>
							</div>
							<span>Github</span>
							</div>
							</div>

                        </div> 
					</div>
		</div>

</body>