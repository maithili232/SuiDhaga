<?php
include "sui.php";
include "header1.php";
if (isset($_SESSION["userid"])) {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $message = $_POST['message'];
    $user_id=$_SESSION["userid"];   

	$sql = "INSERT INTO `contact` 
	(`user_id`,`first_name`,`last_name`,`email`,`number`, 
	`message`) 
	VALUES ('$user_id','$first_name','$last_name','$email', 
    '$number', '$message')";


    if(mysqli_query($con,$sql)){
        echo "<div class='box'>
              <div class='text'>
                <h4>Thank you for contacting us!</h4>
                <h4>We will get in touch with you shortly.</h4>
              </div>
              <a href='main.php'>Back to home page</a>    
            </div>";

    }else{

        echo(mysqli_error($con));
        
    }
    
}else{
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $message = $_POST['message'];
    

	$sql = "INSERT INTO `contact` 
	(`first_name`,`last_name`,`email`,`number`, 
	`message`) 
	VALUES ('$first_name','$last_name','$email', 
    '$number', '$message')";


    if(mysqli_query($con,$sql)){
        echo "<div class='box'>
              <div class='text'>
                <h4>Thank you for contacting us!</h4>
                <h4>We will get in touch with you shortly.</h4>
              </div>
              <a href='main.php'>Back to home page</a>    
            </div>";

    }else{

        echo(mysqli_error($con));
        
    }
}
	

//include "footer1.php";


?>
<html>
    <style>
        .box
        {
            position: relative;
            left: 420px;
            padding-bottom:20px;
            padding-top: 200px;
            font-family: 'Alegreya Sans SC', sans-serif;
            background-color: #f1e6d2;
            width: 700px;
            height: 400px;
            padding: 50px;
            margin: 20px;
        }
        .text
        {
            
            position: relative;
            padding-top: 80px;
            text-align: center;
            color: black;
        } 

        .box a 
        {
            position: relative;
            left: 230px;
            font-size: 16px;
            color: black;
        }
    </style>
</html>