<?php 
session_start();
	include 'connect.php';
	include 'function.php';

	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST)){
		$id=msgIdGenarate();
		$Name=$_POST['name'];
		$Email=$_POST['email'];
		$Phone=$_POST['phn'];
		$messege=$_POST['massege'];
		$date = date('d/m/Y', time());
		
		$query="INSERT INTO massege(msgID, name, email, phn, messege, date) VALUES ('$id','$Name','$Email','$Phone','$messege','$date')";
		mysqli_query($con,$query);
		
		//echo "<script>window.location.href='contactUs.php?$date';</script>";
	}

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
			<form action="" method="POST">
				<div class="right">
					<h2>Contact Us</h2>
					<input type="text" class="field" name="name"  placeholder="Your Name">
					<input type="text" class="field" name="email" placeholder="Your Email">
					<input type="text" class="field" name="phn"   placeholder="Phone">
					<textarea placeholder="Message"  name="massege" class="field"></textarea>
					<button type="submit" class="btn">Send</button>
				</div>
			</form>
		</div>
	</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>