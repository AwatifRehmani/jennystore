

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JENNY'S STORE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 
<style>@import url(https://fonts.googleapis.com/css?family=Roboto:400,500);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  color: #444;
  font-family: 'Roboto', sans-serif;
  font-size: 1rem;
  line-height: 1.5;
}

.slider {
  height: 100%;
  width: 100%;
  position: relative;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.slider__nav {
  width: 12px;
  height: 12px;
  margin: 2rem 12px;
  border-radius: 50%;
  z-index: 10;
  outline: 6px solid #ccc;
  outline-offset: -6px;
  box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.slider__nav:checked {
  -webkit-animation: check 0.4s linear forwards;
          animation: check 0.4s linear forwards;
}
.slider__nav:checked:nth-of-type(1) ~ .slider__inner {
  left: 0%;
}
.slider__nav:checked:nth-of-type(2) ~ .slider__inner {
  left: -100%;
}
.slider__nav:checked:nth-of-type(3) ~ .slider__inner {
  left: -200%;
}
.slider__nav:checked:nth-of-type(4) ~ .slider__inner {
  left: -300%;
}
.slider__inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 400%;
  height: 100%;
  -webkit-transition: left 0.4s;
  transition: left 0.4s;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
}
.slider__contents {
  height: 100%;
  text-align: center;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-flex-flow: column nowrap;
      -ms-flex-flow: column nowrap;
          flex-flow: column nowrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.slider__image img {
  font-size: 2.7rem;
      color: #2196F3;
      width: 100%;
      height:100%;
}

@-webkit-keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}

@keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}</style>
<!-- styles-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!--carousel-->
  
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/product-style.css">


  
</head>

<body>

  <!-- ======= Header ======= -->
  
  <?php include('shared/header.php');
  ?>

  <!-- ======= Hero Section ======= -->


  ======= Hero Section ======= -->

<div class="slider">
  <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
  <input type="radio" name="slider" title="slide2" class="slider__nav"/>
  <input type="radio" name="slider" title="slide3" class="slider__nav"/>
  <input type="radio" name="slider" title="slide4" class="slider__nav"/>
  <div class="slider__inner">
    <div class="slider__contents"><img src="https://www.jewellerybox.co.uk/cms/media?contentId=990074&variant=800x600" alt=""><i class="slider__image fa fa-codepen"></i>
    </div>
    <div class="slider__contents"><img src="https://magnifissance.com/wp-content/uploads/2022/10/piaget-jewelry-1.jpg" alt=""><i class="slider__image fa fa-newspaper-o"></i>
    </div>
    <div class="slider__contents"><img src="https://i0.wp.com/hudsonvalleystylemagazine.com/wp-content/uploads/2022/03/DSC01757.jpg?ssl=1" alt=""><i class="slider__image fa fa-television"></i>
    </div>
    
    <div class="slider__contents"><img src="https://i0.wp.com/3eyedravenproductions.com/wp-content/uploads/2018/07/cropped-all-rings-arranged1.jpg?resize=2000%2C1200&ssl=1" alt=""><i class="slider__image fa fa-diamond"></i>
    </div>
  </div>
</div>

  <main id="pro" class="ProSec">

<section>
 <div class="wrap">
<div class="tile"> 
  <img src='https://ae01.alicdn.com/kf/Hfa03c0ad0da24eee97e923b662d4ac14j.jpg'/>
  <div class="text">
  <h1>Vaentine Deal</h1>
  <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
  <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
<div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>


<div class="tile"> 
  <img src='https://img.joomcdn.net/e19b9c8b1c110ece610de0f03395fa507b185ad5_original.jpeg'/>
  <div class="text">
  <h1>MOST SELLED</h1>
  <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
  <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
<div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>
  
  <div class="tile"> 
  <img src='https://m.media-amazon.com/images/I/816Fn7BO0pL._AC_UY535_.jpg'/>
  <div class="text">
  <h1>NEW HERE !</h1>
  <h2 class="animate-text">More lorem ipsum bacon ipsum.</h2>
  <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf. Flank sirloin strip steak prosciutto kevin turducken. </p>
