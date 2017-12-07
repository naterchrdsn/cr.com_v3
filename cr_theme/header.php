<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cr_theme
 */

?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@chelsearchrdsn">
		<meta name="twitter:title" content="Shop and Blog of Chelsea Richardson">
		<meta name="twitter:description" content="Chelsea Richardson is a Photographer at Richardson Media House, based in the San Francisco Bay Area">
		<meta name="twitter:creator" content="@chelsearchrdsn">
		<meta name="twitter:image" content="http://richardsonmediahouse.com/assets/uploads/2014/08/squarelogo.png">
		<meta property="og:title" content="Shop and Blog of Chelsea Richardson" />
		<meta property="og:url" content="http://chelsearichardson.com/" />
		<meta property="og:image" content="http://richardsonmediahouse.com/assets/uploads/2014/08/squarelogo.png" />
		<meta property="og:description" content="Chelsea Richardson is a Photographer at Richardson Media House, based in the San Francisco Bay Area" /> 
		<meta property="og:site_name" content="ChelseaRichardson.com" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<noscript>
    <style>
      .container-fluid {
        display: none;
      }
      footer {
        display: none;
      }
    </style>
    <div class="panel col-sm-4 col-sm-offset-4 text-center">
        <h1>Hi there!</h1>
        <h3>You need to enable javascript to view this site correctly!</h3>
        <p>If your looking to grab some images off of the site, please simply <a href="mailto:contact@richardsonmediahouse.com">e-mail us</a> and we'll give you a higher resolution version!</p>
    </div>
</noscript>
<div class="container-fluid"> 
    <header class="row">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcollapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <div class="visible-xs text-center"><a href="http://chelsearichardson.com"><h1>Chelsea Richardson</h1></a></div>
			  </div>
			  <div class="collapse navbar-collapse" id="navcollapse">
			    <ul class="nav navbar-nav col-sm-4">
			        <li><a href="http://chelsearichardson.com/blog">Blog</a></li>
			        <li><a href="http://chelsearichardson.com">Shop</a></li>
			    </ul>
			    <a class="navbar-text hidden-xs text-center col-sm-4" href="http://chelsearichardson.com">Chelsea Richardson</a>
			    <div class="navbar-form col-sm-3 navbar-right"><?php get_search_form(); ?></div>
			  </div>
			</div>
		</nav>
  	</header>