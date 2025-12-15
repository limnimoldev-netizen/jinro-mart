<?php get_header(); ?>

<section class="hero-banner">
    <div class="hero-overlay">
        <div class="hero-content">
            <h1>Refresh Your Day with Korea’s Favorite Drinks at<br>
                <span>JinRo Mart (진로마트)</span>
            </h1>
            <p>
                From fruity soju to premium teas and refreshing juices —<br>
                discover flavors you’ll love. Quality guaranteed.
            </p>

            <form class="hero-search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="search" name="s" placeholder="Search here..." />
            </form>
        </div>
    </div>
</section>

<section class="categories">
    <h1>Categories</h1>
    <div class="products">
        <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
        </div>
        <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
        </div>
        <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
        </div>
        <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
        </div>
        
        
    </div>
</section>

<section class="Feature">
    <h1>Feature Products</h1>
    <div class="products">
    <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
    </div>
    <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
    </div>

    <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
    </div>
    <div class="items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/product.png" alt="<?php bloginfo('jinRo Mart'); ?>">
            <p class="name">Jinro Soju</p>
    </div>
    
</section>





<?php get_footer(); ?>
