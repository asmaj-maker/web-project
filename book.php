<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">                                                 
<title>book</title>

<!-- Swiper CSS Link -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- Font Awesome CDN link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- Custom CSS file -->
<link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Header section starts -->
<section class="header">

    <a href="home.php" class="logo">travel</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- Header section ends -->

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- Booking section starts -->
<section class="booking">

   <h2 class="heading-title">book your trip!!!</h2>

   <form action="book_form.php" method="post" class="book_form">

      <div class="flex">
        <div class="inputbox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputbox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputbox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputbox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputbox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputbox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputbox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>
        <div class="inputbox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>
     </div>

     <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>
<!-- Booking section ends -->

<!-- Footer section starts -->
<section class="footer">

   <div class="box-container">
   
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"> </i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"> </i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94751508368</a>
         <a href="#"> <i class="fas fa-phone"></i> +94756176202</a>
         <a href="#"> <i class="fas fa-envelope"></i> asmajawfar123@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> polonnaruwa, sri-lanka</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
      </div>

   </div>

   <div class="credit"> created by <span>Asma Jawfar</span> | all rights reserved! </div>

</section>
<!-- Footer section ends -->

<!-- Swiper JS link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom JS file link --> 
<script src="script.js"></script>

</body>
</html>