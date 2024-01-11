<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jeita jbeil and harissa tour</title>

    <link rel="icon" type="image/x-icon" href="../logo.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="lightbox2-2.11.4\dist\css\lightbox.min.css">

    <style>
      

    h1{
      text-align: center;
      padding-top: 20px;
      font-size: 3rem;
      color: var(--main-color);
    }
    .gallery h2{
      font-size: 2.5rem;
      padding-bottom: 20px;
    }

    h3{
      padding: 0;
    }

    .desc h2{
      padding-top: 20px;
      padding-bottom: 0px;
    }

    .desc p{
      font-size: 1.7rem;

    }

    .price{
      padding-top: 0px;
    }


    .price p, .price a {
      margin: 0; 
    }

    .price p{
      font-size: 2rem;
    }

    .price span{
      color: var(--main-color);
      font-size: 2.5rem;
      font-weight: bold;
    }

    .price .btn{
      background-color: var(--main-color);
    }

    .price .btn:hover{
      background-color: var(--black);
    }

    .quick-info {
      padding-top: 0px;
      display: flex;
      justify-content: space-around; 
    }

    .info {
      font-size: 2rem;
      display: flex; 
      align-items: center; 
    }

    .info i {
      margin-right: 5px;
    }

    .information{
      padding-top: 0px;
    }

    .dropbtn {
      background-color: white;
      padding-bottom: 5px;
      font-size: 20px;
      cursor: pointer;
    }

    .dropdown {
      box-sizing: content-box;
      border-top: 1px solid #808080;
      border-bottom: 1px solid #808080;
      padding: 10px 10px; 
    }

    .arrow {
      font-size: 12px; 
      transition: transform 0.3s ease;
    }

    .arrow.upside-down {
      transform: rotate(180deg); 
    }

    .dropbtn .dropdown-text:hover {
      text-decoration: underline;
    }

    .dropdown-content {
      display: none;
    }

    .dropdown-content.show {
      display: block;
    }

    li{
      font-size: 15px;
    }

   .dropdown-content h3{
      font-size: 2rem;
   }

   .dropdown-content p{
      font-size: 1.7rem;
   }

   .line, .line1{
      display: inline;
      margin: 0;
    }

    .dropdown-content i{
      font-size: 1.7rem;
    }

  @media(max-width: 1200px){
    .gallery img{
    height: 250px;
    width: 330px;
    }
  }

  @media(max-width: 1072px){
    .gallery img{
    height: 220px;
    width: 300px;
    }
  }
  
  @media(max-width: 940px){
    .gallery img{
    height: 200px;
    width: 280px;
    }
  }

  @media(max-width: 879px){
    .gallery img{
    height: 180px;
    width: 260px;
    }
  }

  @media(max-width: 820px){
    .gallery img{
    height: 160px;
    width: 240px;
    }
  }

  @media(max-width: 759px){
    .gallery img{
    height: 140px;
    width: 220px;
    }
    .gallery .seemore{
      height: 30px;
      width: 75px;
    }
  }

  @media(max-width: 700px){
    .gallery img{
    height: 120px;
    width: 200px;
    }
    
  }

  @media(max-width: 639px){
    .gallery img{
    height: 150px;
    width: 180px;
    }      
  }
  
  @media(max-width: 580px){
    h1{
      font-size: 2.5rem;
    }
    h2{
      font-size: 2rem;
    }
    .gallery img{
    height: 110px;
    width: 150px;
    }
    
  }

  @media(max-width: 519px){
    .gallery img{
    height: 120px;
    width: 150px;
    }
    
  }

  @media(max-width: 489px){
    .gallery img{
    height: 110px;
    width: 140px;
    }
    .gallery .seemore{
      height: 30px;
      width: 75px;
    }
  }

  @media(max-width: 460px){
    .gallery img{
    height: 110px;
    width: 130px;
    }
  }

  @media(max-width: 426px){
    .gallery img{
    height: 110px;
    width: 120px;
    }
  }

  @media(max-width: 396px){
    .gallery img{
    height: 90px;
    width: 100px;
    }
    .gallery .seemore{
      height: 35px;
      width: 70px;
    }
  }

  @media(max-width: 336px){
    h1{
      font-size: 2rem;
    }
    h2{
      font-size: 1.5rem;
    }
    .gallery img{
    height: 80px;
    width: 90px;
    }
  }

  @media(max-width: 305px){
    .gallery img{
    height: 70px;
    width: 80px;
    }
    .gallery .seemore{
      height: 30px;
      width: 65px;
    }
  }


  .intro {

  padding: 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.cont img {
      max-width: 100%; /* Make the image responsive and fit within the container */
      max-height: 100%; /* Ensure the image doesn't exceed the container height */
      display: block; /* Remove extra space below the image */
      margin: auto; /* Center the image horizontally within the container */
    }

h1 {
  font-size: 2.5rem;
}



.timeline ul {
  padding: 0;
}

.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 6px;
  margin: 0 auto;
  padding-top: 50px;
  background: #b19cd9;
}

