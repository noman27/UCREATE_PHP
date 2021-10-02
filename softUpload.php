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
  	
			<div class = "instruction"> <h3> What are you working on?</h3>
			<p>Upload your design. This will also be used as the thumbnail in feeds.<p>
			</div>
			
			
		
		<div class="file__upload">
			<form class="midbody" action="#" method="POST" enctype="multipart/form-data">
			 <div class="mb-3">
                   <span class="details">Project Title :</span> 
                   <input type="text" placeholder="Title of your project" name="title-name" required>
				     <p> </p>
              </div> 
			  <div class="mb-3">
                   <span class="details">Link :</span>
                   <input type="text" placeholder="Link of your project" name="link-name" required>
				 
              </div>
				<div class="genre">
				<h2>Project type :</h2>
				<ul class="tags">
				  <li><a href="#" class="tag">Software</a></li>
				  <li><a href="#" class="tag">Hardware</a></li>
				  <li><a href="#" class="tag">Arts</a></li>
				</ul>
				</div>
				<div class="description">
				<textarea placeholder="Say something about your project" class="field"></textarea>
				</div>
				<h4>Upload your projects picture</h4>
				<div class="ss-upload"
					<ul>
					<li><input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple></li>
					<li><input type="file" id="image_uploads2" name="image_uploads2" accept=".jpg, .jpeg, .png" multiple></li>
					</ul>
					<a href=""><button type="submit" >Upload</button></a>

				</div>		
			
			</form>
			<a href="index.php"><button >Home</button></a>
		</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>