<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/scss/style.scss">
</head>
<body>
    <!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="https://www.rafaelalucas.com/dailyui" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->

<div class="daily">
   <p class="daily-title">Daily UI #002</p>
   <div class="buttons"><button class="btn btn-open"><span>Credit Card Checkout</span></button></div>
</div>

<section class="modal open">
   <div class="wrapper">
      <div class="container">
         <span class="icon-close"></span>
         <div class="left">
            <div class="details">
               <article>
                  <h2 class="title">Details</h2>
               </article>
               
                  
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MRQ82?wid=2000&hei=2000&fmt=jpeg&qlt=95&op_usm=0.5%2C0.5&.v=1525909091697" alt=""></div>
        <div class="swiper-slide"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MRQ82_AV5?wid=2000&hei=2000&fmt=jpeg&qlt=95&op_usm=0.5%2C0.5&.v=1525909087146" alt=""></div>
        <div class="swiper-slide"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MRQ82_AV4?wid=2000&hei=2000&fmt=jpeg&qlt=95&op_usm=0.5%2C0.5&.v=1525909084692" alt=""></div>
       <div class="swiper-slide"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MRQ82_AV2?wid=2000&hei=2000&fmt=jpeg&qlt=95&op_usm=0.5%2C0.5&.v=1525909084605" alt=""></div>
      
    </div>
   <div class="navigation">
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
      </div>

</div>

                  
               
               <article>
                  <h3 class="product">The Decade Collection</h3>
                  <p class="type">Defiant Black-Red</p>
                  <p class="quantity">Quantity: 1</p>
                  <p class="total">Total</p>
                  <p class="price">$349.95</p>
               </article>
            </div>
         </div>
         <div class="right">
            <div class="form">
               <h2 class="title">Checkout</h2>
               <form>

                  <div class="input-wrapper">
                     <label for="">Payment Method</label>
                     <select name="cards">
  <option value="visa">Visa</option>
  <option value="mastercard">Mastercard</option>
  <option value="americanexpress">American Express</option>

</select>
                  </div>

                  <div class="input-wrapper">
                     <label for="">Cardholder's name</label>
                     <input id="name" type="text" placeholder="Name">
                  </div>

                  <div class="input-wrapper">
                     <label for="number">Card Number</label>
                     <input id="number" type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
                  </div>

                  <div class="double">
                     <label for="date">Expiration Date</label>

                     <div class="double-input">
                        <div class="input-wrapper">
                           <input id="date" type="number" placeholder="Month">
                        </div>

                        <div class="input-wrapper">
                           <input id="date" type="number" placeholder="Year">
                        </div>
                     </div>
                  </div>

                  <div class="double">
                     <label for="date">Security Code</label>

                     <div class="double-input">
                        <div class="input-wrapper">
                           <input id="date" type="number" placeholder="Code" maxlength="3" minlength="0">
                        </div>

                     </div>
                  </div>
               </form>
               <button class="btn"><span>Confirm Order</span></button>
            </div>
         </div>
      </div>
   </div>
</section>
    
</body>
</html>

<script></script>