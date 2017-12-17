<!DOCTYPE HTML>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<!--
	* File: header.inc.php
	* Author: Jason McCoy
	* Description: header file for Tumor Bank of WNC, Inc.
-->

<head>
	<!-- Basic Meta Tags
    ================================================== -->
	<title>Tumor Bank of WNC<?php echo " &#8211; {$title}"; ?></title>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tumor Bank of WNC, Inc, Tumor Bank WNC, Tumor Bank Asheville, Don Russell, Dr. Don Russell, Don Russell Tumor Bank, Don Russell Tumor Bank of WNC, Inc, Don Russell Tumor Bank of WNC, Dr. Don Russell Tumor Bank, Dr. Don Russell Tumor Bank of WNC, Inc, Dr. Don Russell Tumor Bank of WNC, Asheville, tumors, non-profit, research, medical, cells, tumor cells, Western North Carolina, cancer research, cancer, freeze cancer cells, freeze tumor cells, freeze tumor cells Asheville, freeze tumor cells WNC, freeze tumor cells Western North Carolina, donate non-profit, donate medical non-profit, donate cancer non-profit, cancer non-profit, medical non-profit, tumor non-profit, donate WNC non-profit, donate Asheville non-profit, donate Western North Carolina non-profit">
	<meta name="description" content="Tumor Bank of WNC, Inc medical non-profit organization">
	<meta name="Revisit-After" content="30 Days">
    <!-- WINDOWS 8 START SCREEN SITE TILE -->
	<meta name="msapplication-TileColor" content="#123456"/>
    <meta name="msapplication-TileImage" content="new_snowflake.png"/>
	<!-- Mobile Specific Metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS Stylesheets
    ================================================== -->
  	<link rel="stylesheet" href="foundation-4.3.1/stylesheets/normalize.css" media="all">
  	<link rel="stylesheet" href="foundation-4.3.1/stylesheets/foundation.css" media="all">
  	<link rel="stylesheet" href="foundation-4.3.1/stylesheets/offcanvas.css" media="all">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome-ie7.min.css" media="all">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css" media="all">
	<link rel="stylesheet" href="css/print.css" media="print">

    <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="images/favicons/favicon-152.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicons/favicon-144.png">
    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicons/favicon-152.png">
	<!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/favicon-144.png">
	<!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicons/favicon-120.png">
	<!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/favicon-114.png">
	<!-- For first- and second-generation iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/favicon-72.png">	
	<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	<link rel="apple-touch-icon-precomposed" href="images/favicons/favicon-57.png">
	<!-- Favicons targeted to any additional sizes that aren't covered above: -->
	<link rel="icon" href="images/favicons/favicon-32.png" sizes="32x32">
	<link rel="icon" href="images/favicons/favicon-24.png" sizes="24x24">
	<link rel="icon" href="images/favicons/favicon-16.png" sizes="16x16">

	<!-- Scripts
	================================================== -->	
	<!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/piecon/piecon.js"></script>
        <script>
           (function(){
               var count = 0;
               Piecon.setOptions({fallback: 'force'});
               var i = setInterval(function(){
               if (++count > 100) { Piecon.reset(); clearInterval(i); return false; }
                   Piecon.setProgress(count);
               }, 250);
           })();
    </script>
</head>

<!-- Start of Page
  ================================================== -->
<body>
	<div id="wrapper">
		<div id="header">
		<div class="row">
		<div class="large-12">
		<nav class="top-bar">
  <ul class="title-area">
  	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    <li class="name"><!-- Leave this empty --></li>
  </ul>
  <div class="top-bar-section">
        <ul class="left">
          <li class="title" data-section-title><a href="index.php"><i class="icon-star-empty"></i> Home</a></li>
          <li class="title hide-for-medium-down" data-section-title><a href="#" data-orbit-link="headline-1"><i class="icon-book"></i> About Us</a></li>
          <li class="title hide-for-medium-down" data-section-title><a href="#" data-orbit-link="headline-2"><i class="icon-wrench"></i> Services Provided</a></li>
          <li class="title has-dropdown hide-for-medium-down" data-section-title><a href="#" data-orbit-link="headline-3"><i class="icon-question"></i> FAQ</a>
              <ul class="dropdown hide-for-medium-down">
                 <li class="title hide-for-medium-down" data-section-title><a href="#"  data-orbit-link="headline-3"><i class="icon-comment"></i> What Is The Cost?</a></li>
                 <li class="title hide-for-medium-down" data-section-title><a href="#"  data-orbit-link="headline-4"><i class="icon-exclamation-sign"></i> What If I Can't Pay?</a></li>
                 <li class="title hide-for-medium-down" data-section-title><a href="#"  data-orbit-link="headline-5"><i class="icon-forward"></i> What Do I Do Next?</a></li>
                 <li class="title hide-for-medium-down" data-section-title><a href="#"  data-orbit-link="headline-6"><i class="icon-heart"></i> How Can I Donate?</a></li>
             </ul>
        </li>
        <li class="title" data-section-title><a href="donate.php"><i class="icon-heart-empty"></i> Donate</a></li>
        <li class="title" data-section-title><a href="contact.php"><i class="icon-envelope-alt"></i> Contact Us</a></li>
        </ul>
    </div>
</nav>
</div>
</div>

<div class="row" id="pageHeading">
	<div class="large-12">
  	<div id="logoIMG" class="large-1 columns"><img src="images/new_snowflake.png" data-interchange="[images/new_snowflake.png, (only screen and (min-width: 768px))], [images/favicons/apple-touch-icon-72x72-precomposed.png, (only screen and (max-width: 768px))]"></div>
  	<div class="large-8 columns"><h1 class="logoHeading">Tumor Bank of WNC</h1></div>
	<div class="large-3 columns">
		<ul class="vcard">
			<li class="street-address">306 C Summit St.</li>
			<li class="locality">Asheville, NC 28803</li>
			<li class="street-address"><i class="icon-phone"></i> (828) 277-5422</li>
		</ul>
	</div>
</div>
</div>
</div>

 

 

    		