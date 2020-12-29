<?php

$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=stylelogin.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";
include ("header1.php"); //include header layout file
echo'
    
    <section2>
        <div class="container1">
            <div class="cont">
                    <form action="signupval.php" method="POST">
                    <div class="form sign-up">
                        <h2><b>Sign up</b></h2>
                        <label>
                            <span><b>Name</b></span>
                            <input type="text" required placeholder="Enter Name" name="fname">
                        </label>
                        <label>
                            <span><b>Email</b></span>
                            <input type="email" required placeholder="Enter email address" name="email">
                        </label>
                        <label>
                            <span><b>Password</b></span>
                            <input type="password" required placeholder="Enter password" name="password" >
                        </label>
                        <label>
                            <span><b>Confirm Password</b></span>
                            <input type="password" required placeholder="Enter password again" name="conPassword" >
                        </label>
                        <p class="forgot-pass">
                            One Of Us? <a href="login.php">LOGIN</a>                       
                        </p>
                        <button type="submit" class="submit">Sign Up Now</button>
                    </div>
                
            </div>
        </div>
    </section2>';

echo "</body>";
include ("footer1.php"); 
?>