.timeline ul li::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: inherit;
  z-index: 1;
}

.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 400px;
  padding: 15px;
  background: #b19cd9;
}

.timeline ul li div::before {
  content: "";
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ul li:nth-child(odd) div {
  left: 45px;
}

.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent var(--main-color) transparent transparent;
}

.timeline ul li:nth-child(even) div {
  left: -439px;
}

.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent var(--main-color);
}

time {
  display: block;
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 8px;
  color: white;
}



.timeline ul li::after {
  transition: background 0.5s ease-in-out;
}

.timeline ul li.in-view::after {
  background: var(--main-color);
}

.timeline ul li div {
  visibility: hidden;
  opacity: 0;
  transition: all 0.5s ease-in-out;
}

.timeline ul li div p{
  color: var(--main-color);
  font-weight: bold;
}

.timeline ul li:nth-child(odd) div {
  transform: translate3d(200px, 0, 0);
}

.timeline ul li:nth-child(even) div {
  transform: translate3d(-200px, 0, 0);
}

.timeline ul li.in-view div {
  transform: none;
  visibility: visible;
  opacity: 1;
}


@media screen and (max-width: 900px) {
  .timeline ul li div {
    width: 250px;
  }
  .timeline ul li:nth-child(even) div {
    left: -289px;
    /*250+45-6*/
  }
}

@media screen and (max-width: 600px) {
  .timeline ul li {
    margin-left: 20px;
  }
  .timeline ul li div {
    width: calc(100vw - 91px);
  }
  .timeline ul li:nth-child(even) div {
    left: 45px;
  }
  .timeline ul li:nth-child(even) div::before {
    left: -15px;
    border-width: 8px 16px 8px 0;
    border-color: transparent #f45b69 transparent transparent;
  }
}


.timeline-clippy ul li::after {
  width: 40px;
  height: 40px;
  border-radius: 0;
}

.timeline-rhombus ul li::after {
  clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
}

.timeline-rhombus ul li div::before {
  bottom: 12px;
}

.timeline-star ul li::after {
  clip-path: polygon(
    50% 0%,
    61% 35%,
    98% 35%,
    68% 57%,
    79% 91%,
    50% 70%,
    21% 91%,
    32% 57%,
    2% 35%,
    39% 35%
  );
}

.timeline-heptagon ul li::after {
  clip-path: polygon(
    50% 0%,
    90% 20%,
    100% 60%,
    75% 100%,
    25% 100%,
    0% 60%,
    10% 20%
  );
}

.timeline-infinite ul li::after {
  animation: scaleAnimation 2s infinite;
}




