<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/profileOptions.css">
    </head>
    <body>
        <div class="action">
            <div class="profile" onclick="menuToggle()">
                <img src="images/profilepic2.jpg" alt="profilepic">
            </div>
            <div class="menu">
                <h3 class="username">User Name</h3>
                <h3 class="profession">Profession</h3>
                <ul>
                    <li><a href="profile.php">My profile</a></li>
                    <li><a href="">Edit profile</a></li>
                    <li><a href="">Log Out</a></li>
                </ul>
            </div>
        </div>
        <script>
            
            function menuToggle(){
                const toggleMenu = document.querySelector('.menu');
                toggleMenu.classList.toggle('active');
            }

        </script>
    </body>
</html>