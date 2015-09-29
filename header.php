<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 70px;
      padding-bottom: 20px;
    }
  </style>
  <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="/css/main.css">

  <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
  <!-- Google Tag Manager -->
  <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-KXL6BX" height="0" width="0"
    style="display:none;visibility:hidden"></iframe>
  </noscript>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KXL6BX');
  </script>
  <!-- End Google Tag Manager -->
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
        aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="/img/profile.jpeg" style="width: 20px; height: 20px; border-radius: 2px;">
        </a>
        <a class="navbar-brand" href="/index.php">enzanki_ars</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li <?php 
				if ($_SERVER[REQUEST_URI]=="" or $_SERVER[REQUEST_URI]=="/index.php")
				echo "class=\"active\""
			?>>
            <a href="/index.php">Home 
			<?php
				if ($_SERVER[REQUEST_URI]=="" or $_SERVER[REQUEST_URI]=="/index.php")
					echo "<span class=\"sr-only\">(current)</span>\""
			?>
			</a>
          </li>
          <li <?php 
				if ($_SERVER[REQUEST_URI]=="/blog" or $_SERVER[REQUEST_URI]=="/blog/" or $_SERVER[REQUEST_URI]=="/blog/index.php")
				echo "class=\"active\""
			?>>
            <a href="/blog/index.php">Blog 
			<?php
				if ($_SERVER[REQUEST_URI]=="/blog" or $_SERVER[REQUEST_URI]=="/blog/" or $_SERVER[REQUEST_URI]=="/blog/index.php")
				echo "<span class=\"sr-only\">(current)</span>\""
			?>
			</a>
          </li>
          <li <?php 
				if ($_SERVER[REQUEST_URI]=="/capstone.php")
				echo "class=\"active\""
			?>>
            <a href="/capstone.php">Capstone 
			<?php
				if ($_SERVER[REQUEST_URI]=="/capstone.php")
				echo "<span class=\"sr-only\">(current)</span>\""
			?>
			</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li<?php 
				if ($_SERVER[REQUEST_URI]=="/privacy.php")
				echo "class=\"active\""
			?>>
            <a href="/privacy.php">Privacy 
			<?php
				if ($_SERVER[REQUEST_URI]=="/privacy.php")
				echo "<span class=\"sr-only\">(current)</span>"
			?>
			</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Social <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                <a href="https://github.com/enzanki-ars">GitHub</a>
              </li>
              <li>
                <a href="https://twitter.com/enzanki_ars">Twitter</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  
    <div class="container">