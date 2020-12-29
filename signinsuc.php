<?php
include("sui.php");
$pagename="“Your Login Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("header1.php"); //include header layout file 

echo "<div class='box'>
     <div class='text'>
     <h2><b>Login Success <i class='far fa-thumbs-up'></i></b></h2>
     <h4>You have successfully logged in.</h4>
     </div>
    <p>Continue shopping at <a href='main.php'>Sui Dhaaga</a></p>   
    </div>";
//include ("footer1.php"); 
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

        .box p 
        {
            position: relative;
            left: 180px;
            font-size: 16px;
            color: black;  
        }

        .box a 
        {
            position: relative;
            left: 5px;
            font-size: 16px;
            color: black;
        }
    </style>
</html>