<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
    
    <!-- NOINDEX, NOFOLLOW ---- REMOVE ON LIVE SITE -->   
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    
    <link rel="icon" href="/assets/favicon-16x16.png" type="image/png">  
    <link rel="icon" href="/assets/favicon.ico" type="image/png"> 
    <link rel="icon" href="/assets/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/assets/Icon.png" type="image/png"> 
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php get_site_url(); ?>/wp-content/themes/startertheme/styles/basic.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3fca15e1a8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

	<?php wp_head(); ?>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153708216-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-153708216-1');
        </script>

    
<!--    <link rel="stylesheet" href="<?php get_site_url(); ?>/wp-content/themes/startertheme/style.css?v=1.00">-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<header id="header">
    
            <div class="preheader">
                <div class="wrap">                    
                    <div class="preheader-left">                    
                        <p>phone or email or both</p>
                    </div>
                    <div class="preheader-right">
                        <?php get_search_form(); ?>
                        <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                    </div>                
                </div>
            </div>
        <div class="sticky-header">
        <div class="header-frame">
            <a href="/">
                <img class="main-logo" src="https://via.placeholder.com/350x150" alt="Logo">
            </a>
            <div class="main-nav">
                <ul class="left-nav">
                    <li class="main-nav-item">
                        <a href="#">Drop Nav <i class="fas fa-chevron-down"></i></a>
                        <div class="inner-nav">
                            <ul>
                                <li><a href="/derp/">Inner Drop Nav Item</a></li>
                                <li><a href="#">Nav Item</a></li>
                                <li><a href="#">Inner Drop Nav Item</a></li>
                                <li><a href="#">Inner Drop Nav Item Even longer</a></li>
                                <li><a href="#">Short</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="main-nav-item">
                        <a href="#">Drop Nav 2 <i class="fas fa-chevron-down"></i></a>
                        <div class="inner-nav">
                            <ul>
                                <li><a href="#">Inner Drop Nav Item 2</a></li>
                                <li><a href="#">2 Nav Item</a></li>
                                <li><a href="#">Inner Item 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="main-nav-item">
                        <a href="#">Three</a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#">Four</a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#">Five Longer</a>
                    </li>
                </ul>
                <ul class="right-nav">
                    <li class="main-nav-item">
                        <a target="_blank" href="#">Login</a>
                    </li>
                    <li class="main-nav-item">
                        <a class="cta-btn" href="#">CTA button</a>
                    </li>
                    <div class="mobile-search"><?php get_search_form(); ?></div>
                </ul> 
            </div>
            <div class="mobile-menu-btn-holder">
                <div id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        </div>
    </header>

	<div id="content" class="site-content">
