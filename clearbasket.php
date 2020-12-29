<?php
include("sui.php");
//$pagename="Smart Basket"; 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 
echo "<title>".$pagename."</title>"; 
echo "<body>";
include ("header1.php"); 
//echo "<div class='txt'><h4>".$pagename."</h4></div>"; 

unset($_SESSION['basket']);

echo "<div class='box'><h4>Your basket has been cleared.</h4></div>";

//include ("footer1.php"); 
echo "</body>";
?>
<html>
<style>
.box 
{
    position: relative;
            left: 520px;
            padding-bottom:20px;
            padding-top: 200px;
            font-family: 'Alegreya Sans SC', sans-serif;
            background-color: #f1e6d2;
            width: 500px;
            height: 100px;
            padding: 50px;
            margin: 20px;
}

.box h4
{
    font-family: 'Alegreya Sans SC', sans-serif;
		position: relative;
		left: 60px;
		top: 5px;
}
</style>
</html>