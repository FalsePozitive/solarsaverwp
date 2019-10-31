<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solarsaver
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="/wp-content/themes/solar_saver/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	<!-- <header id="masthead" class="site-header">
		 -->
	<nav class="navbar fixed-top flex-md-nowrap navbar-expand-sm navbar-dark shadow" style="padding-top: 0; padding-bottom: 0; background-color:var(--theme-gray)">
	<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Words</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Acknowledgements</a>
    </li>
  </ul>
         <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand"><img src="https://dev.wilmans.co.za/wp-content/uploads/2019/10/SolarSaver-logo-white.png"></span>
    </div>
    </div>
<!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Words</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Acknowledgements</a>
    </li>
  </ul>
</nav>
<!--/ fixed-top-->

	<!-- </header> #masthead -->

	<div id="content" class="site-content">
