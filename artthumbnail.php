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
	<link rel="stylesheet" href="css/artStyle.css">
    <link rel="stylesheet" href="css/indexStyle.css">
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
			<span class="text-first">Arts & </span>
			<span class="text-slide">
			<span class="text-second">Painting</span>
			</span>
		</div>
	</div>
   
  <div class="image-wrapper">
  <?php
      for($i=0;$i<8;$i++){
       echo  "<div class='media'>
                <div class='overlay'></div>
                <img src='https://i.postimg.cc/rsd9NmsW/pic-11.png' alt=''>
                <div class='image-details'>
                  <p>Image $i</p>
                </div>
              </div>";
      }
    ?>
  </div>

</div>
</body>
</html>

