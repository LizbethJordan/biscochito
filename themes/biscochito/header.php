<!DOCTYPE html>
<!-- Importante agregar el prefijo para cuando dice que og no se está usando -->
<html prefix="og: http://ogp.me/ns#">
 <head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <!-- Sets initial viewport load and disables zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- SEO -->
  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- Meta robots -->
   <meta name="robots" content="index, follow" />
   <meta name="googlebot" content="index, follow" />

  <!-- Facebook, Twitter metas -->
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo site_url(); ?>" />
  <meta property="og:image" content="<?php echo THEMEPATH; ?>images/photo-social.png">
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
  <meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/photo-social.png" />
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:image:width" content="210" />
  <meta property="og:image:height" content="110" />
  <meta property="fb:app_id" content="" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@" />

    <!-- Google+ -->
  <link rel="publisher" href="https://plus.google.com/+neweramx">

  <!-- Compatibility -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="cleartype" content="on">

  <!-- Google font(s) -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/materialize.css" media="screen,projection" />

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <!-- Compatibility -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="cleartype" content="on">

  <!-- Sitemap Google Verify -->
  <!--  https://www.google.com/webmasters/verification/home?hl=en&authuser=0 -->
  <meta name="google-site-verification" content="" />

  <!-- Noscript -->
  <noscript>Tu navegador no soporta JavaScript!</noscript>

 </head>
 <body>
  <header>
  		
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
        
  </header>
  <div class="[ main-body ]">