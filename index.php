<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Southern Pearl</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <!-- header -->

    <header class="header">

    <img class="logo" src="./images/logo.png" alt="Logo">
<!--<a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel </a>-->

<nav class="navbar">
   <a href="#home">home</a>
   <a href="#about">about</a>
   <a href="#room">room</a>
   <a href="#gallery">gallery</a>
   <a href="#review">review</a>
   <a href="#faq">faq</a>
   <a href="#reservation" class="btn"> book now</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- end -->
    <!--Home-->

    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(./images/home-slide1.jpg) no-repeat;">
                    <div class="content">
                        <h3>It's Where Dreams Come True</h3>
                        <a href="#" class="btn">Visit Our Offer</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide2.jpg) no-repeat;">
                    <div class="content">
                        <h3>It's Where Dreams Come True</h3>
                        <a href="#" class="btn">Visit Our Offer</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide3.jpg) no-repeat;">
                    <div class="content">
                        <h3>It's Where Dreams Come True</h3>
                        <a href="#" class="btn">Visit Our Offer</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide4.jpg) no-repeat;">
                    <div class="content">
                        <h3>It's Where Dreams Come True</h3>
                        <a href="#" class="btn">Visit Our Offer</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

       <!-- end -->

   <!-- availability -->

   <section class="availability">

<form action="">

   <div class="box">
      <p>check in <span>*</span></p>
      <input type="date" class="input">
   </div>

   <div class="box">
      <p>check out <span>*</span></p>
      <input type="date" class="input">
   </div>

   <div class="box">
      <p>adults <span>*</span></p>
      <select name="adults" id="" class="input">
         <option value="1">1 adults</option>
         <option value="2">2 adults</option>
         <option value="3">3 adults</option>
         <option value="4">4 adults</option>
         <option value="5">5 adults</option>
         <option value="6">6 adults</option>
      </select>
   </div>

   <div class="box">
      <p>children <span>*</span></p>
      <select name="child" id="" class="input">
         <option value="1">1 child</option>
         <option value="2">2 child</option>
         <option value="3">3 child</option>
         <option value="4">4 child</option>
         <option value="5">5 child</option>
         <option value="6">6 child</option>
      </select>
   </div>

   <div class="box">
      <p>rooms <span>*</span></p>
      <select name="rooms" id="" class="input">
         <option value="1">1 rooms</option>
         <option value="2">2 rooms</option>
         <option value="3">3 rooms</option>
         <option value="4">4 rooms</option>
         <option value="5">5 rooms</option>
         <option value="6">6 rooms</option>
      </select>
   </div>

   <input type="submit" value="check availability" class="btn">

</form>

</section>

<!-- end -->


<!-- about -->

<section class="about" id="about">

<div class="row">

   <div class="image">
      <img src="images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione nesciunt blanditiis maxime natus repudiandae veritatis alias laboriosam neque cum! Est adipisci assumenda, ad debitis iusto laudantium repellat aliquam dolore voluptates.</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione nesciunt blanditiis maxime natus repudiandae veritatis alias laboriosam neque cum! Est adipisci assumenda, ad debitis iusto laudantium repellat aliquam dolore voluptates.</p>
   </div>

</div>

</section>

<!-- end -->

<!-- room -->

<section class="room" id="room">

<h1 class="heading">our room</h1>

<div class="swiper room-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <span class="price">$15.99/night</span>
            <img src="images/room-1.jpg" alt="">
            <a href="#" class="fas fa-shopping-cart"></a>
         </div>
         <div class="content">
            <h3>exclusive room</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">book now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <span class="price">$15.99/night</span>
            <img src="images/room-2.jpg" alt="">
            <a href="#" class="fas fa-shopping-cart"></a>
         </div>
         <div class="content">
            <h3>exclusive room</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">book now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <span class="price">$15.99/night</span>
            <img src="images/room-3.jpg" alt="">
            <a href="#" class="fas fa-shopping-cart"></a>
         </div>
         <div class="content">
            <h3>exclusive room</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">book now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <span class="price">$15.99/night</span>
            <img src="images/room-4.jpg" alt="">
            <a href="#" class="fas fa-shopping-cart"></a>
         </div>
         <div class="content">
            <h3>exclusive room</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">book now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <span class="price">$15.99/night</span>
            <img src="images/room-5.jpg" alt="">
            <a href="#" class="fas fa-shopping-cart"></a>
         </div>
         <div class="content">
            <h3>exclusive room</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">book now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <span class="price">$15.99/night</span>
            <img src="images/room-6.jpg" alt="">
            <a href="#" class="fas fa-shopping-cart"></a>
         </div>
         <div class="content">
            <h3>exclusive room</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>

<!-- end -->

<!-- services -->

<section class="services">

<div class="box-container">

   <div class="box">
      <img src="images/service1.png" alt="">
      <h3>swimming pool</h3>
   </div>

   <div class="box">
      <img src="images/service2.png" alt="">
      <h3>food & drink</h3>
   </div>

   <div class="box">
      <img src="images/service3.png" alt="">
      <h3>restaurant</h3>
   </div>

   <div class="box">
      <img src="images/service4.png" alt="">
      <h3>fitness</h3>
   </div>

   <div class="box">
      <img src="images/service5.png" alt="">
      <h3>beauty spa</h3>
   </div>

   <div class="box">
      <img src="images/service6.png" alt="">
      <h3>resort beach</h3>
   </div>

</div>

</section>

<!-- end -->

<!-- gallery -->

<section class="gallery" id="gallery">

<h1 class="heading">our gallery</h1>

