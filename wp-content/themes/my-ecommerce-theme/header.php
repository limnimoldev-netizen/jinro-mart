<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo-menu">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="<?php bloginfo('jinRo Mart'); ?>">
        </div>
        <div class="search-wrapper">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="search-form">
                <button type="submit" class="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input
                    type="search"
                    class="search-input"
                    placeholder="Search here..."
                    value="<?php echo get_search_query(); ?>"
                    name="s">
            </form>
        </div>

        <div class="icon">
            <a href="">
                <i class="fas fa-user"></i>
            <span>login/sigup</span>
            </a>
        </div>

        <div class="icon1">
            <a href="">
                <i class="fas fa-shopping-bag"></i>
            </a>
        </div>

        <!-- <div class="lang-switch">
            <a href="?lang=en">EN</a>
            <a href="?lang=kh">KH</a>
            <a href="?lang=ko">KO</a>
        </div> -->

    </div>


        <div class="menu">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Categories</a>
                </li>
                <li>
                    <a href="">Products</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
        
     </div>

</header>
<main>