<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

  <style>

 

  
  .photos .heading-title1{
      font-size: 6rem;
      color: var(--main-color);
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 2px;
      top: 0;  
      margin: 0;
  }
    .swiper {
      height: 650px; 
    }
    .swiper-slide img {
      position: relative;
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper-slide h2{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white; 
      text-align: center;
      font-size: 70px; 
      letter-spacing: 2px;

    }

    .swiper-pagination-bullet{
      background-color: #8e44ad;
      width: 15px; 
      height: 15px;
    }

    .info{
    background: #eee;
    width: 100%;
  }

  .info h3, .related-tours h3{
      padding-bottom: 5px;
      font-size: 40px;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
      top: 0;  
      margin: 0;
  }

  .info p{
      font-size: 15px;
  }  


  .row {
  display: flex;
}

.column {
  flex: 50%;
}



    .related-tours h4{
      text-align: center;
      font-size: 35px;
      color: var(--main-color);
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    li{
      text-align: center;
      margin-bottom: 6px;
    }

    li a{
      color: var(--black);
      font-size: 20px;
    }

    .packages .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.packages .swiper{
  height: 25rem;
}

.packages .box-container .box{
    flex: 1 1 30rem;;
    border-radius: .5rem;
    overflow: hidden;
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}

.packages .box-container .box img{
    position: relative;
    display: block;
    height: 25rem;
    width: 100%;
    object-fit: cover;
}

.packages .box-container .box .content{
    padding: 1rem;
}

.packages .box-container .box .content h3{
    font-size: 2rem;
    color: #333;
}

.packages .box-container .box .content h3 i{
    color: var(--main-color);
}

.packages .box-container .box .content p{
    font-size: 1.7rem;
    color: #666;
    padding: 0;
}

.packages .box-container .box .content .stars i{
    font-size: 1.7rem;
    color: var(--main-color);
}

.packages .box-container .box .content .price{
    font-size: 2rem;
    color: #333;
}


.btn1{
    display: inline-block;
    margin-top: 1rem;
    background-color: var(--main-color);
    color: #fff;
    padding: 1rem 4rem;
    border: .2rem solid var(--main-color);
    cursor: pointer;
    font-size: 1.7rem;
}

.btn1:hover{
    background: rgba(197,180,227);
    color: var(--main-color);
}

.header .navbar{
  padding-top: 2%;
}




@media (max-width:820px){
  .swiper-slide h2{
    font-size: 35px;
  }
  .swiper {
  height: 400px; 
  }

  .swiper-pagination-bullet{
  background-color: #8e44ad;
  width: 12px; 
  height: 12px;
}
}

@media (max-width:500px){
  .swiper {
  height: 300px; 
}

.photos .heading-title1{
    font-size: 4rem;
  }
}
@media (max-width:300px){
  .swiper {
  height: 250px; 
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

    

  <section class="photos">

    <h1 class="heading-title1"> jbeil </h1>

    <div class="swiper photos-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="jbeil.jpg" alt="">
          <h2>restaurants</h2>
        </div>

        <div class="swiper-slide">
          <img src="jbeil1.jpg" alt="">
          <h2>port</h2>
        </div>

        <div class="swiper-slide">
          <img src="jbeil2.jpg" alt="">
          <h2>ruins</h2>
        </div>

        <div class="swiper-slide">
          <img src="jbeil34.jpg" alt="">
          <h2>old souks</h2>
        </div>


      </div>

      <div class="swiper-pagination"></div>
    </div>

  </section>

  <section class="info">
    <h3>Site description</h3>
    <p>The Phoenician historian Philon of Byblos attributed the creation of his homeland 7000 years ago to the god “El”. Byblos became known as “Gubla” or “Gebal”, and after 1200 BC, the Greeks gave the city the name Byblos, which means "papyrus" in Greek, because the city was an important center for the papyrus trade. However, it was originally a small fishing town, as shown by the remains of Neolithic huts, weapons and tools excavated in the town. Around 3000 BC, Canaanite Byblos experienced a major urban expansion as maritime trade developed rapidly and the city became an important  center for the shipping of timber for the eastern Mediterranean.<br/>The Pharaohs purchased wood from cedars and other trees for shipbuilding, tomb construction, and burial ceremonies. In return, they sent papyrus, gold, and linen. This brought prosperity, wealth, and intense commercial activity to the city.
      Centuries later, around 2000 BC, the Amorite tribe conquered the coastal areas of Lebanon and set Byblos on fire. They later rebuilt the city, settled there, and restored relations with Egypt. These "sea peoples" who came from the northern regions of the Mediterranean helped the city flourish again. Around the same time, the scribes of Byblos developed a phonetic alphabet that constituted the earliest form of the Phoenician alphabet, which was found on the sarcophagus of King Ahiram of Byblos. During the Hellenistic and Roman periods, from 64 BC to 395 AD, the inhabitants of Byblos adopted Greek customs and culture. Romans built large temples, baths, and other public buildings, which were preserved under Byzantine rule. However, with the beginning of Arab rule in 637 AD, Byblos’ importance slowly began to decline.
      <br/>It was the French writer Ernest Renan who rediscovered the ruins of Byblos while exploring the area in the late 19th century. The French Egyptologist Pierre Monte conducted excavations between 1921 and 1924, which confirmed the existence of trade relations between Byblos and ancient Egypt. Maurice Dunant continued excavations and conducted several campaigns between 1925 and 1975.
      Excavations uncovered monumental ruins that now stand next to modern buildings. To the north of the city, the castle overlooks the Temple of Balaat Gebal (The Lady of Byblos), the L-shaped Temple, the Obelisk Temple  (which was moved to its current location by archaeologists), and the Roman Theater, the ancient royal tombs and the fortified walls of the city.</p>
  </section>

  <section class="packages">
    <h3>Browse tour options</h3>

    <div class="box-container">

      <div class="box">
          <div class="swiper photos-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="harissa.jpg"></div>
            <div class="swiper-slide"><img src="jeita.jpg"></div>
            <div class="swiper-slide"><img src="jbeil.jpg"></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
          <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Guided small-group tour to jbeil, jeita and harissa</h3> 
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
              </div>
              <p>Bus tours<br/>6+ hours<br/>enjoy personalized attention from your guide and an intimate atmosphere on this small group tour to jbeil, jeita and harissa.</p>
              <div class="price"> $90.00</div>
              <a href="jeita_jbeil_harissa_tour.php" class="btn1">reserve</a>
        </div>
      </div>

      <div class="box">
          <div class="swiper photos-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="harissa.jpg"></div>
            <div class="swiper-slide"><img src="jeita.jpg"></div>
            <div class="swiper-slide"><img src="jbeil.jpg"></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
          <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Guided small-group tour to jbeil, jeita and harissa</h3> 
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
              </div>
              <p>Bus tours<br/>6+ hours<br/>enjoy personalized attention from your guide and an intimate atmosphere on this small group tour to jbeil, jeita and harissa.</p>
              <div class="price"> $90.00</div>
              <a href="#" class="btn1">reserve</a>
          </div>
      </div>
      

      <div class="box">
          <div class="swiper photos-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="harissa.jpg"></div>
            <div class="swiper-slide"><img src="jeita.jpg"></div>
            <div class="swiper-slide"><img src="jbeil.jpg"></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
          <div class="content">
              <h3><i class="fas fa-map-marker-alt"></i> Guided small-group tour to jbeil, jeita and harissa</h3> 
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
              </div>
              <p>Bus tours<br/>6+ hours<br/>enjoy personalized attention from your guide and an intimate atmosphere on this small group tour to jbeil, jeita and harissa.</p>
              <div class="price"> $90.00</div>
              <a href="#" class="btn1">reserve</a>
          </div>
      </div>

  </div>
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

  <script src='js\script.js' ></script>

  <script>
    var swiper = new Swiper(".photos-slider", {
      spaceBetween: 30,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3000, 
        disableOnInteraction: false,
      },
      
    });

   



</script>

</body>
</html>