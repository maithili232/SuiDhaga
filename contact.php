<?php
include "sui.php";
include "header1.php"; //include header layout file   
?>

<section lass="section">
<?php

$pagename="Contact Us"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=stylecontact.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";

if(isset($_SESSION["userid"]))
{
    $sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[userid]'";
    $query = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);


    echo'
        <section1>
            <form id="contact_form" action="contact_process.php" method="POST" class="was-validated">
            <div class="container">
                <div class="contactinfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span>
                                    <div style="font-size: 26px;" style="text-align: center" style="display: inline-block">
                                    <i class="fa fa-street-view fa-swap opacity  "></i>
                                    </div>
                                </span>
                                <span>

                                    2919 PDPU Road<br>
                                    Raysan 99, Guj <br>
                                    90017
                                </span>
                            </li>
                            <li>
                                <span>
                                    <div style="font-size: 26px;"style="text-align: relative    " style="display: inline-block">
                                        <i class="fa fa-envelope-open  fa-swap opacity "></i>
                                    </div>
                                </span>
                                <span>

                                    suidhaga@gmail.com
                                </span>
                            </li>
                            <li>
                                <span>
                                    <div style="font-size: 2px;" style="text-align: center" style="display: inline-block">
                                        <i class="fa fa-phone-alt fa-swap opacity "></i>
                                    </div>
                                </span>
                                <span>
                                    958-672-2235 | 562-864-5735
                                </span>
                            </li>
                        </ul>
                        <ul class="sci">
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-facebook fa-1x-swap opacity  "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-instagram fa-1x "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;">
                                <i class="fab fa-twitter fa-1x "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-pinterest-p fa-1x fa-swap opacity "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-linkedin-in fa-1x  "></i>
                            </div></li>
        
                        </ul>
                    </div>
                </div>
                <div class="contactForm">
                    <a href="#"></a>
                    <h2>
                        Send A Message
                    </h2>
                    <div class="formBox">
                        
                        <div class="inputBox w50">
                            
                            <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name">
                                                    
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name">
                            
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="email" name="email" required placeholder="Enter your email address">
                            
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="number" name="number" required placeholder="Enter your number">
                            
                        </div>
                        <div class="inputBox w100">
                            <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>
                            
                        </div>
                        <div class="inputBox w100">
                            <input type="Submit" name="Submit" value="Submit" id="demo" ">
                        </div>
                    </div>
                </div>
            </div>
            </form action="">
        </section1>';
}
else
{
    echo'
        <section1>
            <form id="contact_form" action="contact_process.php" method="POST" class="was-validated">
            <div class="container">
                <div class="contactinfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span>
                                    <div style="font-size: 26px;" style="text-align: center" style="display: inline-block">
                                    <i class="fa fa-street-view fa-swap opacity  "></i>
                                    </div>
                                </span>
                                <span>

                                    2919 PDPU Road<br>
                                    Raysan 99, Guj <br>
                                    90017
                                </span>
                            </li>
                            <li>
                                <span>
                                    <div style="font-size: 26px;"style="text-align: relative    " style="display: inline-block">
                                        <i class="fa fa-envelope-open  fa-swap opacity "></i>
                                    </div>
                                </span>
                                <span>

                                    suidhaga@gmail.com
                                </span>
                            </li>
                            <li>
                                <span>
                                    <div style="font-size: 28px;" style="text-align: center" style="display: inline-block">
                                        <i class="fa fa-phone-alt fa-swap opacity "></i>
                                    </div>
                                </span>
                                <span>
                                    958-672-2235 | 562-864-5735
                                </span>
                            </li>
                        </ul>
                        <ul class="sci">
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-facebook fa-1x-swap opacity  "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-instagram fa-1x "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;">
                                <i class="fab fa-twitter fa-1x "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-pinterest-p fa-1x fa-swap opacity "></i>
                            </div></li>
                            <li><a href="#"><div style="font-size: 26px;" style="text-align: relative    " style="display: inline-block">
                                <i class="fab fa-linkedin-in fa-1x  "></i>
                            </div></li>
        
                        </ul>
                    </div>
                </div>
                <div class="contactForm">
                    <a href="#"></a>
                    <h2>
                        Send A Message
                    </h2>
                    <div class="formBox">
                        
                        <div class="inputBox w50">
                            
                            <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name">
                                                    
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name">
                            
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="email" name="email" required placeholder="Enter your email address">
                            
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="number" name="number" required placeholder="Enter your number">
                            
                        </div>
                        <div class="inputBox w100">
                            <textarea id="message" name="message" required placeholder="Write your message here..."></textarea>
                            
                        </div>
                        <div class="inputBox w100">
                            <input type="Submit" name="Submit" value="Submit" id="demo" ">
                        </div>
                    </div>
                </div>
            </div>
            </form action="">
        </section1>';
}
echo "</body>";
?>
    <?php
        // if (isset($_SESSION["userid"])) {

        //     $first_name = $_POST["first_name"];
        //     $last_name = $_POST["last_name"];
        //     $email = $_POST['email'];
        //     $number = $_POST['number'];
        //     $message = $_POST['message'];
        //     $user_id=$_SESSION["userid"];
           
            
            
        //     $sql0="SELECT userid from `users_info`";
        //     $runquery=mysqli_query($con,$sql0);
        //     if (mysqli_num_rows($runquery) == 0) {
        //         echo( mysqli_error($con));
        //         $user_id=1;
        //     }else if (mysqli_num_rows($runquery) > 0) {
        //         $sql2="SELECT MAX(userid) AS max_val from `users_info`";
        //         $runquery1=mysqli_query($con,$sql2);
        //         $row = mysqli_fetch_array($runquery1);
        //         $user_id= $row["max_val"];
        //         $user_id=$user_id+1;
        //         echo( mysqli_error($con));
        //     }
        
        //     $sql = "INSERT INTO `contact` 
        //     (`user_id`,`first_name`,'last_name' ,`email`,`number`, 
        //     `message`) 
        //     VALUES ('$user_id','$first_name','$last_name','$email', 
        //     '$number', '$message')";
        
        
        //     if(mysqli_query($con,$sql)){
        //         echo "Thank you for contacting us";
        
        //     }else{
        
        //         echo(mysqli_error($con));
                
        //     }
            
        // }else{
        //     echo"<script>window.location.href='main.php'</script>";
        // }
            
    ?>
</section>
<?php
include "footer1.php";
?>
