<?php

$error = "";
$success = "";

if(isset($_POST['submit'])){

    if(empty($_POST['name']) OR empty($_POST['email']) OR empty($_POST['phone']) OR empty($_POST['company']) OR empty($_POST['message'])){
		$error = "<div class='alert alert-danger'>Fill in all fields</div>";
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $error = "<div class='alert alert-danger'>Email is incorrect</div>";
    }
    else if(!preg_match("/^[\+0-9\-\(\)\s]*$/", $_POST['phone'])){
        $error = "<div class='alert alert-danger'>Phone number is incorrect</div>";
    }
    else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
	$company = $_POST['company'];
    $message = $_POST['message'];
    $to = "wisdomanaba83@gmail.com";
    $subject = "You have a message from Palms Design.";
    $body = "<html>
                <body>
                    <div><a href='images/
                    <h2>'.$subject.'</h2>
                    <hr>
                    <p>Name:<br><strong>".$name."</strong></p>
                    <p>Email:<br><strong>".$email."</strong></p>
                    <p>Phone Number:<br><strong>".$number."</strong></p>
                    <p>Company's Name:<br><strong>".$company."</strong></p>
                    <p>Message:<br><strong>".$message."</strong></p>
                </body>
            </html>";

    // headers
	$headers = "From: " . $name . " <" . $email . ">\r\n";
	$headers .= "Reply-To: ".$email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8";
    
    $body = wordwrap($body,70);

    // send
	
    $send = mail($to, $subject, $body, $headers);
    if($send){
        $success = "<div class='alert alert-success'>Information sent successfully</div>";
    }
    else{
        $error = "<div class='alert alert-danger'>Information not sent, check your internet connection</div>";
    }
    
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
    <link rel="icon" href="images/logo/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="images/logo/logo.png" alt="palmsdesign-logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="blog-header__circle"></div>
<div class="blog-header__square"></div>

<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12">
                <ul>
                    <li>
                        <a href="index.html">Home <i class="fa fa-angle-double-right"></i></a>
                    </li>
                    <li>Contact</li>
                </ul>
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12">
                <i class="fa fa-map-marker"></i>
                <h4>Our Location</h4>
                <p>No.15 Mount-Olive Compound, Berger, Ajah-ilaje, Lagos, Nigeria</p>
            </div>
            <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12">
                <i class="fa fa-phone"></i>
                <h4>Contact Us</h4>
                <p>Mobile: (+234) 8142 40 5126</p>
            </div>
            <div class="col-md-12 col-xl-4 col-sm-12 col-lg-12">
                <i class="fa fa-inbox"></i>
                <h4>Write Some Words</h4>
                <p>palmsdesign@yahoo.com</p>
            </div>
        </div>
    </div>
</section>

<section id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-6 col-sm-12 col-lg-8 info map">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=berger%2C%20ilaje-Ajah%2C%20Lagos&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">wordpress themes</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
            </div>
            <div class="col-md-8 col-xl-6 col-sm-12 col-lg-8 info">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xl-12 head">
                    <h3>Send a Message</h3>
				</div>
                <?php echo $error; ?>
                <?php echo $success; ?>
                <form action="contact.php" method="POST">
                    <div class="row">
                        <div class="col-md-12 col-xl-6 col-sm-12 col-lg-12 form-group">
                            <label>Your Name</label>
                            <br>
                            <input type="text" name="name">
                        </div>
                        <div class="col-md-12 col-xl-6 col-sm-12 col-lg-12 form-group">
                            <label>Email Address</label>
                            <br>
                            <input type="text" name="email">
                        </div>
                        <div class="col-md-12 col-xl-6 col-sm-12 col-lg-12 form-group">
                            <label>Phone</label>
                            <br>
                            <input type="text" name="phone">
                        </div>
                        <div class="col-md-12 col-xl-6 col-sm-12 col-lg-12 form-group">
                            <label>Company</label>
                            <br>
                            <input type="text" name="company">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xl-12 form-group">
                            <label>Message</label>
                            <br>
                            <textarea name="message"></textarea>
                        </div>
					</div>
					<button name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<div id="sucessMsg" class="sucess">

  <!-- Modal content -->
  <div class="sucess-content">
    <span class="close">&times;</span>
        <p>Mail sent succesfully..</p>
        <p>We will get back to you as soon as possible..</p>
  </div>
  
</div>

<div id="errorMsg" class="error">

  <!-- Modal content -->
  <div class="error-content">
    <span class="close">&times;</span>
        <p>Mail not sent successfull..</p>
        <p>An error encountered, probably your internet connection</p>
  </div>
  
</div>

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
<!--End of Tawk.to Script-->
</body>
</html>