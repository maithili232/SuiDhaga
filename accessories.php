<?php
include ("header1.php"); //include header layout file
echo "<link rel=stylesheet type=text/css href=styleacc.css>"; //Call in stylesheet
echo'
<body>
<main>
    <!--Landing Image-->
    <div class="image-container">
        <div class="image"></div>
        <div class="image-text">
           <h1>New Arrivals</h1>
        </div>
    <!--Card Carousel-->
    <div class="card-carousel-container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="images/12.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/2.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
              </div>
    
              <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    <div class="card mt-20" style="width: 18rem;">
                        <img src="images/26.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card mt-20" style="width: 18rem;">
                        <img src="images/18.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card mt-20" style="width: 18rem;">
                        <img src="images/20.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="images/33.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/46.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/11.jpg" class="card-img-top" alt="...">
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

    <!--Cards-->
    <div class="container">
        <div class="row">

            <!--Card1-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=33">
                            <img class="pic-1" src="images/33.jpg">
                        </a>
                        
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=33">Ethnic Band Choker</a>
                        </h3>
                        <div class="price">&#8377 1200</div>
                        <div class="Rating">
                            <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked "></span>
                    <span class="far fa-star"></span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=33" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
        

            <!--Card2-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=34">
                            <img class="pic-1" src="images/72.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=34">Oxidised Gold Plated Jhumka</a>
                        </h3>
                        <div class="price">&#8377 2400</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                    <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=34" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            
            
            
            
            
            <!--Card3-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=35">
                            <img class="pic-1" src="images/100.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=35">Hollow Flower Earrings</a>
                        </h3>
                        <div class="price">&#8377 1550</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=35" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            
            
            <!--card4-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=36">
                            <img class="pic-1" src="images/46.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=36">Temple Jewelry Set</a>
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
                        <li><a href="prod.php?u_prod_id=36" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
            <!--card5-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=37">
                            <img class="pic-1" src="images/2.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=37">Diamond Set (moissanite)</a>
                        </h3>
                        <div class="price">&#8377 2499</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=37" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>

            <!--card6-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=38">
                            <img class="pic-1" src="images/3.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=38">Gold Jhumkas</a>
                        </h3>
                        <div class="price">&#8377 1999</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=38" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            
            

            <!--card7-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=39">
                            <img class="pic-1" src="images/26.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=39">Gold Plated Neck piece for men</a>
                        </h3>
                        <div class="price">&#8377 1800</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=39" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
            
        
        
        
        
            <!--Card8-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=40">
                            <img class="pic-1" src="images/38.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=40">Green Beaded Neck piece for men</a>
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
                        <li><a href="prod.php?u_prod_id=40" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
            <!--card9-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=41">
                            <img class="pic-1" src="images/11.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=41">Beaded Jutis</a>
                        </h3>
                        <div class="price">&#8377 1799</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=41" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--card10-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=42">
                            <img class="pic-1" src="images/12.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=42">Threaded Jaipuri Jutis</a>
                        </h3>
                        <div class="price">&#8377 2500</div>
                   
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=42" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
            <!--card11-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=43">
                            <img class="pic-1" src="images/56.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=43">Zari Embroidery Jutis</a>
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
                        <li><a href="prod.php?u_prod_id=43" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
        
            <!--card12-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=44">
                            <img class="pic-1" src="images/75.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=44">Velvet Maroon Jutis</a>
                        </h3>
                        <div class="price">&#8377 1500</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=44" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>

            <!--card13-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=45">
                            <img class="pic-1" src="images/20.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=45">Pink Floral bag</a>
                        </h3>
                        <div class="price">&#8377 500</div>
                    
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=45" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--card14-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=46">
                            <img class="pic-1" src="images/5.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=46">Beaded Potli bag</a>
                        </h3>
                        <div class="price">&#8377 800</div>
                   
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=46" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
            <!--card15-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=47">
                            <img class="pic-1" src="images/17.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=47">Designer Bag</a>
                        </h3>
                        <div class="price">&#8377 300</div>
                   
                    <div class="Rating">
                        <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="far fa-star"></span>
                <span class="far fa-star"></span>
                    </div>
                </div>
                    <ul class="social">
                        <li><a href="prod.php?u_prod_id=47" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        
        
            <!--card16-->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=48">
                            <img class="pic-1" src="images/18.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=48">Multi-colored Potli Bag</a>
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
                        <li><a href="prod.php?u_prod_id=48" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="" data-tip="add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>   
</main>
    
</body>';
include ("footer1.php"); 
?>


