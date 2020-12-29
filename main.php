<?php
include ("header1.php"); //include header layout file
echo'
<body>
  <!--Main Section-->
  <main>
    <div class="carousel-container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="2000">
            <img src="./images/S1.jpeg" class="d-block w-100" style="height: 620px;" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="./images/S2.jpeg" class="d-block w-100" style="height: 620px;" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="./images/S3.jpeg" class="d-block w-100" style="height: 620px;" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="./images/S4.jpeg" class="d-block w-100" style="height: 620px;" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--New Products-->
    <div class="cat-title">
      <h1>New Products</h1>
    </div>
    <div class="categories">
      <div class="col-4">
        <img src="./images/wprod1.jpg" width="300px" height="400px">
        <h4>Silk Red Plazzo</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>&#8377 899</p>
      </div>
      <div class="col-4">
        <img src="./images/wprod3.jpg" width="300px" height="400px">
        <h4>Patiala short kurti </h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>&#8377 1499</p>
      </div>
      <div class="col-4">
        <img src="./images/wprod2.jpg" width="300px" height="400px">
        <h4>Kurti-plazo set</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>&#8377 1499</p>
      </div>

      <div class="col-5">
        <img src="./images/mprod1.jpg" width="300px" height="400px">
        <h4>Grey Asymetrical Kurta</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>&#8377 1679</p>
      </div>
      <div class="col-5">
        <img src="./images/mprod2.jpg" width="300px" height="400px">
        <h4>Peach Kurta</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>&#8377 799</p>
      </div>
      <div class="col-5">
        <img src="./images/mprod3.jpg" width="300px" height="400px">
        <h4>Black Urban Kurta</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>&#8377 999</p>
      </div>
      <div class="col-6">
        <img src="./images/aprod1.jpeg" width="300px" height="400px">
        <h4>Diamond Set (Moissanite)</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>&#8377 2499</p>
      </div>
      <div class="col-6">
        <img src="./images/aprod2.jpeg" width="300px" height="400px">
        <h4>Beaded Jutis</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>&#8377 1799</p>
      </div>
      <div class="col-6">
        <img src="./images/aprod3.jpeg" width="300px" height="400px">
        <h4>Gold Jhumkas</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>&#8377 1999</p>
      </div>
      <div class="col-7">
        <img src="./images/sale.jpg" width="1000px" height="400px">
        <div class="centered">
          <h1>New Collection</h1>
          <p2>Summer 2020</p2>
        </div>
      </div>
      <div class="col-8">
        <img src="./images/biba.jpg" width="100px" height="100px">
      </div>
      <div class="col-8">
        <img src="./images/wom.jpg" width="100px" height="100px">
      </div>
      <div class="col-8">
        <img src="./images/fabi.jpg" width="100px" height="100px">
      </div>
      <div class="col-8">
        <img src="./images/soch.png" width="100px" height="100px">
      </div>
      <div class="col-9">
  </main>
  

  </div>
  
</body>';
include ("footer1.php"); 
?>

