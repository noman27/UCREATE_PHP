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
                <li><a href="devTeam.php">Dev Team</a></li>
                <li><a href="contactUs.php">Contact US</a></li>
                <?php 
                    if(isset($_SESSION['UserID'])){
                        
                        include 'profileOptions.php';
                    }
                    else{
                        echo "<li><a class='LoginButton' href='login.php'><button>Sign In</button></a></li>";
                        echo "<li><a class='LoginButton' href='register.php'><button>Sign Up</button></a></li>";
                    } 
                ?>
            </ul>
        </nav>