<div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div>
</div>
  
  
</div>
</section>
  <!-- ================products section START============== -->
  <main id="pro" class="ProSec">
    <div class="ProCap pt-5 pb-3  text-center">
      <h1 class="text-center pt-5" >Jewlry</h1>
      <p>Elegance In Every Way</p>
    </div>
      <section id="products">
      <div class="card">
        <div class="img">
<img src="https://m.media-amazon.com/images/I/61pb6iVTrSL._UY500_.jpg" alt="">
      </div>
        <div class="text">
          <h3>Exclusive Watch</h3>
          <p>Lorem ipsum dolor sit amet consectetur!</p>
          <h5>$ 125</h5>
          <div class="rating">
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
          </div>
        </div>
        <div class="btn">
          <button>Add To Cart</button>
          <a href="details.php"><button  class="btn2">Details</button></a>
        </div>
      </div>

        
      <div class="card">
        <div class="img">
<img src="https://www.pngitem.com/pimgs/m/478-4785140_dangle-korean-earring-silver-crystal-earrings-hd-png.png" alt="">
      </div>
        <div class="text">
          <h3>Featured Shoe</h3>
          <p>Lorem ipsum dolor sit amet consectetur!</p>
          <h5>$ 250</h5>
          <div class="rating">
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
          </div>
        </div>
        <div class="btn">
          <button>Add To Cart</button>
          <a href="details.php"><button  class="btn2">Details</button></a>
          
        </div>
      </div>
      
      <div class="card">
        <div class="img">
<img src="https://lzd-img-global.slatic.net/g/p/b62d62d9009216d2cab0478bd03d3d4f.jpg_720x720q80.jpg" alt="">
      </div>
        <div class="text">
          <h3>Exclusive t-Shirt</h3>
          <p>Lorem ipsum dolor sit amet consectetur!</p>
          <h5>$ 150</h5>
          <div class="rating">
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
          </div>
        </div>
        <div class="btn">
          <button>Add To Cart</button>
          <a href="details.php"><button  class="btn2">Details</button></a>
        </div>
      </div>
      <div class="card">
        <div class="img">
<img src="https://lzd-img-global.slatic.net/g/p/b62d62d9009216d2cab0478bd03d3d4f.jpg_720x720q80.jpg" alt="">
      </div>
        <div class="text">
          <h3>Exclusive Watch</h3>
          <p>Lorem ipsum dolor sit amet consectetur!</p>
          <h5>$ 125</h5>
          <div class="rating">
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
          </div>
        </div>
        <div class="btn">
          <button>Add To Cart</button>
          <a href="details.php"><button  class="btn2">Details</button></a>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src="https://png.pngitem.com/pimgs/s/31-316575_choker-hd-png-download.png" alt="">
        </div>
        <div class="text">
          <h3>Featured Shoe</h3>
          <p>Lorem ipsum dolor sit amet consectetur!</p>
          <h5>$ 250</h5>
          <div class="rating">
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
          </div>
        </div>
        <div class="btn">
          <button>Add To Cart</button>
          <a href="details.php"><button  class="btn2">Details</button></a>
        </div>
      </div>
      <div class="card">
        <div class="img">
<img src="https://storage.sg.content-cdn.io/cdn-cgi/image/%7Bwidth%7D,%7Bheight%7D,quality=75,format=auto/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/DDR1023_1Y.jpg" alt="">
      </div>
        <div class="text">
          <h3>Exclusive t-Shirt</h3>
          <p>Lorem ipsum dolor sit amet consectetur!</p>
          <h5>$ 150</h5>
          <div class="rating">
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star "></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
            <i style="color: gold;" class="fas fa-star"></i>
          </div>
        </div>
        <div class="btn">
            <button>Add To Cart</button>
            <a href="details.php"><button  class="btn2">Details</button></a>
        </div>
      </div>

        </section>
        
  </main>
  <!-- ================products section END============== -->


  <!-- ======= Footer ======= -->
  <?php
  include('shared/footer.php');
  ?>
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>