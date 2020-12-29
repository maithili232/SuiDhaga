<?php

$pagename="Login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=stylelogin.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";
include ("header1.php"); //include header layout file
echo'
    
    <section2>
        <div class="container1">
            <div class="cont">
                <form action="signinval.php" method="POST">
                <div class="form sign-in">
                    <h2>
                        <b>Sign In</b>
                    </h2>
                    <label>
                        <span>
                            <b>Email Address</b>
                        </span>
                        <input type="email" name="email" placeholder="Enter email address" required>
                    </label>
                    <label>
                        <span>
                            <b>Password</b>
                        </span>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </label>
                    <button class="submit" type="submit">Sign In</button>
                    <p class="forgot-pass">
                        Forgot Password?
                    </p>
                    <p class="forgot-pass">
                        New Here? <a href="signup.php">SIGN UP</a>
                    </p>
                    <div class="social-media">
                        <ul>
                            <li><img src=" images/facebook.png"></li>
                            <li><img src=" images/twitter.png"></li>
                            <li><img src=" images/instagram-sketched.png"></li>
                            <li><img src=" images/linkedin.png"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section2>';

echo "</body>";

include ("footer1.php"); 
?>
