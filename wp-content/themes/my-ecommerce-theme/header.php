<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- <h1><?php bloginfo('name'); ?></h1> -->
         <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="<?php bloginfo('jinRo Mart'); ?>">
        </div>
        <?php wp_nav_menu(['theme_location'=>'primary']); ?>
        <div class="icon-container">
            <div class="signin">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <span>login/signup</span>
                
            </div>
            <div class="icon">
                <i class="fas fa-shopping-bag"></i>
            </div>
        </div> 
    </header>

    

<main>