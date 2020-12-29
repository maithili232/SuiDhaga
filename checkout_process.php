
<?php

include "sui.php";
include "header1.php";
if (isset($_SESSION["userid"])) {

	$f_name = $_POST["firstname"];
	$email = $_POST['email'];
	$address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip= $_POST['zip'];
    $cardname= $_POST['cardname'];
    $cardnumber= $_POST['cardNumber'];
    $expdate= $_POST['expdate'];
    $cvv= $_POST['cvv'];
    $user_id=$_SESSION["userid"];
    $cardnumberstr=(string)$cardnumber;
   
    
    
    $sql0="SELECT order_id from `orders_info`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $order_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(order_id) AS max_val from `orders_info`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $order_id= $row["max_val"];
        $order_id=$order_id+1;
        echo( mysqli_error($con));
    }

	$sql = "INSERT INTO `orders_info` 
	(`order_id`,`user_id`,`f_name`, `email`,`address`, 
	`city`, `state`, `zip`, `cardname`,`cardnumber`,`expdate`,`cvv`) 
	VALUES ($order_id, '$user_id','$f_name','$email', 
    '$address', '$city', '$state', '$zip','$cardname','$cardnumberstr','$expdate','$cvv')";


    if(mysqli_query($con,$sql)){
        echo "<div class='box'>
                <div class='text'>
                 <h2>Thank You for shopping at Sui Dhaga</h2>
                 <h4>Your order has been placed and is being processed</h4>
                </div>
                <a href='main.php'>Back to home page</a>    
              </div>"
        ;

    }else{

        echo(mysqli_error($con));
        
    }
    
}else{
    echo"<script>window.location.href='main.php'</script>";
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