<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Dynamic title -->
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Governance, Politics & Development' : 'Governance, Politics & Development'; ?></title>
    
    <!-- Meta tags -->
    <meta content="<?php echo isset($pageDescription) ? $pageDescription : ''; ?>" name="description">
    <meta content="<?php echo isset($pageKeywords) ? $pageKeywords : 'politics'; ?>" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/gopod_fav.png" rel="icon">
    <link href="assets/img/gopod_fav.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Google Adsense -->
    <script data-ad-client="ca-pub-7499835569499446" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>

    <!-- ======= Top Bar ======= -->
     <!--
    <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
        <div class="container d-flex justify-content-end">
            <div class="social-links">
                <a href="https://twitter.com/gopodlimited" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://facebook.com/gopodltd" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/gopodltd" class="instagram"><i class="fa fa-instagram"></i></a> 
                <a href="https://www.linkedin.com/in/gopod-strategy-limited-5479b8201/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
-->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">

            <a href="./" class="logo mr-auto"><img src="assets/img/energy-logo.png" alt="" class="img-fluid"></a>

            <nav class="main-nav d-none d-lg-block">
                <?php include 'nav.php'; ?>
            </nav><!-- .main-nav-->

        </div>
    </header><!-- End Header -->