<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Poppins" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wordpress' ); ?></a>

	<header>
        <div class="wrapper">
            <div class="nav-block-header">
                <div class="btn-block">
                    <button class="main-btn btn-open">
                        <i class="fas fa-bars"></i>
                    </button>
                    <button class="main-btn btn-closed">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <nav id="nav" class="nav none">
                    <ul class="menu">
                        <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>

                    </ul>
                </nav>
            </div>

            <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/Logo.png" alt="main_logo">
            </a>
            <div class="header-search">
                <i class="fas fa-search"></i>
            </div>
        </div>

	</header><!-- -->

	<div id="content" class="site-content">
