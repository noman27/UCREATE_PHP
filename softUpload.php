<!DOCTYPE html>
<html>
<head>
    <title>UCREATE-Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet"  type="text/css"  href="css/bootstrap.min.css" >
    <link rel="stylesheet"  type="text/css"  href="css/style.css">
	<link rel="stylesheet"  type="text/css"  href="css/softStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet"  type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
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
                <li><a href="#">Dev Team</a></li>
                <li><a href="contactUs.php">Contact US</a></li>
                <li><a class="LoginButton" href="login.php"><button>Sign In</button></a></li>
                <li><a class="LoginButton" href="register.php"><button>Sign Up</button></a></li>
            </ul>
        </nav>
    </header>
	
			
			<div class = "instruction"> <h3> What are you working on?</h3>
			<p>Upload your design. This will also be used as the thumbnail in feeds.<p>
			</div>
			
			
		
		<div class="file__upload">
		<div class="head">
			<p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>			
		</div>
		<form class="midbody">
			<input type="file" id="upload">
			<label for="upload">
				<i class="fa fa-file-text-o fa-3x"></i>
				<p>
					<strong>Drag and drop</strong> files here<br>
					or <span>browse</span> to begin the upload
				</p>
			</label>
		</form>
	</div>
		<div class = "description">
			<div class = "message">
			<textarea rows="6" cols="85" placeholder="  Write what went into this shot,and anything else you would like to mention" class="field"></textarea>
			</div>
		</div>
		
		<div id="outer">
				<div class="inner"><button class="msgBtnBack">Back</button></div>
				<div class="inner"><button type="submit" class="msgBtn" onClick="return false;" >Save</button></div>		
			</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>