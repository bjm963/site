<!doctype html>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
    <head>
    <meta charset="utf-8"><!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Metro Mobile HTML Template</title>
    <meta content="Your meta description" name="description">
    <meta content="No HTML is allowed in here." name="keywords">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    
    <!--[if IE]><link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.css"><![endif]-->
    
    <!-- Shortcut Logos -->
    <link href="images/demo_content/metroentrance1.jpg" rel="apple-touch-icon-precomposed" sizes="114x114"><!-- Home logo -->
    <link href="images/demo_content/metroentrance57.jpg" rel="shortcut icon"><!-- Fav icon logo-->
    <!-- /Shortcut Logos -->
    
    <!-- Style -->
    <link href='css/style.css' id='styles-css' media='all' rel='stylesheet' type='text/css'>
    <!-- / Style -->
    
    <!-- Scripts -->
	<script src='http://code.jquery.com/jquery.min.js' type='text/javascript'></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src='js/bootstrap.min.js' type='text/javascript'></script>
    <script src='js/spinner.js' type='text/javascript'></script>
    <script src='js/jquery.mobile.customized.min.js' type='text/javascript'></script>
    <script src='js/vendor/modernizr-2.6.1.min.js' type='text/javascript'></script>
    <!-- / Scripts -->
</head>

<body>
    
    <!-- Loading Message -->
    <div class="spinnerbg">
    <div id="spinner">
        <span id="first" class="ball"></span>
        <span id="second" class="ball"></span>
        <span id="third" class="ball"></span>
    </div>
    </div>

    <!-- /Loading Message -->
	
    <!-- Wrapper -->
    <div class="wrapper">
    	<!-- Scrollable -->
    	<div class="scrollable">
    	<!-- Header -->
        <header>
            <h1>Contact</h1><a class="back-button linkbut" href="javascript:history.back(-1)"></a>

            <div class="line"></div>
        </header>
		<!-- /Header -->
        
        <!-- Middle Content -->
        <div class="MiddleContent">
            <p><strong>Contact Map</strong></p>

            <div class="dividert divider7"></div>
			<!-- Map -->
            <div class="map-container">
                <iframe frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src=
                "http://maps.google.com/maps?q=Alsancak,%20Izmir,%20Turkey&amp;output=embed" style="width:100%; height: 200px;"></iframe>
            </div>
			<!-- / Map -->
            
            <div class="clearfix"></div>

            <p><strong>Contact Information</strong></p>

            <div class="dividert divider7"></div>

            <p><strong>Address:</strong> Laker Street No:456 L.A. USA</p>

            <p><strong>Phone:</strong> <a href="tel:00%2056487987987545">+1 00 56487987987545</a></p>

            <p><strong>Email:</strong> <a href="mail:youremail@yourcompany.com">youremail@yourcompany.com</a></p>

            <div class="clearfix"></div>

            <p><strong>Contact Form</strong></p>

            <div class="dividert divider7"></div>

				<?php 
				$toemail = 'test@youremail.com'; // To Email Address
				$name = $_POST['name']; // Name Field
				$email = $_POST['email']; // Email Field
				$subject = $_POST['subject']; // Email Field
				$message = 'Name: '.$name.', ';
				$message .= $_POST['message']; // Message Field
				if(mail($toemail, $subject, $message, 'From: ' . $email)) {
					echo '<div class="cmessage" >Your email was sent successfully.</div>'; // Send succesfull message 
				} else {
					echo '<div class="cmessage">There was a problem sending your email.</div>'; // Send Error Message
				}
				?>

        </div>
        <!-- / Middle Content -->
        </div>
        <!-- / Scrollable -->
    </div>
	<!-- / Wrapper -->
	
	<script src='js/loadanim.js' type='text/javascript'></script><!-- Loading Animation -->
	<script src='js/main.js' type='text/javascript'></script><!-- Main Styles -->
	<script src='js/vendor/zepto.min.js' type='text/javascript'></script>
    
</body>
</html>