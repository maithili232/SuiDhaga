<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sui Dhaaga</title>
    <!--Bootstrap CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

  <!--Font CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500;700&display=swap" rel="stylesheet">

  <!--Stylesheet-->
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--header-->
  <header>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/logo.jpeg" width="200px" height="60px">
        </div>
        <div>
          <p1>Ethnic Wear</p1>
        </div>
        <nav2>
          <ul>
            <li><?php
                             include "sui.php";
                            if(isset($_SESSION["userid"])){
                                $sql = "SELECT full_name FROM user_info WHERE user_id='$_SESSION[userid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#"><i class="fa fa-user-o"></i> HI '.$row["full_name"].'</a> &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 
                                  <a href="logout.php">Log out &#8287<i class="fas fa-sign-out-alt"></i></a>
                                  
                                </div>';

                            }else{ 
                                echo "
                                <a href=login.php>Sign In &#8287<i class='fa fa-sign-in-alt'></i></a></li>
                                <a href=signup.php>Sign Up &#8287<i class='fa fa-user-plus'></i></a></li>";
                                
                            }
                                             ?>
                               
                                </li>
          </ul>
        </nav2>
      </div>
    </div>
    <div class="container-fluild p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="main.php">Home&#8287 <i class="fas fa-house-user"></i></a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="women.php">Women &#8287<i class="fas fa-female"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="men.php">Men&#8287<i class="fas fa-male"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accessories.php">Accessories&#8287<i class="fas fa-glasses"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us &#8287<i class="fas fa-id-card"></i></a>
            </li>
          </ul>
          
        </div>
        <div class="">
                    <span>Your Cart</span>
                    <a href="basket.php" style="width:100%;"><i class="fa fa-shopping-cart"></i></a>
										<div class="badge qty"></div>
									</div>
									</div>
      </nav>
    </div>
    

  </header>
    
</body>
</html>