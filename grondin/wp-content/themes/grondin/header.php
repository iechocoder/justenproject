<!DOCTYPE html>
<html>
<!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
 <?php wp_head(); ?>
</head>

<body id="page-name">
<div id="container-fluid">

<!--header start -->
<div id="header-wrap">
    <div class="header-top-wrap">
        <div class="container">
            <div class="header-top">We are hiring. View available positions.</div>
        </div>
    </div>
    <div class="container">
        <header id="header">
            <div class="logos-contain">
                <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-60.png" alt=""></a>
            </div>
            <a href="#" class="menu-mobile"></a>
            <div class="nav-wrap">
                <div class="nav-top">
                    <?php
					if ( has_nav_menu( 'top' ) ) {
						 wp_nav_menu( array( 'theme_location' => 'top' ) );
					} 
					?> 
					
                </div>
                <div class="nav-main">
                    <?php
					if ( has_nav_menu( 'mainmenu' ) ) {
						 wp_nav_menu( array( 'theme_location' => 'mainmenu' ) );
					} 
					?> 
                </div>
            </div>
        </header>
    </div>
</div>
<!--header end -->