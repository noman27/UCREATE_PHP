<?php
session_start();
	include 'connect.php';
	include 'function.php';

	$det=aboutget($con);
	$head=$det['head'];
	$strat=$det['strat'];
	$mission=$det['mission'];

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
	<link rel="stylesheet" type="text/css" href="css/aboutStyle.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    

     
</head>

<body>
    <header>
    <?php include 'header.php'; ?>
    </header>

    <!----------------------------------test------------------------------------>

	<div class="third">
		<div class="container">			
			<div class="row">						
				<div class="col-md-4">
					<div class="grid">		
						<div class="grid1">			
						<h4 style="font-size:55px; font-weight:500;line-height: 2;text-align: start;">About Us</h4>
						<h4 style="font-size:48px; font-weight:700; text-align: start;">UCREATE</h4>		
						</div>
					</div>
				</div> 		
				<div class="col-md-6">
					<div class="grid">
						<div class="grid1-2">	
						<?php echo "<p style='font-size:24px; font-weight:500;'>$head</p>";?>
						</div>
					</div>
				</div> 					
				<div class="col-md-10">
					<div class="grid">			
						<div class="grid2">
						</div>
					</div>
				</div> 						
				<div class="col-md-10">
					<div class="grid">
						<div class="grid3">	
							<h4 style="font-size:28px; font-weight:700;">Our Strategy</h4>
							<?php echo	"<p style='font-size:19px; font-weight:500;'>$strat</p>";?>
						</div>
					</div>
				</div> 										
				<div class="col-md-10">
					<div class="grid">			
						<div class="grid5">	
							<h4 style="font-size:28px; font-weight:700;">Our Mission</h4>
							<?php echo	"<p style='font-size:19px; font-weight:500;'>$mission</p>"; ?>
						</div>
					</div>
				</div> 							 				
			</div>	
		</div>
	</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>