@keyframes scaleAnimation {
  0% {
    transform: translateX(-50%) scale(1);
  }
  50% {
    transform: translateX(-50%) scale(1.25);
  }
  100% {
    transform: translateX(-50%) scale(1);
  }
}

      
  </style>

 
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

  <h1>Jeita Grotto, Byblos and Harissa Full-Day Tour from Beirut</h1>

  <section class="gallery">

    <h2>Gallery</h2>
    <div>
      <a class="example-image-link" href="../jbeil.jpg" data-lightbox="example-set" data-title="Restaurants in Jbeil">
        <img class="example-image" src="../jbeil.jpg" alt="" width="380px" height="300px"/>
      </a>
      <a class="example-image-link" href="../harissa.jpg" data-lightbox="example-set" data-title="The statue of our Lady of Lebanon">
        <img class="example-image" src="../harissa.jpg" alt="" width="380px" height="300px"/>
      </a>
      <a class="example-image-link" href="../jeita.jpg" data-lightbox="example-set" data-title="Lower grotto in Jeita">
        <img class="example-image" src="../jeita.jpg" alt="" width="380px" height="300px"/>
      </a>

      <a class="example-image-link" href="../jeita.jpg" data-lightbox="example-set" data-title="Lower grotto in Jeita">
        <img class="example-image seemore" src="../seemore.jpg" alt="" width="110px" height="45px"/>
      </a>

    <div id="additionalPhotos" style="display: none;">
    <a class="example-image-link" href="../jbeil.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
        <img class="example-image" src="../jbeil.jpg" alt="" width="380px" height="500px"/>
      </a>
      <a class="example-image-link" href="../jbeil.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
        <img class="example-image" src="../jbeil.jpg" alt="" width="380px" height="300px"/>
      </a>
    </div>
    </div>
    
    <div class="desc">
      <h2>about</h2>
      <p>Explore Jeita Grotto, Harissa and and the UNESCO World Heritage Site of Byblos with the company of an experienced tour leader and driver. You will be picked up from your hotel in Beirut in a private modern vehicle and your tour leader will take care of leading the way along all the sites and providing you with information about the local area and recommendations. Our tours offer excellent quality of service and value for money and can be tailored to your interests.</p>
    </div>
  </section>

  

  <section class="price">
    <div class="price-container">
      <p>from</br><span>$100.00</span></br>per adult(price varies by group size)</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </section>

  

  <section class="quick-info">

    <div class="info">
      <i class="fas fa-person"></i>
      <p>Ages: 0-90</p>
    </div>

    <div class="info">
      <i class="fas fa-clock"></i>
      <p>Duration: 8h</p>
    </div>

    <div class="info">
      <i class="fas fa-globe"></i>
      <p>Live guide: Arabic, English</p>
    </div>

  </section>

  <section class="information">

    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown()">
        <span class="dropdown-text">What's included&nbsp</span>
        <span class="arrow">&#9660;</span>
      </button>
      <div class="dropdown-content" id="myDropdown"> 
          <li>Private transportation</li>
          <li>Air-conditioned vehicle</li>
          <li>Fuel surcharge</li>
          <li>Parking Fees</li>       
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown()">
        <span class="dropdown-text">What's not included&nbsp</span>
        <span class="arrow">&#9660;</span>
      </button>
      <div class="dropdown-content" id="myDropdown"> 
          <li>Entrance fees</li>
          <li>Lunch</li>
          <li>Gratuity</li>
          <li>Entry/Admission - Jeita Grotto</li>
          <li>Entry/Admission - Jounieh</li>  
          <li>Entry/Admission - Byblos Castle</li>     
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown()">
        <span class="dropdown-text">What to expect&nbsp</span>
        <span class="arrow">&#9660;</span>
      </button>
      <div class="dropdown-content" id="myDropdown"> 
          <h3 class="line">Itinerary:&nbsp</h3>
          <p class="line1">This is a typical itinerary for this product</p>
          <br>
          <br>
          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1">Jeita Grotto, Valley of the Dog River, Jitta Lebanon</p>
            <br>
            <br>
            <p>Jeita Grotto is One of Mother Nature's crown jewels. It will take you into a geological paradise that was formed over millions of years due the dissolution of limestone. Here, you have a walk tour and a short dreamy cruise and you find extraordinary limestone formation that will leave you in awe. Your friendly guide will tell you everything you need to know about this incredible place, ensuring an educational experience in a place of intense natural beauty. </p>
            <br>
            <p>Duration: 1 hour 30 minutes</p>
            <br>
          </div>

          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1">Teleferique du Liban, Sea Side Rd, Lebanon</p>
            <br>
            <br>
            <p>The Telepherique is a gondola lift system that transports from the coastal city of Jounieh to an altitude of 650 meters, arriving at Our Lady of Lebanon shrine in Harissa offering breathtaking views of the bay of Jounieh and the surrounding city.</p>
            <br>
            <p>Duration: 20 minutes</p>
            <br>
          </div>

          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1">The Shrine of Our Lady of Lebanon, Keserwan, Harissa Lebanon</p>
            <br>
            <br>
            <p>We take you up a mountain to Our Lady of Lebanon, one of the most important shrines in the world honoring the Virgin Mary. Here, we climb the spiral staircase to reach the pearly white statue of the Virgin Mary and look out on an impressive panoramic view to the bay of Jounieh below.</p>
            <br>
            <p>Duration: 30 minutes</p>
            <br>
          </div>

          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1"> Byblos, Byblos, Mount Lebanon Governorate</p>
            <br>
            <br>
            <p>Byblos, one of the oldest Phoenician cities.</br>
              Inhabited since Neolithic times, it has been closely linked to the legends and history of the Mediterranean region for thousands of years.</br>
              Byblos is also directly associated with the history and diffusion of the Phoenician alphabet.</p>
            <br>
            <p>Duration: 2 hours</p>
            <br>
          </div>

          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1"> Old Souk, Byblos Lebanon</p>
            <br>
            <br>
            <p>Byblos old souk is an old market where tourists can shop for souvenirs and antiques, or simply stroll along the old cobblestone streets and enjoy the architecture.</p>
            <br>
            <p>Duration: 20 minutes</p>
            <br>
          </div>

          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1">Byblos Castle, Byblos Lebanon</p>
            <br>
            <br>
            <p>Explore Byblos castle when you travel to Byblos! Byblos Castle is a Crusader castle that was built in the 12th century. It is adjacent to the Phoenician archaeological site containing the ruins of the Temple of Baalat Gebal, the Temple of the Obelisks, the royal necropolis and the Roman theatre. The castle also has a small museum that displays findings from prehistory to the medieval periods.</p>
            <br>
            <p>Duration: 1 hour</p>
            <br>
          </div>

          <div>
            <h3 class="line">Stop at:&nbsp</h3>
            <p class="line1">Memoire Du Temps, Citadel (Castle) Area, Byblos 0000 Lebanon</p>
            <br>
            <br>
            <p>Established in 1991, Byblos Fossil Museum displays fish fossils that are found at 700m above sea level. All these fossils are 100 million years old. Their collection includes fossils of shrimps, sharks, stingray, turtles, octopus, cœlacanthes. Here you can own a fossil that has survived 100 million years of history and is likely to endure until the end of times!</p>
            <br>
            <p>Duration: 15 minutes</p>
            <br>
          </div>       
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown()">
        <span class="dropdown-text" >Departure and return&nbsp</span>
        <span class="arrow">&#9660;</span>
      </button>
      <div class="dropdown-content" id="myDropdown"> 

        <div>
          <i class="fas fa-bars line"></i>
          <h3 class="line1">&nbspPickup details</h3>
          <p >Your guide will inform you on WhatsApp about her arrival and will be waiting in the car near the entrance of your hotel</p>
          <br>  
        </div>

        <div>
          <i class="fas fa-bed line"></i>
          <h3 class="line1">&nbspHotel pickup offered</h3>
          <p>During checkout you will be able to select from the list of included hotels.</p>
          <br>  
        </div>

        <div>
          <i class="fas fa-plane line"></i>
          <h3 class="line1">&nbspAirport pickup offered</h3>
          <p>During checkout you will be able to select from the list of included airports.</p>
          <br>  
          <li>Beirut Intl Airport, Beirut Lebanon</li>
          <br>
        </div>

        <div>
          <h3 class="line">End:&nbsp</h3>
          <p class="line1">This activity ends back at the meeting point.</p>
          <br>
        </div>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown()">
        <span class="dropdown-text">Accessibility&nbsp</span>
        <span class="arrow">&#9660;</span>
      </button>
      <div class="dropdown-content" id="myDropdown"> 
          <li>Not wheelchair accessible</li>
          <li>Stroller accessible</li>
          <li>Infant seats available</li>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown()">
        <span class="dropdown-text">Additional information&nbsp</span>
        <span class="arrow">&#9660;</span>
      </button>
      <div class="dropdown-content" id="myDropdown"> 
          <li>Confirmation will be received at time of booking</li>
          <li>Most travelers can participate</li>
          <li>This is a private tour/activity. Only your group will participate</li>
      </div>
    </div>
    
  </section>

  <section class="intro">
  <div class="container">
    <h1>Itinerary &darr;</h1>
  </div>
