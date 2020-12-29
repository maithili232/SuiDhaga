<?php
include("sui.php");
$pagename="“Your Login Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("header1.php"); //include header layout file

$email = $_POST['email'];
$password = $_POST['password'];

//echo $email." ".$password;
if(empty($email) || empty($password))
{
	echo "<p><b>Login failed</b></p>";
	echo "<p> Your login form is incomplete<br>
			Make sure you provide all the reqired details<p>";
	echo "<p>Go back to <a href='login.php'>login</a></p>";
}
else
{
	
	$SQL = "select * from `user_info` where `email`='$email'";
	$result = mysqli_query($con,$SQL);
	$data = mysqli_fetch_array($result);
	
	if($data['email'] != $email)
	{
		echo "<p><b>Login failed</b></p>";
		echo "<p> The email you entered was not recognized<p>";
		echo "<p>Go back to <a href='login.php'>login</a></p>";
	}
	else if($data['password'] != $password)
	{
		echo "<p><b>Login failed</b></p>";
		echo "<p> The password you entered is not valid<p>";
		echo "<p>Go back to <a href='login.php'>login</a></p>";
	}
	
	else
	{
		 $_SESSION['userid'] = $data['user_id'];
		 $_SESSION['fname'] = $data['full_name'];
		 header("location: signinsuc.php");
		 
		
		
	}
	
	
	
}





echo "</body>";
?>