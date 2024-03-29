<?php
  session_start();
 ?>
<div class="loading-screen">
    <h1 class="load-logo">SURF</h1>
    <p class="tagline">Destinations made simple</p>
    <img  class="boat" src="./assets/images/sailboat.svg" alt="">
    <p class="loading">Loading...</p>
</div>
<header>
    <div class="scroll-to-top">
        <img src="./assets/images/up.svg" alt="up icon">
        <span>Scroll</span>
    </div>
    <nav>
        <div class="logo">
            <a href="index.php" ><img src="./assets/images/surf.svg" alt="logo" /></a>
        </div>
            <ul class="navlinks">
                <li><a href="explore.php">Explore</a></li>
                <li><a href="feed.php">Feed</a></li>
            
        
        <?php if (isset($_SESSION['uid'])) { ?>
                <li class="mobile-signup"><a href="profile.php">Profile</a></li>
                <li><a href="./includes/logout.inc.php">Logout</a></li>
            </ul>
            <a class="cta" href="profile.php">Profile</a>

        <?php } else { ?>
                <li class="mobile-signup"><a onclick="openSignupForm()">Sign-up</a></li>
                <li><a href="#" onclick="openLoginForm()">Login</a></li>
            </ul>
            <a class="cta" onclick="openSignupForm()">Signup</a>
        <?php }?>


        <div class="hamburger">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
     </nav>
</header>

<?php
if(isset($_GET['error'])){
    $error=$_GET['error'];
    if($error=='wrongpwd'){
        echo "<script>alert('Incorrect Password');</script>";
        $uid=$_GET['uid'];
    }
    else if($error=='mismatchedpwd'){
        echo "<script>alert('Passwords do not match.');</script>";
        $uid=$_GET['uid'];
        $mail=$_GET['mail'];
    }
    else if($error=='uidtaken'){
        echo "<script>alert('Username already exists');</script>";
        $mail=$_GET['mail'];
    }
    else if($error=='nouser'){
        echo "<script>alert('Username does not exist');</script>";
    }
    else if($error=='sqlerror_1'){
        echo "<script>alert('Unknown error. Please try again later.');</script>";
    }
    else if($error=='sqlerror_2'){
        echo "<script>alert('Unknown error. Please try again later.');</script>";
    }
    else if($error=='sqlerror_3'){
        echo "<script>alert('Unknown error. Please try again later.');</script>";
    }
    else if($error=='unknownerror'){
        echo "<script>alert('Unknown error. Please try again later.');</script>";
    }
}

?>


<!-- ****************** LOGIN FORM ******************* -->

<div class="loginwindow">
    <form method="POST" action="./includes/login.inc.php" class="ls-form">
        <div class="close-form" onclick="closeForm()">
            <span class="close-l1"></span>
            <span class="close-l2"></span>
        </div>
        <h1>Login</h1>
       

        <label class="ls-label">
            <input type="text" name="uid" required />
            <div class="ls-label-text">Username/Email</div>
        </label>
        <label class="ls-label">
            <input type="password" name="pwd" required />
            <div class="ls-label-text">Password</div>
        </label>

        <button type="submit" class="btn" name="login-submit">Login</button>
        <p>New to SURF?</p>
        <div type="button" class="secondbtn" onclick="openSignupForm()">Sign-up</div>
    </form>
    </div>
</div>

<!-- ****************** SIGNUP FORM ******************* -->

<div class="signupwindow">
    <form method="POST" action="includes/signup.inc.php" class="ls-form">
        <div class="close-form" onclick="closeForm()">
            <span class="close-l1"></span>
            <span class="close-l2"></span>
        </div>
        <h1>Signup</h1>
       

        <label class="ls-label">
            <input type="text" name="uid"required />
            <div class="ls-label-text">Username</div>
        </label>
        <label class="ls-label">
            <input type="email" name="email" required />
            <div class="ls-label-text">E-mail</div>
        </label>
        <label class="ls-label">
            <input type="password" name="pwd" required />
            <div class="ls-label-text">Password</div>
        </label>
        <label class="ls-label">
            <input type="password" name="conf_pwd" required />
            <div class="ls-label-text">Confirm Password</div>
        </label>

        <button type="submit" class="btn" name="signup-submit">Sign-up</button>    
        <p>Have an account already?</p>
        <div type="submit" class="secondbtn" onclick="openLoginForm()">Login</div>
    </form>
    </div>
</div>