<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->

<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AlessionTech is a leading digital agency specializing in web development, app development, digital marketing, creative design, and tech support. With over 8 years of experience and more than 50 successful projects, we provide innovative, tailored solutions to help businesses grow and succeed in the digital landscape. Our expert team is dedicated to delivering exceptional results and ensuring client satisfaction.">
    <meta name="keywords" content="web development, app development, digital marketing, creative design, tech support, IT consultancy, SEO, UI/UX design, social media marketing, branding, cloud solutions, cybersecurity, graphic design, motion graphics, IT support, technology solutions">
    <meta name="author" content="AlessionTech">
    <meta property="og:title" content="AlessionTech - Innovating Your Digital Experience">
    <meta property="og:description" content="AlessionTech offers expert web development, app development, digital marketing, creative design, and tech support services. With 8+ years of experience and 50+ successful projects, we deliver tailored solutions for business growth and digital success.">
    <meta property="og:image" content="">
    <meta property="og:url" content="https://alessiontech.com/">
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="AlessionTech - Innovating Your Digital Experience">
    <meta name="twitter:description" content="AlessionTech provides top-tier web development, app development, digital marketing, creative design, and tech support. With over 8 years of experience and 50+ projects, we ensure exceptional results and client satisfaction.">
    <meta name="twitter:image" content="">
    <meta name="robots" content="INDEX,FOLLOW">

    <title>AlessionTech</title>

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php get_theme_url(); ?>../../../data/uploads/alession.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php get_theme_url(); ?>../../../data/uploads/alession.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!--==============================
	    All CSS File
	============================== -->
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/imageRevealHover.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/style.css">

</head>

<body>
 
    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>../../../data/uploads/alession.png" width="60px"  height="60px" alt="Ovation"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li>
                        <a href="<?php get_site_url(); ?>">HOME</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>about-us/">ABOUT US</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>academy/">ACADEMY</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>our-services/">OUR SERVICES</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>our-projects/">OUR PROJECTS</a>
                    </li>


                    <li>
                        <a href="https://blog.alessiontech.com/">OUR BLOG</a>
                    </li>

                    
                </ul>
            </div>
            <div class="sidebar-wrap">
                <h6>1st Floor, Eagle House,</h6>
                <h6>Nairobi,Kenya.</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="mailto:info@alessiontech.com">info@alessiontech.com</a></h6>
            </div>
            <div class="social-btn style3">
                <a href="https://www.facebook.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    </span>
                </a>
                <a href="https://instagram.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    </span>
                </a>
                <a href="https://twitter.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    </span>
                </a>
                <a href="https://www.linkedin.com/company/alessiontech/" target="_blank">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-linkedin"></i></span>
                        <span class="effect-1"><i class="fab fa-linkedin"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout3 bg-white">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>../../../data/uploads/alession.png" width="60px"  height="60px" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
							<ul>
                    <li>
                        <a href="<?php get_site_url(); ?>">HOME</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>about-us/">ABOUT US</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>academy/">ACADEMY</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>our-services/">OUR SERVICES</a>
                    </li>

                    <li>
                        <a href="<?php get_site_url(); ?>our-projects/">OUR PROJECTS</a>
                    </li>


                    <li>
                        <a href="https://blog.alessiontech.com/">OUR BLOG</a>
                    </li>

                    
                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="<?php get_site_url(); ?>contact-us/" class="btn bg-theme text-title">
                                    <span class="link-effect">
                                        <span class="effect-1">WORKS WITH US</span>
                                        <span class="effect-1">WORKS WITH US</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