<div class="swiper gallery-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/gallery1.jpg" alt="">
         <div class="icon">
            <i class="fas fa-magnifying-glass-plus"></i>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gallery2.jpg" alt="">
         <div class="icon">
            <i class="fas fa-magnifying-glass-plus"></i>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gallery3.jpg" alt="">
         <div class="icon">
            <i class="fas fa-magnifying-glass-plus"></i>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gallery4.jpg" alt="">
         <div class="icon">
            <i class="fas fa-magnifying-glass-plus"></i>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gallery5.jpg" alt="">
         <div class="icon">
            <i class="fas fa-magnifying-glass-plus"></i>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gallery6.jpg" alt="">
         <div class="icon">
            <i class="fas fa-magnifying-glass-plus"></i>
         </div>
      </div>

   </div>

</div>

</section>

<!-- end -->

<!-- review -->

<section class="review" id="review">

<div class="swiper review-slider">
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eligendi sint dolorum, magni esse suscipit quia ab quos neque repudiandae omnis quo aliquam dolore temporibus libero vel voluptas velit porro!</p>
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eligendi sint dolorum, magni esse suscipit quia ab quos neque repudiandae omnis quo aliquam dolore temporibus libero vel voluptas velit porro!</p>
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eligendi sint dolorum, magni esse suscipit quia ab quos neque repudiandae omnis quo aliquam dolore temporibus libero vel voluptas velit porro!</p>
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eligendi sint dolorum, magni esse suscipit quia ab quos neque repudiandae omnis quo aliquam dolore temporibus libero vel voluptas velit porro!</p>
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div class="user-info">
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eligendi sint dolorum, magni esse suscipit quia ab quos neque repudiandae omnis quo aliquam dolore temporibus libero vel voluptas velit porro!</p>
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div class="user-info">
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="swiper-slide slide">
         <h2 class="heading">client's review</h2>
         <i class="fas fa-quote-right"></i>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eligendi sint dolorum, magni esse suscipit quia ab quos neque repudiandae omnis quo aliquam dolore temporibus libero vel voluptas velit porro!</p>
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div class="user-info">
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>
   <div class="swiper-pagination"></div>
</div>

</section>

<!-- end -->

<!-- faq -->

<section class="faqs" id="faq">

<h1 class="heading">frequently asked questions</h1>

<div class="row">

   <div class="image">
      <img src="images/FAQs.gif" alt="">
   </div>

   <div class="content">

      <div class="box active">
         <h3>what are payment methods?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
      </div>

      <div class="box">
         <h3>what are payment methods?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
      </div>

      <div class="box">
         <h3>what are payment methods?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
      </div>

      <div class="box">
         <h3>what are payment methods?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
      </div>

      <div class="box">
         <h3>what are payment methods?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
      </div>

   </div>

</div>

</section>

<!-- end -->

<!-- reservation -->

<section class="reservation" id="reservation">

<h1 class="heading">book now</h1>

<form action="">

   <div class="container">

      <div class="box">
         <p>name <span>*</span></p>
         <input type="text" class="input" placeholder="Your Name">
      </div>

      <div class="box">
         <p>email <span>*</span></p>
         <input type="text" class="input" placeholder="Your Email">
      </div>

      <div class="box">
         <p>check in <span>*</span></p>
         <input type="date" class="input">
      </div>

      <div class="box">
         <p>check out <span>*</span></p>
         <input type="date" class="input">
      </div>

      <div class="box">
         <p>adults <span>*</span></p>
         <select name="adults" class="input">
            <option value="1">1 adults</option>
            <option value="2">2 adults</option>
            <option value="3">3 adults</option>
            <option value="4">4 adults</option>
            <option value="5">5 adults</option>
            <option value="6">6 adults</option>
         </select>
      </div>

      <div class="box">
         <p>children <span>*</span></p>
         <select name="child" class="input">
            <option value="1">1 child</option>
            <option value="2">2 child</option>
            <option value="3">3 child</option>
            <option value="4">4 child</option>
            <option value="5">5 child</option>
            <option value="6">6 child</option>
         </select>
      </div>

      <div class="box">
         <p>rooms <span>*</span></p>
         <select name="rooms" class="input">
            <option value="1">1 rooms</option>
            <option value="2">2 rooms</option>
            <option value="3">3 rooms</option>
            <option value="4">4 rooms</option>
            <option value="5">5 rooms</option>
            <option value="6">6 rooms</option>
         </select>
      </div>

      <div class="box">
         <p>room type <span>*</span></p>
         <select name="type" class="input">
            <option value="1">exclusive rooms</option>
            <option value="2">family rooms</option>
            <option value="3">daily rooms</option>
            <option value="4">panoramic rooms</option>
         </select>
      </div>

   </div>

   <input type="submit" value="check availability" class="btn">

</form>

</section>

<!-- end -->

<!-- footer -->

<section class="footer">

<div class="box-container">

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +123-852-4565 </a>
      <a href="#"> <i class="fas fa-phone"></i> +123-852-4565</a>
      <a href="#"> <i class="fas fa-envelope"></i> ninjashub4@gmail.com</a>
      <a href="#"> <i class="fas fa-map"></i> karachi, pakistan</a>
   </div>

   <div class="box">
      <h3>quick links</h3>
      <a href="#"> <i class="fas fa-arrow-right"></i> home</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> about</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> rooms</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> gallery</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> reservation</a>
   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
   </div>

</div>

<div class="share">
   <a href="#" class="fab fa-facebook-f"></a>
   <a href="#" class="fab fa-instagram"></a>
   <a href="#" class="fab fa-twitter"></a>
   <a href="#" class="fab fa-pinterest"></a>
</div>

<div class="credit">&copy; copyright @ 2023 by <span>ninjashub</span></div>

</section>

<!-- end -->





    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>