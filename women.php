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
                                    <img src="images/22.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="images/333.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="images/111.jpeg" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-flex justify-content-around">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/60.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="images/80.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="images/2000.jpg" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-around">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/120.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="images/40.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="images/70.jpg" class="card-img-top" alt="...">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>














    <!-- Add icon library -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">







    <div class="container">
        <div class="row">






            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=17">
                            <img class="pic-1" src="images/22.jpg">
                        </a>
                        <span class="product-discount-label">-20%</span>

                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=17">Silver stripped kurti set</a>
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
                        <li><a href="prod.php?u_prod_id=17" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>







            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=18">
                            <img class="pic-1" src="images/333.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=18">Kurti-plazo set</a>
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
                        <li><a href="prod.php?u_prod_id=18" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>





            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=19">
                            <img class="pic-1" src="images/111.jpeg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=19">Patiala short kurti salwar</a>
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
                        <li><a href="prod.php?u_prod_id=19" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=20">
                            <img class="pic-1" src="images/60.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=20">Long white silk Kurti</a>
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
                        <li><a href="prod.php?u_prod_id=20" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=21">
                            <img class="pic-1" src="images/80.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=21">jacket kurti-salwar set</a>
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
                        <li><a href="prod.php?u_prod_id=21" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=22">
                            <img class="pic-1" src="images/2000.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=22">Red Bandhej long kurti</a>
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
                        <li><a href="prod.php?u_prod_id=22" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>




            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=23">
                            <img class="pic-1" src="images/120.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=23">Kurti with yellow shrug</a>
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
                        <li><a href="prod.php?u_prod_id=23" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>







            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=24">
                            <img class="pic-1" src="images/40.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=24">Black kurti with golden shrug set</a>
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
                        <li><a href="prod.php?u_prod_id=24" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=25">
                            <img class="pic-1" src="images/70.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=25">Blouse-plazo with shrug set</a>
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
                        <li><a href="prod.php?u_prod_id=25" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=26">
                            <img class="pic-1" src="images/290.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=26">Teal printed kurti set</a>
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
                        <li><a href="prod.php?u_prod_id=26" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=27">
                            <img class="pic-1" src="images/260.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=27">Designer Grey Kurti set</a>
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
                        <li><a href="prod.php?u_prod_id=27" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=28">
                            <img class="pic-1" src="images/270.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=28">Off-White Lehenga Choli</a>
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
                        <li><a href="prod.php?u_prod_id=28" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=29">
                            <img class="pic-1" src="images/3000.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=29">Peach Palazzo Kurti </a>
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
                        <li><a href="prod.php?u_prod_id=29" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=30">
                            <img class="pic-1" src="images/320.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=30">Printed Kurti With Shrug</a>
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
                        <li><a href="prod.php?u_prod_id=30" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=31">
                            <img class="pic-1" src="images/340.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=31">Punjabi salwar kameez </a>
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
                        <li><a href="prod.php?u_prod_id=31" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="prod.php?u_prod_id=32">
                            <img class="pic-1" src="images/370.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <a href="prod.php?u_prod_id=32">Short Kurta dhoti </a>
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
                        <li><a href="prod.php?u_prod_id=32" class="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="javascript:void();" class="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="javascript:void();" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                         
                    </ul>
                </div>
            </div>
        </div>

    </div>



    <br><br><br>
    </div>

</body>


</html>';
include ("footer1.php"); 
?>