</section>

<section class="timeline">
  <ul>
    <li>
      <div>
        <time>You'll get picked up</time>
        <a href="#departure">See departure details</a>
      </div>
    </li>
    <li>
      <div class="cont">
        <time>Jeita Grotto</time> 
        <p>Stop: 90 minutes - Admission excluded</p>
        <a id="see-details" href="#" onclick="toggleDetails(event)">See details & photo</a>
        <a id="see-less" href="#" onclick="toggleDetails(event)" style="display: none;">See less</a>
          <img src="../jeita.jpg" alt="Jeita Grotto">
          <p>Jeita Grotto is One of Mother Nature's crown jewels. </p>
      </div>
    </li>
    <li>
      <div>
        <time>Teleferique du Liban</time> 
        <p>Stop: 20 minutes - Admission excluded</p>
      </div>
    </li>
    <li>
      <div>
        <time>The Shrine of Our Lady of Lebanon</time> 
        <p>Stop: 30 minutes</p>
      </div>
    </li>
    <li>
      <div>
        <time>Byblos</time>
        <p>Stop: 20 minutes</p>
      </div>
    </li>
    <li>
      <div>
        <time>Byblos Castle</time> 
        <p>Stop: 60 minutes - Admission excluded</p>
      </div>
    </li>
    <li>
      <div>
        <time>Memory of Time</time>
        <p>Stop: 15 minutes</p>
    </li>
    <li>
      <div>
        <time>You'll return to the starting point</time> 
      </div>
    </li>
  </ul>
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

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="lightbox2-2.11.4\dist\js\lightbox-plus-jquery.min.js"></script>
  <script src='js\script.js' defer></script>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    var dropdownButtons = document.querySelectorAll(".dropbtn");
    var arrowSpans = document.querySelectorAll(".arrow");
    var dropdownContents = document.querySelectorAll(".dropdown-content");

    function toggleDropdown(index) {
      dropdownContents[index].classList.toggle('show');
      arrowSpans[index].classList.toggle('upside-down');
    }

    dropdownButtons.forEach(function (button, index) {
      button.addEventListener("click", function () {
        toggleDropdown(index);
      });
    });

    window.addEventListener("click", function (event) {
      dropdownButtons.forEach(function (button, index) {
        if (!event.target.closest('.dropdown') || !event.target.closest('.dropbtn')) {
          if (dropdownContents[index].classList.contains('show')) {
            dropdownContents[index].classList.remove('show');
            arrowSpans[index].classList.remove("upside-down");
          }
        }
      });
    });
  });

  (function () {
  "use strict";

  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();



function seeDepartureDetails() {
  event.preventDefault();
  var dropdown = document.getElementById("myDropdown");
  dropdown.classList.add("show");
}


    
  </script>

  </body>
</html>