<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>

  <section class="header">

    <a href="home.php" class="logo">Lebanon Tours And Travels By Rouba</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">packages</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>

  <div class="heading" style="background:url(bookings.jpg) no-repeat">
    <h1>book now</h1>
  </div>

  <section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
      <div class="inputBox">
        <span>first name :</span>
        <input type="text" placeholder="enter your first name" name="first_name">
      </div>
      <div class="inputBox">
        <span>last name :</span>
        <input type="text" placeholder="enter your last name" name="last_name">
      </div>
      <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
        <span>country :</span>
        <input type="text" placeholder="enter your country" name="country">
      </div>
      <div class="inputBox">
        <span>hotel name :</span>
        <input type="text" placeholder="enter your hotel name" name="hotel">
      </div>
      <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
      </div>
      <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests" min="1" max="30">
      </div>
      <div class="inputBox">
        <span>tour date :</span>
        <input type="date" id="reservationDate" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" name="date">
      </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">
  </section>

  <section class="footer">
    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> packages</a>
        <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i> about us</a>
        <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="tel:+96170220800"><i class="fas fa-phone"></i> +961 70220800 </a>
        <a href="mailto:rouba.hamdar@hotmail.com"><i class="fas fa-envelope"></i> rouba.hamdar@hotmail.com</a>
        <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href ="https://www.facebook.com/lebanonaholic/"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href ="https://www.instagram.com/lebanonaholic/"><i class="fab fa-instagram"></i> Instagram</a>
        <a href ="#https://www.tripadvisor.com/ShowUserReviews-g294005-d13123459-r745308450-Lebanonaholic-Beirut.html">Trip Advisor</a>
        <a href ="https://www.showaround.com/locals/rouba-beirut-lebanon-9583773">ShowAround</a>
      </div>

    </div>

    <div class="credit"> created by <span>rhea hamdar</span> | all rights reserved!</div>
  </section>

  <script src='js\script.js' defer></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>