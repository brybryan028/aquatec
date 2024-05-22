<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>PT. Aquatek Engineering - Your Water Solution</title>
  <link rel="icon" href="images/company_logo/logo.jpg" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: blue;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: blue;
  }
  .carousel-indicators li {
    border-color: blue;
  }
  .carousel-indicators li.active {
    background-color: blue;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: blue;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: blue !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: blue;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#customers">OUR CUSTOMERS</a></li>
        <li><a href="#findus">FIND US</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" style="background-color: blue;">
  <h1>Aquatek Engineering</h1> 
  <p>We Specialize in Water Treatment for Industry</p> 
</div>

<!-- About Section -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>AQUATEK ENGINEERING is a company that stands out due to its foundation by a team of experienced and innovative engineers. These professionals bring a wealth of expertise and a forward-thinking approach to the company's operations.</h4><br>
      <p>The company's core strength lies in its commitment to providing professional services that not only meet but exceed customer expectations. By leveraging their extensive industry experience, the engineers at AQUATEK ENGINEERING are adept at identifying and solving complex engineering challenges. They employ cutting-edge technologies and methodologies to develop solutions that are both effective and efficient, ensuring that their clients receive the best possible outcomes.</p>
    </div>
    <div class="col-sm-4">
      <img src="images/home_page/1.jpg" class="img-fluid rounded-circle" style="width: 300px; border-radius: 50%; margin-left: 150px;">
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <img src="images/home_page/2.jpg" class="img-fluid rounded-circle" style="width: 300px; border-radius: 50%; margin-left: 90px; margin-top: 25px;">
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> AQUATEK ENGINEERING's mission is to be the premier provider of sustainable water-related solutions and technical services. We are dedicated to forming long-term partnerships that deliver mutual benefits for our customers, employees, communities, and the environment.</h4><br>
      <p><strong>VISION:</strong> AQUATEK ENGINEERING envisions being a global leader in sustainable water solutions, recognized for its commitment to excellence, innovation, and sustainability. Our aim is to transform the water management industry by setting new standards in efficiency, reliability, and environmental stewardship. We aspire to create a future where every community has access to clean, safe, and sustainable water resources, and where our innovative solutions make a significant positive impact on the environment and society as a whole.</p>
    </div>
  </div>
</div>

<!-- Service Section -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-ok-sign logo-small"></span>
      <h4>Cooling Water Treatment</h4>
      <p>Corrosion inhibitors protect metal surfaces from deterioration, while dispersants aid in the even distribution of particles in liquids, enhancing stability in formulations such as paints and coatings.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-ok-sign logo-small"></span>
      <h4>Service and Troubleshooting of DI and RO System</h4>
      <p>Our services encompass the installation, maintenance, and troubleshooting of DI (Deionization) and RO (Reverse Osmosis) systems, ensuring optimal performance and longevity of these critical water treatment technologies.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-ok-sign logo-small"></span>
      <h4>Waste Water Treatment</h4>
      <p>Coagulants and flocculants play essential roles in water treatment by aggregating impurities for easier removal. Oxidizing agents help eliminate organic contaminants, while bio-augmentation products introduce beneficial microorganisms.</p>
    </div>
  </div>
  <br><br>
</div>

<!-- Customer Section -->
<div id="customers" class="container-fluid text-center bg-grey">
  <h2>Our Customers</h2><br>
  <h4>Below are the list of our customers</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/customer_logo/airliquide.png" alt="Paris" width="400" height="300">
        <p><strong>Air Liquide PTE LTD</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/customer_logo/cei.png" alt="New York" width="400" height="300">
        <p><strong>CEI PTE LTD</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/customer_logo/giken.png" alt="San Francisco" width="400" height="300">
        <p><strong>PT. Giken Precision</strong></p>
      </div>
    </div>
  </div>
  <br><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/customer_logo/Goldwell.png" alt="Paris" width="400" height="300">
        <p><strong>PT. Goldwell Plastics</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/customer_logo/OSI.png" alt="New York" width="400" height="300">
        <p><strong>PT. OSI Electronics</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/customer_logo/Yokogawa.png" alt="San Francisco" width="400" height="300">
        <p><strong>PT. Yokogawa Manufacturing</strong></p>
      </div>
    </div>
  </div>
  <br><br>

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Aquatek Engineering excels in water treatment, delivering exceptional solutions with precision and expertise."<br></h4>
      </div>
      <div class="item">
        <h4>"The company's innovative approach and commitment to quality set a high standard in the industry."<br></h4>
      </div>
      <div class="item">
        <h4>"Aquatek Engineering is a trusted partner, ensuring clean and sustainable water for communities and industries."<br></h4>
      </div>
      <div class="item">
        <h4>"Aquatek Engineering's expertise in water treatment is unmatched, earning praise for its efficient and eco-friendly solutions."<br></h4>
      </div>
      <div class="item">
        <h4>"With a proven track record of excellence, Aquatek Engineering continues to lead the way in advancing water purification technologies."<br></h4>
      </div>
    </div>

    <!-- Left and Right Controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Find Us Section -->
<footer>
<div id="findus" class="container-fluid">
  <h2 class="text-center">Find Us</h2>
  <br>
  <div class="col-sm-7">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.172428876878!2d104.0310297!3d1.1294803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9890d57e5b929%3A0xe952ae318cf00265!2sPT.%20Aquatek%20Engineering!5e0!3m2!1sid!2sid!4v1715832791511!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  <div class="row">
    <div class="col-sm-5">
      <p>Aquatek Engineering is a reputable and established company with its headquarters located in Batam, Indonesia. Since its inception in 2010, the company has been a prominent player in the engineering and water treatment industry, offering a wide range of services and solutions to clients across various sectors.</p>
      <p><span class="glyphicon glyphicon-map-marker" style="align-items: center;"></span> Ruko Bandar Mas Blok E No.10, Batam, Indonesia</p>
      <p><span class="glyphicon glyphicon-phone" style="align-items: center;"></span> +62 812 7016 238</p>
      <p><span class="glyphicon glyphicon-phone" style="align-items: center;"></span> +62 812 6167 533</p>
      <p><span class="glyphicon glyphicon-envelope" style="align-items: center;"></span> aquatekpj@gmail.com</p>
      <p><span class="glyphicon glyphicon-envelope" style="align-items: center;"></span> aquatek.bryan@gmail.com</p>
      <p><span class="glyphicon glyphicon-copyright-mark" style="align-items: center;"></span> PT. Aquatek Engineering Batam All Rights Reserved</p>
    </div>
  </div>
</div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>