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
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="icon" href="/assets/favicon-16x16.png" type="image/png">  
    <link rel="icon" href="/assets/favicon.ico" type="image/png"> 
    <link rel="icon" href="/assets/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/assets/Attune-Collective-Icon.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php get_site_url(); ?>/wp-content/themes/attunecollective/styles/basic.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/3fca15e1a8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<?php wp_head(); ?>
<!-- Flodesk Script -->
    <script>
  (function(w, d, t, h, s, n) {
    w.FlodeskObject = n;
    var fn = function() {
      (w[n].q = w[n].q || []).push(arguments);
    };
    w[n] = w[n] || fn;
    var f = d.getElementsByTagName(t)[0];
    var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
    var sm = d.createElement(t);
    sm.async = true;
    sm.type = 'module';
    sm.src = h + s + '.mjs' + v;
    f.parentNode.insertBefore(sm, f);
    var sn = d.createElement(t);
    sn.async = true;
    sn.noModule = true;
    sn.src = h + s + '.js' + v;
    f.parentNode.insertBefore(sn, f);
  })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
</script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-213405754-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-213405754-1');
    </script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<header id="header">
    
            <div class="preheader">
                <div class="wrap">
                    <div class="preheader-left">
                        <p>contact@attune-collective.com</p>
                    </div>
                    <div class="preheader-right">
                        <?php get_search_form(); ?>
                        <a target="_blank" href="https://www.linkedin.com/in/angiekeister/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        <div class="sticky-header">
        <div class="header-frame">
            <a href="/">
                <img class="main-logo" src="/assets/AttuneCollectiveLogo.png" alt="Attune Collective Logo">
            </a>
            <div class="main-nav">
                <ul class="left-nav">
                    <li class="main-nav-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/meet-the-team/">Meet the Team</a>
                    </li>
                    <li class="main-nav-item">
                        <a href="#">Our Services <i class="fas fa-chevron-down"></i></a>
                        <div class="inner-nav">
                            <ul>
                                <li><a href="/services/">All Services</a></li>
                                <li><a href="/services/change-navigation-leadership-coaching/">Change Navigation Leadership Coaching</a></li>
                                <li><a href="/services/building-high-thriving-teams/">Building High Thriving Teams</a></li>
                                <li><a href="/services/change-navigation/">Change Navigation</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="main-nav-item">
                        <a href="/thought-leadership/">Thought Leadership</a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/our-impact/">Our Impact</a>
                    </li>
                </ul>
                <ul class="right-nav">
                    <li class="main-nav-item">
                        <a class="cta-btn" href="mailto:contact@attune-collective.com">Contact Us<i class="fa fa-envelope-o"></i></a>
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
