<?php
//exchange this page with prod page
include("sui.php");
include("prohead1.php");
$prodid=$_GET['u_prod_id'];


$SQL="select proId, prodName, prodPicNameLarge,prodDescripShort,prodPrice from products where proId=".$prodid;

$exeSQL=mysqli_query($con, $SQL) or die (mysqli_error());
$data=mysqli_fetch_array($exeSQL);
echo'
<body>

<a href=prod.php?u_prod_id='.$data["proId"].'>
    <div class="container1">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src=images/'.$data['prodPicNameLarge'].'>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">

                <h2>'.$data['prodName'].'</h2>
                <p>Product Code: '.$data['proId'].'</p>
                <div class="Rating">
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"> &nbsp; '.$data['prodDescripShort'].'</i>
                </div>
                <p class="price"><b>&#8377;'.$data['prodPrice'].'</b></p>
                <p><i class="text-success fas fa-check-double"></i><strong> Bank Offer</strong> 20% Instant Discount on SBI Credit Cards</p>
                <p><i class="text-success fas fa-check-double"></i><strong> Bank Offer</strong> 5% Unlimited Cashback on Flipkart AxisBank Credit Card</p>
                <p><i class="text-success fas fa-check-double"></i><strong> Bank Offer</strong> Extra 5% oof with Axis Bank Credit Card</p>
                <p><i class="text-success fas fa-check-double"></i><strong> Bank Offer</strong> 20% Instant Discount on payment with <i class="fa fa-google-wallet"></i> google wallet</p>
                <p><b>Availibility: </b>In stock</p>
                <p><b>Condition: </b>New</p>
                <p><b>Brand: </b> BIBA </p>
                <label>Quantity:
                <form action=basket.php method=post>
                <input type="text" name=p_quantity value="1">
                <div class="add"><input type=submit value="ADD TO BASKET"></div>
                <input type=hidden name=h_prodid value='.$prodid.'>
                </form>
                </label>
                <p>
                    <h3 style="font-size: 20px; color: #555;"><i class="fas fa-map-marker-alt" style="color: #555;" aria-hidden="false">&nbsp;</i>Delivery By 23rd July, Tuesday | &nbsp; <span class="text-success">FREE</span></h3>
                </p>
                <p style="color: #555;">
                    <h4>
                        Sizes: &nbsp;
                        <a class="btn btn-dark text-light">Small</a>
                        <a class="btn btn-secondary text-light"> Medium</a>
                        <a class="btn btn-dark text-light">Large</a>
                        <a class="btn btn-secondary text-light"> XL</a>
                        <a class="btn btn-dark text-light">2XL</a>
                        <a class="btn btn-secondary text-light"> 3XL</a>
                    </h4>
                </p>
                <p style="color: #555;">
                    <h4 style="font-weight: 500;">
                        Seller: SUI DHAGA
                    </h4>
                </p>
            </div>
        </div>
    </div>
</body>';
?>
<html>
<style>
    .add input 
    {
        position: relative;
        width: 180px;
        font-family: 'Alegreya Sans SC', sans-serif;
        background: #FFE4B5;
    }
</style>
</html>