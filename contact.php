<?php 
if(isset($_POST['submit'])){
    
    $to = "info@luxoasis.com"; // this is your Email address

    $from = "info@luxoasis.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $name . " " . $email . " wrote the following:" . "\r\n" . $_POST['message'];   
    $subject = "Luxoasis Contact form submitted by ". $name;
    $headers = "From: " ."Luxoasis<info@luxoasis.com>" . "\r\n";
	$headers .= "Reply-To: ". "no-reply@luxoasis.com" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    if(empty($name)||empty($email)) 
    {
        $validate_error = "Name and email are mandatory!". $name . $email;        
    }
    
    $mail = mail($to,$subject,$message,$headers);

    if($mail){
        $success = "The mail has been sent successfully";
        
    }
    else{
        $seccess = "The mail has not sent";
    }
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact | Luxoasis </title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!-- Logo -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3 my-1 logo">
                <img src="assets/images/logo.svg" alt="LUXOASIS">
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="container px-0">
        <nav class="navbar navbar-expand-md navbar-light bg-light static-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center justify-content-center" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="benefits.html">Benefits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonials.html">Testimonials</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact</a>
                            <span class="sr-only">(current)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Page Content -->
    <div class="container">
        <section class="">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title text-center text-uppercase">
                        <span class="quote-left mr-2">
                            <img src="assets/images/quote-left.png" alt="">
                        </span>
                        Contact Us
                        <span class="quote-right ml-2">
                            <img src="assets/images/quote-right.png" alt="">
                        </span>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6">
                    <p class="text-center">
                        If you have any questions regarding us leasing or renting your home please call, email, or submit a questionaire. As we want you to feel 100% confident that we are the absolute best tenant you will ever have.
                    </p>
                </div>
            </div>
            <div class="row bg-light py-4">
                <div class="col-md-6 col-12 px-4">
                    <div class="form luxoasis-form">
                        <form method="POST" action="contact.php">
                            <div class="form-group">
                                <input type="text" for="name" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" for="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea  id="" name="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                            
                                <?php
                                    if(isset($validate_error)){
                                        echo '<p class="my-3 text-danger">'.$validate_error.'</p>';
                                    }
                                    if(isset($success)){
                                        echo '<p class="my-3 text-success">'.$success.'</p>';
                                    }
                                    
                                ?>
                            </p>
                            <div class="text-center">
                                <button class="btn btn-primary px-5" type="submit" name="submit">Send</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                <div class="col-md-6 col-12">
                    <address>
                        <p class="mb-4 text-secondary">
                            <img src="assets/images/phone.svg" class="mr-3 contact-icon" alt="">
                            (877) LUX-OASIS or (877) 589-6274
                        </p>
                        <p class="mb-4 text-secondary">
                            <img src="assets/images/envelope.svg" class="mr-3 contact-icon" alt="">
                            INFO@LUXOASIS
                        </p>
                        <p class="text-secondary">
                            <img src="assets/images/marker.svg" class="mr-3 contact-icon" alt="">
                            GRAND TERRACE, CA
                        </p>
                    </address>
                    <div class="separator mb-3">
                        <hr class="bg-dark">
                    </div>
                    <div class="text-center">
                        <img src="assets/images/barcode.svg" class="barcode mb-3" alt="">
                        <h5 class="text-primary mb-0">LUXOASIS.COM</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <div class="container footer pt-4">
        <div class="row px-4 py-2 bg-light">
            <div class="col-md-6 copyright border-right border-primary">
                <p class="m-0 text-primary">Copyright - Luxoasis llc. 2018 Grand Terrace, CA</p>
            </div>
            <div class="col-md-6 contact text-right">
                <p class="m-0 text-primary">(877) LUX-OASIS or (877) 589-6274 Email: INFO@LUXOASIS</p>
            </div>
        </div>
    </div>

    <!-- scrollTop Button -->
    <div class='scrolltop'>
      <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrollTop.js"></script>

</body>

</html>