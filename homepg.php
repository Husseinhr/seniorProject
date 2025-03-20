<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Regoss Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/homepg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#team">Our Team</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="login_sign.html">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Regoss</h1> 
  <p>We specialize in gov services</p> 
  <form>
    <div class="input-group">

      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Welche Vorteile bietet REGOSS als Ihr Schlüssel zu staatlichen Dienstleistungen?</h4><br>
      <p>REGOSS ist Ihr verlässlicher Partner für staatliche Dienstleistungen. Wir bieten detaillierte Beratung und aktive Unterstützung, um Ihre finanzielle Sicherheit und Zukunft zu gestalten. Unsere maßgeschneiderten Lösungen helfen Ihnen dabei, die Unterstützung und Vorteile zu erhalten, auf die Sie Anspruch haben. Von der Antragsstellung bis zur erfolgreichen Abwicklung stehen wir Ihnen zur Seite und sorgen dafür, dass Sie die bestmögliche Unterstützung erhalten, um Ihre Ziele zu erreichen. Mit REGOSS haben Sie einen vertrauenswürdigen Begleiter an Ihrer Seite, der sich für Ihre Interessen einsetzt und Ihnen hilft, finanzielle Stabilität und Wohlergehen zu erreichen.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> At the heart of our mission is a commitment to empower individuals by providing seamless access to essential services. We strive to simplify complex processes, eliminate barriers, and foster inclusivity. By leveraging technology and innovation, we aim to create positive social impact and enhance the well-being of our communities.</h4><br>
      <p><strong>VISION:</strong> Our vision is to build a future where access to government services is equitable and efficient for all. We envision a world where individuals can navigate bureaucratic systems with ease, regardless of their background or circumstances. By fostering collaboration and embracing diversity, we aspire to be a catalyst for positive change and societal progress.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="#" class="container-fluid text-center">
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
        <div class="reson-img">
            <img src="pics/vehicle.png" alt="">
        </div>
      <h4>End-to-End Service Guarantee</h4>
      <p>Ensuring Success from Start to Finish</p>
    </div>
    <div class="col-sm-4">
        <div class="reson-img">
            <img src="pics/user-headset.png" alt="">
        </div>
      <h4>Live Customer Support</h4>
      <p>Chat with Us for Immediate Assistance</p>
    </div>
    <div class="col-sm-4">
        <div class="reson-img">
            <img src="pics/target.png" alt="">
        </div>
      <h4>Centralized Services Hub</h4>
      <p>Access All Services in One Place</p>
    </div>
  </div>
  <br><br>
</div>


<div class="container-fluid text-center bg-grey" >
<section class="services" id="services">
    <div class="heading">
        <span>Dienstleistungen</span>
        <h2>Wir bieten beste Dienstleistungen</h2>
    </div>

    <div class="servives-container">
        <!-- Box 1 -->
        <div class="s-box s-box1">
            <img src="https://images.pexels.com/photos/280453/pexels-photo-280453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500.png" alt="">
            <h2>Anträge</h2>
            <ul>
                <li>Arbeitslosengeld I</li>
                <li>Hartz IV</li>
                <li>Wohngeldantrag</li>
                <li>Sozialhilfeantrag</li>
                <li>BAföG -Antrag</li>
                <li>Elterngeldantrag</li>
                <li>Kindergeldantrag</li>
                <li>Kinderzuschlagsantrag</li>
              </ul>
              <div class="anv1">
              <button  class="button button2" onclick="redirectToPage()">Anwenden</button>
              </div>
        </div>
        <!-- Box 2 -->
        <div class="s-box s-box2">
            <img src="https://images.pexels.com/photos/4391470/pexels-photo-4391470.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500.png" alt="">
            <h2>Beratung</h2>
            <ul>
                <li>Sprachkurs-Vermittlung</li>
                <li>Jobsuche & Identifikation</li>
                <li>Bewerbungssupport</li>
                <li>Allgemeines Aufklärungsgespräch</li>
            </ul>
            <div class="anv2">
            <button class="button button2" onclick="redirectToPage()">Anwenden</button>
            </div>
        </div>
        <!-- Box 3 -->
        <div class="s-box s-box3">
            <img src="https://images.pexels.com/photos/4393426/pexels-photo-4393426.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500.png" alt="">
            <h2>Kontaktieren Sie uns direkt</h2>
            <p class="contaktxt">Gerne helfen wir Ihnen persönlich weiter.</p>
            <div class="anv3">
            <button class="button button2" onclick="redirectToPage()">Kontakt</button>
        </div>
        </div>
    </div>
</section>
</div>
<!-- Container (Portfolio Section) -->
<div id="team" class="container-fluid  ">
    <div class="team">
        <h3>Our Team</h3>
        <div class="columns">
          <div class="card">
            <div class="img">
            <img src="pics/Hu.jpeg" alt="Jane" style="width:60%">
            </div>
            <div class="container">
              <h2>Hussein Raad</h2>
              <p class="title">CEO & Founder</p>
              <p class="phone">81825874</p>
              <p class="email">hussein300.hr@gmail.com</p>
              <div class="cntbtn"><button class="button1">Contact</button></div>
            </div>
          </div>
        </div>
      
        <div class="columns">
          <div class="card">
            <div class="img">
            <img src="pics/Hu.jpeg" alt="Mike" style="width:60%">
            </div>
            <div class="container">
              <h2>Mike Ross</h2>
              <p class="title">Art Director</p>
              <p class="phone">81825874</p>
              <p class="email">11931520@students.liu.edu.lb</p>
              <div class="cntbtn"><button class="button1">Contact</button></div>
            </div>
          </div>
        </div>
        
        <div class="columns">
          <div class="card">
            <div class="img">
            <img src="pics/Hu.jpeg" alt="John" style="width:60%">
            </div>
            <div class="container">
              <h2>John Doe</h2>
              <p class="title">Designer</p>
              <p class="phone">81825874</p>
              <p class="email">hussein300.hr@gmail.com</p>
              <div class="cntbtn"><button class="button1">Contact</button></div>
            </div>
          </div>
        </div>
     </div>
</div>

<!-- Container (Pricing Section) -->


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> germany, berline</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> hussein300.hr@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Regoss
          </h6>
          <p>

          Discover seamless access to essential services with our user-friendly platform. Simplify complex processes and foster inclusivity with innovative technology solutions. Join us in shaping a future where everyone can navigate bureaucratic systems with ease.          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->

        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Lebanon, Beirute 10012</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
          hussein300.hr@gmail.com          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>
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
