<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>

<!-- Swiper CSS Link -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- Font Awesome CDN Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS File -->   
<link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Header Section Starts -->
<section class="header">

   <a href="home.php" class="logo">Travel to QATAR</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header Section Ends -->

<!-- Home Section Starts -->
<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Travel Around the World</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Discover New Places</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Make Your Tour Worthwhile</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

      </div>

      <!-- Navigation Buttons -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>
<!-- Home Section Ends -->

<!-- Services Section Starts -->
<section class="services">

   <h1 class="heading-title"> Our Services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tour Guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Camp Fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Off Road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping</h3>
      </div>
   </div>

</section>
<!-- Services Section Ends -->

<!-- Home About Section Starts -->
<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>Welcome to our page, your ultimate travel companion! Travel is the most important thing for everyone! We offer adventures & sightseeing tours like Desert Safari, Dhow Cruise, Doha City Tour, Museums Tours, Cultural Heritage Tours around Qatar.</p>
      <a href="about.php" class="btn">Read More</a> 
   </div>

</section>
<!-- Home About Section Ends -->

<!-- Home Packages Section Starts -->
<section class="home-packages">

   <h1 class="heading-title"> Our Packages </h1>
   
   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Amazing Doha</h3>
            <p>Full Day Qatar North and City Tour with Pickup From Doha, Day Trips! 10 Days / 1 Night room only From: $1,400 per adult (price varies by group size).</p> 
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Desert Safari Tour</h3>
            <p>Ride in a 4x4 vehicle, try Sandboarding, and Ride a Camel, and Inland Sea Tour! 6 Days / 5 Nights Rooms & Meals only From: $6,500 per adult (price varies by group size)</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>The Pearl Island</h3>
            <p>02 nights' accommodation, half day city tour, Mediterranean-style marinas, private villas, and boat ride! Golden Ocean Hotel room only From: $2,400</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

   </div>
 
   <div class="load-more"><a href="package.php" class="btn">Load More</a></div>

</section>
<!-- Home Packages Section Ends -->

<!-- Home Offer Section Starts -->
<section class="home-offer">
   <div class="content">
      <h3>Up to 50% Off</h3>
      <p>Only for first top booking members...pick up today!!!!</p>
      <a href="book.php" class="btn">Book Now</a>
   </div>
</section>
<!-- Home Offer Section Ends -->

<!-- Footer Section Starts -->
<section class="footer">

   <div class="box-container">
   
      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>Extra Links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94751508368</a>
         <a href="#"> <i class="fas fa-phone"></i> +94756176202</a>
         <a href="#"> <i class="fas fa-envelope"></i> asmajawfar123@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> Polonnaruwa, Sri Lanka</a>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
         <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn</a>
      </div>

   </div>

   <div class="credit"> Created by <span>Asma Jawfar</span> | All Rights Reserved! </div>

</section>
<!-- Footer Section Ends -->

<!-- Swiper JS Link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom JS File Link --> 
<script src="script.js"></script>
    
</body>
</html>