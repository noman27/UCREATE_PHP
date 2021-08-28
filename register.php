<!DOCTYPE html>
<html>
<head>
    <title>UCREATE-Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet"  type="text/css"  href="css/registerStyle.css">
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">User Name</span>
                    <input type="text" placeholder="Enter a username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Profession</span>
                    <input type="text" placeholder="What's your profession?" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="regbtn">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>