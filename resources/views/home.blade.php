@extends('layouts.app')
@section('content')

<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <h2>Home Page</h2>
          <p>Very us move be blessed multiply night</p>
        </div>
        <div class="page_link">
          <a href="/">Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- __________________________________________________ -->
<section class="home_banner_area mb-40">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content row">
        <div class="col-lg-12">
          <p class="sub text-uppercase">men Collection</p>
          <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
          <h4>Fowl saw dry which a above together place.</h4>
          <a class="main_btn mt-40" href="#">View Collection</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-money"></i>
            <h3>Money back gurantee</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-truck"></i>
            <h3>Free Delivery</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-support"></i>
            <h3>Alway support</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-blockchain"></i>
            <h3>Secure payment</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<!-- <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Featured product</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="{{asset('img/product/feature-product/f-p-1.jpg')}}" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="{{asset('img/product/feature-product/f-p-2.jpg')}}" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Red women purses</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="{{asset('img/product/feature-product/f-p-3.jpg')}}" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Men stylist Smart Watch</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
<!--================ End Feature Product Area =================-->

<!--================ Offer Area =================-->
<section class="offer_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="offset-lg-4 col-lg-6 text-center">
        <div class="offer_content">
          <h3 class="text-uppercase mb-40">all men’s collection</h3>
          <h2 class="text-uppercase">50% off</h2>
          <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
          <p>Limited Time Offer</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Offer Area =================-->

<!--================ New Product Area =================-->
<section class="new_product_area section_gap_top section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>new products</span></h2>
          <p>Bring called seed first of third give itself now ment</p>
        </div>
      </div>
    </div>


    <?php
    foreach($product as $key => $item) {
    if ($key == 0){
    
   echo  "<div class='row'>";
      echo"<div class='col-lg-6'>";
       echo "<div class='new_product'>";
       echo   "<h5 class='text-uppercase'>collection of 2019</h5>";
        echo " <h3 class='text-uppercase'>".$item->name."</h3>";
        echo " <div class='product-img'>";
        ?>
            <img class='img-fluid' src="{{asset('images/'. $item->image)}}" alt='' />
        <!-- echo    "<img class='img-fluid' src='{{asset('images/'. $item->image)}}' alt='' />"; -->
<?php
         echo "</div>";
        echo " <h4>".$item->price."</h4>";
       echo "</div>";
     echo "</div>";
     }

      else{
      echo"<div class='col-lg-6 mt-5 mt-lg-0'>";
       echo "<div class='row'>";
         echo "<div class='col-lg-6 col-md-6'>";
         echo   "<div class='single-product'>";
             echo "<div class='product-img'>";
             ?>
              <img class='img-fluid' src="{{asset('images/'. $item->image)}}" alt='' />
              <?php
              echo"</div>";
              echo"<div class='product-btm'>";
              echo  "<a href='#' class='d-block'>";
               echo " <h4>".$item->name."</h4>";
               echo "</a>";
               echo "<div class='mt-3'>";
               echo   "<span class='mr-4'>".$item->price."</span>";
                // echo  "<del>". $item->price + 15 ."</del>";
                echo"</div>";
              echo"</div>";
           echo "</div>";
         echo "</div>";
       echo "</div>";
      "</div>";
      }

    }
?>

    </div>
</section>


@endsection('content')