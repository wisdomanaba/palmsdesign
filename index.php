<?php

$error = "";
$success = "";

if(isset($_POST['meet'])){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['servicesd']) || empty($_POST['services'])){
        $error = "<div class='alert alert-danger'>Fill in all fields</div>";
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $error = "<div class='alert alert-danger'>Email is incorrect</div>";
    }
    else{
        $success = "<div class='alert alert-success'>Information sent successfully</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palmsdesign | Where creativity is made</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Teencode is an initiative that teach problem solving through programming to teenagers in high schools. In this way we are building a future of creators, not just critical thinkers, to lead the continent of Africa."/>
    <link rel="icon" href="images/logo/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="images/logo/logo.png" alt="palmsdesign-logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-5 col-sm-12 col-lg-12">
                <div class="space-60"></div>
                <div class="space-60"></div>
                <h1 class="head-title wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible;animation-delay: 0.3s;animation-name: fadeInRight;">Turning your imagination into imagery.</h1>
                <div class="space-60"></div>
            </div>
            <div class="col-md-12 col-xl-7 col-sm-12 col-lg-12">
                <div class="hidden visible-xs visible-sm space-70"></div>
                <img src="images/brand/header-shape-2.png" alt="illustration" class="main-img">
            </div>
        </div>
    </div>
</section>

<div class="sec2">
    <div class="container">
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
            <h1 class="my">Creative. Unique. Powerful.</h1>
            <p>We provide quality and cost effective design services.</p>
        </div>
    </div>
</div>

<div class="container thp-main">
    <div class="row">
        <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12 thp">
            <i class="fab fa-accessible-icon"></i>
            <h3>Reliability</h3>
            <p>We are reliable, manage client needs, develop consistency and prove trustworthiness...</p>
        </div>
        <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12 thp">
            <i class="fas fa-allergies"></i>
            <h3>Patience</h3>
            <p>We work on communication and try out creative alternatives before getting to the end result.</p>
        </div>
        <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12 thp">
            <i class="fas fa-lightbulb"></i>
            <h3>Curiosity</h3>
            <p>Designers love to look beyond the surface of things, to explore both the minute detail and the big picture.</p>
        </div>
    </div>
</div>

<section id="sourcing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xl-6 col-sm-12 col-lg-12 sourcing-one">
        <h3>PRODUCT SOURCING</h3>
        <br>
        <p>One request, multiple quotes <br> Verified suppliers matching <br> Quotes comparison and sample request </p>
        <br>
        <p><a href="about.html">Learn more <i class="fas fa-chevron-right"></i></a></p>
      </div>
      <div class="col-md-12 col-xl-6 col-sm-12 col-lg-12 sourcing-two">
        <h3>Want to get quotations?</h3>
        <br>
        <form action="index.php" method="POST">
                <?php echo $error; ?>
                <?php echo $success; ?>
          <input type="text" placeholder="Name" name="name">
          <br>
          <input type="text" placeholder="Email Address" name="email">
          <br>
          <input type="text" placeholder="Service Description" name="servicesd">
          <br>
          <select name="services">
                <option>Brand Identity</option>
                <option>Creative Direction</option>
                <option>Strategy</option>
                <option>Illustration</option>
                <option>Editorial & Layout</option>
                <option>Environmental Design</option>
                <option>Packaging</option>
                <option>Digital Design</option>
                <option>User Interface</option>
                <option>Motion Graphics</option>
                <option>Other</option>
          </select>
          <input type="text" placeholder="Specify" class="specify">
          <br>
          <button name="meet">Post your request now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<svg class="full-half-circle" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0 100 C 20 0 70 15 100 100 Z"></path></svg>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-4 col-sm-12 col-lg-4">
                <img src="images/logo/logo.png" alt="palmsdesign-logo">
                <p>Palms-Design is an organization that turns your imagination into an imagery to serve the purpose: from brand identities for companies large and small, to campaigns and governmental... <a href="about.php">Read More</a></p>
                
            </div>
            <div class="col-md-4 col-xl-3 col-sm-12 col-lg-4">
                <h5 class="footer-title">Usefull Links</h5>
                <ul class="footer-link">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i> Home</a></li>
                    <li><a href="about.php"><i class="fa fa-angle-double-right"></i> About</a></li>
                    <li><a href="portfolio.php"><i class="fa fa-angle-double-right"></i> Portfolio</a></li>
                    <li><a href="contact.php"><i class="fa fa-angle-double-right"></i> Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xl-5 col-sm-12 col-lg-4 newsletter">
                <h5 class="footer-title">Newsletter</h5>
                <div>
                    <input type="text">
                    <button>Subscribe</button>
                </div>
                <ul class="social-link">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="container copyright">
        <p>Copyright &copy; <script> let d = new Date(); document.write(d.getFullYear());</script> <a href="index.php">Palms-Design</a>. All Rights Reserved.</p>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/first.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5cec72c42135900bac12c1c2/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>

<script>

const select =  document.querySelector('#sourcing select');
const specifyt = document.querySelector('.specify');

select.addEventListener('click', function(){
  if(select.value == 'Other'){
    specifyt.style.visibility = "visible";
  }
  else{
    specifyt.style.visibility = "hidden";
  }
});

</script>

<!--End of Tawk.to Script-->
</body>
</html>

<!-- <!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<h2>Modal Example</h2>

Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button>

The Modal -->
<!-- <div id="myModal" class="modal"> -->

  <!-- Modal content -->
  <!-- <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div> -->

<!-- <script>
// Get the modal
// var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
</script> -->
<!-- 
</body>
</html> -->
