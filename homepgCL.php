<?php
include "db_config.php";
session_start();
$email=$_SESSION['email']; 
$sql = "SELECT `clientID`, `FN`, `LN`, `email`, `status`, `country`, `state`, `district`, `street`, `houseNumber`, `postalCode`, `DOB`, `gender`, `nationality`, `maritalState`, `phoneNumber` FROM `client` 
        WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$FN = $row['FN'];
$LN = $row['LN'];
$position = $row['position'];
$status = $row['status'];
$_SESSION['clientID']=$row['clientID'];
$_SESSION['FN']=$row['FN'];
$_SESSION['LN']=$row['LN'];
$_SESSION['phoneNumber']=$row['phoneNumber'];

 ?>
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
  <link rel="stylesheet" href="css/homepgCL.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src ="js/jquery-1.8.1.js" type="text/javascript" > 
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap">
    <script src="js/script.js" type = "text/javascript">
    </script>
    <script src="js/bild_ant.js" type = "text/javascript">
    </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="chat-icon">
        <img src="pics/speech-bubble.png" class="open-button" id="open-button">
    </div>
    <div id="chat-popup" class="form-popup">
    <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
        <?php       
            $sql = mysqli_query($conn, "SELECT * FROM client WHERE clientID = {$_SESSION['clientID']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="details">
            <span><?php echo $row['FN']. " " . $row['LN'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
    </div>
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
          <li><a href="">Notification <i class="fas fa-bell"></i></a></li>
          <li><a href="User/userAccount.php">Mein Profile <i class="fas fa-user"></i></a></li>
          <li><a href="menu.html">Menu <i class="fa fa-bars"></i></a></li>
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



<!-- Container (Services Section) -->
<div id="whyTo" class="container-fluid text-center bg-grey">
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


<div class="container-fluid text-center " >
<section class="services" id="services">
    <div class="heading">
        <div class="box">
  <h2><a href="#services" id="showAntrage" name="showAntrage">Antrage</a></h2>
  <h2><a href="#services" id="showjobs" name="showjobs">Bildungf/jobs</a></h2>
</div>
    </div>

    <div id="servives-container" class="servives-container">
        <!-- Box 1 -->
        <a href="Aufenthaltstitel_schutz.php" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics/corporate-alt.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Aufenthaltantrag</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Finanzielle Unterstützung der Bundesregierung für Arbeitslose zur Deckung ihres Lebensunterhalts bei der Suche nach einem neuen Arbeitsplatz.
            </p>
            <p class="price" style="padding-top:25px;font-size:25px; color:black; font-family: 'Roboto', sans-serif;">17,99€</p>
        </div>
        </a>
        <!-- Box 2 -->
        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics/box-dollar.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Bürgergeld</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Deutsche Sozialhilfe zur finanziellen Unterstützung von Einzelpersonen oder Haushalten mit geringem Einkommen oder Arbeitslosigkeit.            </p>
            <p class="price" style="padding-top:25px ; font-size:25px; color:black; font-family: 'Roboto', sans-serif;">29,98€</p>
          </div>
        </a>
        <!-- Box 3 -->
        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics/house-building.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Wohngeldantrag</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Deutsche Bezeichnung für „Wohngeldantrag“. Dabei handelt es sich um die Beantragung staatlicher Unterstützung zur Deckung wohnungsbezogener Ausgaben wie Miete oder Hypothekenzahlungen.            </p>
            <p class="price" style="font-size:25px; color:black; font-family: 'Roboto', sans-serif;">35,99€</p>
          </div>
        </a>
        <!-- Box 4 -->
        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics\money-check-edit.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Sozialhilfeantrag</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Deutscher Begriff mit der Bedeutung „Sozialhilfeantrag“. Dabei handelt es sich um die Beantragung staatlicher Unterstützung zur Deckung der grundlegenden Lebenshaltungskosten.            </p>
            <p class="price" style="font-size:25px; color:black; font-family: 'Roboto', sans-serif;">29,99€</p>
          </div>
</a>
        <!-- Box 5 -->

        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics/user-graduate.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Bafög Antrage</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Dabei handelt es sich um ein finanzielles Hilfsprogramm in Deutschland, das Studierende mit Zuschüssen und Darlehen für Studienausgaben unterstützt.            
            </p>
            <p class="price" style="padding-top:25px ;font-size:25px; color:black; font-family: 'Roboto', sans-serif;">39,99€</p>
          </div>
        </a>
        <!-- Box 6 -->
        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics\employees-woman-man.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Kinder<br>nzuschlagsantrag</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Dabei handelt es sich um die Beantragung staatlicher Unterstützung zur Unterstützung einkommensschwacher Familien mit Kindern.    
            </p>
            <p class="price" style="padding-top:40px ;font-size:25px; color:black; font-family: 'Roboto', sans-serif;">17,99€</p>
        </div>
        </a>
        <!-- Box 7 -->
        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics/family.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Elterngeldantrag</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Dabei handelt es sich um die Beantragung staatlicher Unterstützung, um Eltern nach der Geburt oder Adoption eines Kindes finanziell zu unterstützen.            </p>
            <p class="price" style="padding-top:25px ;font-size:25px; color:black; font-family: 'Roboto', sans-serif;">29,99€</p>

        </div>
</a>

        <!-- Box 8 -->
        <a href="login.html" class="s-box s-box1">
        <div class="b-box ">
            <img src="pics/child.png" style="padding-right: 5px;" alt="">
            <div class="vl"></div>
            <h2 style="font-size: 15px;">Kindergeldantrag</h2>
        </div>
        <div class="c-box ">
        <hr style="height: 3px; border-width: 0; color: black; background-color: black;">
            <p>
            Dabei handelt es sich um die Beantragung staatlicher Unterstützung, um Eltern bei der Erziehung ihrer Kinder zu unterstützen.              
            </p>
            <p class="price" style="padding-top:50px ;font-size:25px; color:black; font-family: 'Roboto', sans-serif;">24,99€ </p>
        </div>
</a>
    </div>
</section>
</div>
<!-- Container (Portfolio Section) -->
<div id="team" class="container-fluid bg-grey ">
    <div class="team">
        <h3>Our Team</h3>
        <div class="columns">
          <?php 
          $sql = "SELECT `FN`, `LN`, `email`, `position`, `picLoc`
          FROM `employees` 
          WHERE 1";
  $result = mysqli_query($conn, $sql);
   
    $sql2 = "SELECT `DOB`, `gender`, `nationality`, `phoneNumber` 
           FROM `personalinfo`
           JOIN `employees` 
           ON personalinfo.`userID` = employees.`employeeID` 
           WHERE 1";
  $result2 = mysqli_query($conn, $sql2);
          while (($row = mysqli_fetch_array($result))&&($row2 = mysqli_fetch_array($result2)) ) {
            ?>
          <div class="card">
            <div class="img">
            <img src="employeespic/<?php echo $row['picLoc'];?>"  style="width:150px ; height:150px;">
            </div>
            <div class="container">
              <h2><?php echo $row['FN'].$row['LN']; ?></h2>
              <p class="title"><?php echo $row['position']; ?></p>
              <p class="phone"><?php echo $row2['phoneNumber']; ?></p>
              <p class="email"><?php echo $row['email']; ?></p>
              <div class="cntbtn"><button class="button1">Contact</button></div>
            </div>
          </div>
          <?php }?>
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
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
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
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
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
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>
  </div>
</footer>

<script src="javascri/users_client.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var openButton = document.getElementById('open-button');
    var chatPopup = document.getElementById('chat-popup');

    openButton.addEventListener('click', function() {
        chatPopup.style.display = 'block';
    });

    // Add an event listener to close the chat form when the user clicks outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.form-popup') && !event.target.closest('.open-button')) {
            chatPopup.style.display = 'none';
        }
    });
});
</script>
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
