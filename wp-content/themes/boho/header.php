<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container" style="padding-top:0;">

<div id="header">
    <div id="hero">The Bohemian Embassy</div>
    <div class="logo">The Bohemian Embassy</div>
</div>

<div id="wrapper">

<div id="container3">
<div class="navtop">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => 'wp_page_menu', 'container' => 'div', 'container_class' => 'navmenu', 'menu_class' => 'navmenu', 'show_home' => 'Home' ) ); ?>
</div>
</div>