<?php 
session_start();


?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
        <title>UCREATE | User Profile Edit</title>
        <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/profileEdit.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="title">Edit Profile</div>
            <form action="#" method="POST">
            <div class="user-details">
                <div class="mb-3">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="fullName" required>
                </div>
                <div class="mb-3">
                    <span class="details">User Name</span>
                    <input type="text" placeholder="Enter a username" name="userName" required>
                </div>
                <div class="mb-3">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" name="userEmail" required>
                </div>
                <div class="mb-3">
                    <span class="details">Profession</span>
                    <input type="text" placeholder="What's your profession?" name="profession" required>
                </div>
                <div class="mb-3">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Password"  name="userPass" required>
                </div>
                <div class="mb-3">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" name="finalPass" required>
                </div>
                <div class="mb-3">
                    <span class="details">Contact Links</span>
                    <input type="text" placeholder="Social Links" name="Links" required>
                </div>
                <div class="mb-3">
                    <span class="details">Bio</span>
                    <textarea name="Bio" id="" placeholder="Say something about yourself"></textarea>
                </div>
                <div class="mb-3">
                    <span class="details">Profile Pic</span>
                    <input type="file" name="userimage" id="" placeholder="Upload Profile pic"></textarea>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>