<?php 
session_start();
	include ("connect.php");
	include ("function.php");	

	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_SESSION['UserID'])){
		$uniquesavename=time().uniqid(rand());
		$destination="projectScreenshots/";
        $destination_file1=$destination.$uniquesavename."_".basename($_FILES['image_uploads']['name']);
		move_uploaded_file($_FILES['image_uploads']['tmp_name'],$destination_file1);

		$uniquesavename=time().uniqid(rand());
		$destination="projectScreenshots/";
        $destination_file2=$destination.$uniquesavename."_".basename($_FILES['image_uploads']['name']);
		move_uploaded_file($_FILES['image_uploads2']['tmp_name'],$destination_file2);

		$uniquesavename=time().uniqid(rand());
		$destination="projectScreenshots/";
        $destination_file3=$destination.$uniquesavename."_".basename($_FILES['image_uploads']['name']);
		move_uploaded_file($_FILES['image_uploads3']['tmp_name'],$destination_file3);

		$radioVal=$_POST["MyRadio"];
		$link=$_POST["linkname"];
		$title=$_POST["titlename"];
		$des=$_POST["desc"];
		$id=$_SESSION["UserID"];
		$projid=projectIdGenarate();

		$query="INSERT INTO project(ProjectID, UserID, Title, Description, ScreenShotOne, ScreenShotTwo, ScreenShotThree, Link, Type) VALUES ('$projid','$id','$title','$des','$destination_file1','$destination_file2','$destination_file3','$link','$radioVal') ";
		mysqli_query($con,$query);
		echo "<script>window.location.href='softUpload.php?$title';</script>";
		
	}
	else{
		
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>UCREATE-Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet"  type="text/css"  href="css/bootstrap.min.css" >
	<link rel="stylesheet"  type="text/css"  href="css/softStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet"  type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
</head>
<body>
  	
			<div class = "instruction">
				 <h3> What are you working on?</h3>
				<p>Upload your design. This will also be used as the thumbnail in feeds.<p>
			</div>
			
			
		
		<div class="file__upload">
			<form class="midbody" action="#" method="POST" enctype="multipart/form-data">
			 <div class="mb-3">
                   			<span class="details">Project Title :</span> 
                  			<input type="text" placeholder="Title of your project" name="titlename" required>
				     		<p> </p>
              </div> 
			  <div class="mb-3">
                   <span class="details">Link :</span>
                   <input type="text" placeholder="Link of your project" name="linkname" required>	 
              </div>
				
			  	<div class="genre">
					<h2>Project type :</h2>
				<!------------------------------------->
				<div class="box">
						<input type="radio" name="select" id="option-1">
						<input type="radio" name="select" id="option-2">
						<input type="radio" name="select" id="option-3">
						
						<label for="option-1" class="option-1">
							
							<div class="dot"></div>
							<div class="text">Software</div>
						</label>
						<label for="option-2" class="option-2">
							
							<div class="dot"></div>
							<div class="text">Hardware</div>
						</label>
						<label for="option-3" class="option-3">
							
							<div class="dot"></div>
							<div class="text">Arts</div>
						</label>
					
    			  </div>
				</div>
				<div class="description">
					<textarea placeholder="Say something about your project" class="field" name="desc"></textarea>
				</div>
					<h4>Upload your projects picture</h4>
					<h5>1280x720px or higher is recommended.<p>ps : The 1st choosen image, will be your thumbnail image</h5> 
				<div class="ss-upload"
					<ul>
					<li><input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple></li>
					<li><input type="file" id="image_uploads2" name="image_uploads2" accept=".jpg, .jpeg, .png" multiple></li>
					<li><input type="file" id="image_uploads3" name="image_uploads3" accept=".jpg, .jpeg, .png" multiple></li>
					</ul>
					<button type="submit" >Upload</button>

				</div>		
			
			</form>
			<a href="index.php"><button >Home</button></a>
		</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>