<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>UCREATE</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
       
<!------------------------------>
    <link rel="stylesheet" href="css/bootstrap.min.css" >   
    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/f_style.css">
	<link rel="stylesheet" type="text/css" href="css/contactStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	
	<!----------------------------------------------------->
	
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
     
</head>

<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
	<!------------------------------------------------------>

	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Phone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Send</button>
			</div>
		</div>
	</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>