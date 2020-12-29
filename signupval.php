<?php
include("sui.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("header1.php"); //include header layout file

$isEmpty = empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['conPassword']) ;

if(!$isEmpty)
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conPassword=$_POST['conPassword'];
    
    if($password===$conPassword)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {

            $query="insert into `user_info` (`full_name`,`email`, `password`) 
            VALUES ('$fname','$email','$password')";

            if(mysqli_query($con, $query))
            {
                $_SESSION['userid'] = $data['user_id'];
		 $_SESSION['fname'] = $data['full_name'];
		 header("location: signupsuc.php");
            }
            else
            {
                $errNo = mysqli_errno($con);
                if($errNo == 1062)
                {
                    echo "<p><b>Sign-up failed</b></p>";
                    echo "<p>Email already in use.<br>
                    You may be already registered or try another email address.</p>
                    Go back to <a href='signup.php'>Sign up</a> .";
                }
                else if($errNo==1064)
                {
                    echo "<p><b>Sign-up failed</b></p>";
                    echo "<p>Invalid characters enterd in the form.<br>
                    Make sure you avoid the following characters: apostrophes like['] and backslashes[\].</p>
                    Go back to <a href='signup.php'>Sign up</a> .";
                }
            }
            // $result = mysqli_query($ con, $query) or die (mysqli_error($ con));
            // echo $result;
        }
        else {
            echo "<p><b>Sign-up failed</b></p>";
            echo "<p>Email not vlaid.<br>
            Make sure you enter a correct email address.</p>
            Go back to <a href='signup.php'>Sign up</a> .";
        }
        
    
    }
    else
    {
        echo "<p><b>Sign-up failed</b></p>";
        echo "<p>The 2 passwords are not matching.<br>
            make sure you entered them correctly.</p>
        Go back to <a href='signup.php'>Sign up</a> .";
    }
    
    
    
}
else
{
    echo "<p><b>Sign-up failed</b></p>";
    echo "<p>Your signup form is incomplete and all fields are mandatory<br>
            Make sure you provide all the required details.</p>
        Go back to <a href='signup.php'>Sign up</a> .";
}

echo "</body>";
?>