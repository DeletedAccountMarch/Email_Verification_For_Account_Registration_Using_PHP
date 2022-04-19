<nav>
    <div class="logo">Site Name</div>
    <i class="fa fa-bars icon" class="icon" id="click" onclick="show()"></i>
    <ul id="menu-bar">
        <li class="list"><a class="link" href="welcome.php">Home</a></li>
        <li class="list"><a class="link" href="#">Bug Finder</a></li>
        <li class="list"><a class="link" href="#">Contact</a></li>
        <?php if(session_status()==1){
            
            echo '<li class="list"><a href="login.php" class="link auth-btn left-size">Login</a></li>
            <li class="list"><a href="signup.php" class="link auth-btn2">Register</a></li>';

        }

        else {
            echo '<li class="list"><a href="logout.php" class="link auth-btn left-size">Logout</a></li>';
        }
        
        ?>
        
    </ul>
</nav>