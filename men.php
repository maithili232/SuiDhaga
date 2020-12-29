<?php
include ("header1.php"); //include header layout file
echo "<link rel=stylesheet type=text/css href=stylemen.css>"; //Call in stylesheet
echo'
<body>
    
          <!--Landing Image-->
    <div class="image-container">
        <div class="image"></div>
        <div class="image-text">
           <h1>New Arrivals</h1>
            </button>
        </div>
    <!--Card Carousel-->
    <div class="card-carousel-container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="images/1014.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/1007.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/1006.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
              </div>
    
              <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="images/1010.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/1003.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/1009.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="images/1007.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/1001.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/1000.png" class="card-img-top" alt="...">
                    </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
    </header>
    <main></main>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- Add icon library -->
<link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">

    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=1">
                            <img class="pic-1" src="images/1000.png">
                        </a>
                        <span class="product-discount-label">-20%</span>
                        
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=1">Printed Nehru Jacket set </a>
                        </h3>
                        <div class="price">&#8377 2500
                            <span>&#8377 3000</span>
                        </div>
                        <div class="Rating">
                            <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked "></span>
                    <span class="far fa-star"></span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=1" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="images/1001.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=2">Beige Maroon Anarkali Sherwani</a>
                        </h3>
                        <div class="price">&#8377 2000</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=2" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=3">
                            <img class="pic-1" src="images/1002.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=3">Black Embossed Bandhgala Set</a>
                        </h3>
                        <div class="price">&#8377 1750</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=3" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            
            
            
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=4">
                            <img class="pic-1" src="images/1003.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=4">Blue Sherwani Set</a>
                        </h3>
                        <div class="price">&#8377 1200</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star "></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=4" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        
        
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=5">
                            <img class="pic-1" src="images/1004.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=5">BlackGold Embroidered Sherwani</a>
                        </h3>
                        <div class="price">&#8377 2000</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=5" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=6">
                            <img class="pic-1" src="images/1005.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=6">Floral Printed Jacket set</a>
                        </h3>
                        <div class="price">&#8377 2500</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=6" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            
            


            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=7">
                            <img class="pic-1" src="images/1006.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=7">Solid Blue Sherwani</a>
                        </h3>
                        <div class="price">&#8377 1500</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=7" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        
            
        
        
        
        
        
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=8">
                            <img class="pic-1" src="images/1007.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=8">Textured fawn kurta</a>
                        </h3>
                        <div class="price">&#8377 3000</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=8" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=9">
                            <img class="pic-1" src="images/1008.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=9">A Eternal Black Sherwani</a>
                        </h3>
                        <div class="price">&#8377 4500</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=9" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=10">
                            <img class="pic-1" src="images/1009.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=10">Black Linen kurta</a>
                        </h3>
                        <div class="price">&#8377 3500</div>
                   
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=10" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        
        
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=11">
                            <img class="pic-1" src="images/1010.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=11">Brown-Beige Kurta with Pockets</a>
                        </h3>
                        <div class="price">&#8377 1300</div>
                   
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=11" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        
        
        
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=12">
                            <img class="pic-1" src="images/1011.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=12">Robe of royalty in beige</a>
                        </h3>
                        <div class="price">&#8377 3500</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=12" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>


            
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=13">
                            <img class="pic-1" src="images/1012.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=13">Classy beige kurta </a>
                        </h3>
                        <div class="price">&#8377 1570</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=13" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=14">
                            <img class="pic-1" src="images/1013.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=14">Embroidered Kurta Set</a>
                        </h3>
                        <div class="price">&#8377 1399</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=14" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            


<div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=15">
                            <img class="pic-1" src="images/1014.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=15">>Maroon Kurta & Gold Harem Pant</a>
                        </h3>
                        <div class="price">&#8377 3000</div>
                   
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=15" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>

  

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=16">
                            <img class="pic-1" src="images/1015.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=16">Black Pathani Kurta Salwar Set</a>
                        </h3>
                        <div class="price">&#8377 2300</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=16" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        
                    </ul>
                </div>
            </div>
  </div>

    </div>


    
    <br><br><br>
</div>
</body>';
include ("footer1.php"); 
?>




