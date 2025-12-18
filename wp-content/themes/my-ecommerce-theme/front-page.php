<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    <div class="coontainer-categories">
        <div class="category-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/tea3.png" alt="<?php bloginfo('Tea'); ?>">
            <p>Tea</p>
        </div>
        
        <div class="category-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/milk.png" alt="<?php bloginfo('Milk & Cheese'); ?>">
            <p>Milk/Cheese</p>
        </div>

        <div class="category-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/cafe.png" alt="<?php bloginfo('Coffee'); ?>">
            <p>Coffee</p>
        </div>

        <div class="category-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/juice3.png" alt="<?php bloginfo('Juice'); ?>">
            <p>Juice</p>
        </div>

        <div class="category-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/jinro3.png" alt="<?php bloginfo('soda'); ?>">
            <p>Soda</p>
        </div>
    </div>
        

</section>

    <section class="Feature">
        <h1>Feature Products</h1>
    
        <div class="container-products">
            <div class="product-card">
                <div class="items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/jinro3.png" alt="<?php bloginfo('jinro'); ?>">
                </div>
                
                <div class="rating">
                    <div class="container-icon">
                        <span>korea</span>
                        <div class="icon-rate">
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="usd-name">
                        <h3 class="name-pro">Jinro Chamisul - Peach</h3>
                        <span class="detail">360ml that was  to embody the unique <br> sweet taste.</span>
                        <h3 class="usd">USD 10.65</h3>
                    </div>
                        
                </div>
                <div class="btn-add">
                    <button class="card-btn">Add to card</button>
                </div>
            </div>

            
            
            <div class="product-card">
                <div class="items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/jinro3.png" alt="<?php bloginfo('jinro'); ?>">
                </div>
                
                <div class="rating">
                    <div class="container-icon">
                        <span>korea</span>
                        <div class="icon-rate">
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="usd-name">
                        <h3 class="name-pro">Jinro Chamisul - Peach</h3>
                        <span class="detail">360ml that was  to embody the unique <br> sweet taste.</span>
                        <h3 class="usd">USD 10.65</h3>
                    </div>
                        
                </div>
                <div class="btn-add">
                    <button class="card-btn">Add to card</button>
                </div>
            </div>


            <div class="product-card">
                <div class="items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/jinro3.png" alt="<?php bloginfo('jinro'); ?>">
                </div>
                
                <div class="rating">
                    <div class="container-icon">
                        <span>korea</span>
                        <div class="icon-rate">
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="usd-name">
                        <h3 class="name-pro">Jinro Chamisul - Peach</h3>
                        <span class="detail">360ml that was  to embody the unique <br> sweet taste.</span>
                        <h3 class="usd">USD 10.65</h3>
                    </div>
                        
                </div>
                <div class="btn-add">
                    <button class="card-btn">Add to card</button>
                </div>
            </div>


            <div class="product-card">
                <div class="items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/jinro3.png" alt="<?php bloginfo('jinro'); ?>">
                </div>
                
                <div class="rating">
                    <div class="container-icon">
                        <span>korea</span>
                        <div class="icon-rate">
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="usd-name">
                        <h3 class="name-pro">Jinro Chamisul - Peach</h3>
                        <span class="detail">360ml that was  to embody the unique <br> sweet taste.</span>
                        <h3 class="usd">USD 10.65</h3>
                    </div>
                        
                </div>
                <div class="btn-add">
                    <button class="card-btn">Add to card</button>
                </div>
            </div>
        </div>  
    </section>

    <section class="Benefit">
        <h1>Special Benefit</h1>
        <div class="container-benefit">
           
            <div class="delivery">
                <div class="icon-car">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="content-delivery">
                    <h2>Free Delivery</h2>
                    We offer fast and reliable delivery so you can enjoy 
                    your favorite Korean drinks and snacks without waiting too long. 
                    Shopping at JinRo Mart becomes easy and convenient with quick delivery to your door.
                </div>
            </div>
            
            <div class="delivery">
                <div class="icon-car">
                <i class="fas fa-fire-alt"></i>
                </div>
                <div class="content-delivery">
                    <h2>Hot Items</h2>
                    We offer fast and reliable delivery so you can enjoy 
                    your favorite Korean drinks and snacks without waiting too long. 
                    Shopping at JinRo Mart becomes easy and convenient with quick delivery to your door.
                </div>
            </div>

            <div class="delivery">
                <div class="icon-car">
                    <i class="fas fa-star"></i>
                </div>
                <div class="content-delivery">
                    <h2>Best Sellers</h2>
                    We offer fast and reliable delivery so you can enjoy 
                    your favorite Korean drinks and snacks without waiting too long. 
                    Shopping at JinRo Mart becomes easy and convenient with quick delivery to your door.
                </div>
            </div>
       
        </div>
            
        
            
    </section>

    <section>
        <h1>Customer Stories</h1>
        <div class="container-customer">
            <div class="name-custom">
                <div class="img-pf">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/pf1.png" alt="<?php bloginfo('jinRo Mart'); ?>">
                </div>
                
                <div class="name-pf">
                    <h3>Jeong-hwa</h3>
                    <span>Korean</span>
                    <p>Customer service was fantastic. They helped me choose the right product, guided me through the options,
                        and made sure I was confident in my choice. 
                        I couldn’t be happier with my purchase.</p>
                </div>

            </div>

            <div class="name-custom">
                <div class="img-pf">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/pf3.png" alt="<?php bloginfo('jinRo Mart'); ?>">
                </div>
                
                <div class="name-pf">
                    <h3>Jeong-hwa</h3>
                    <span>Korean</span>
                    <p>Customer service was fantastic. They helped me choose the right product, guided me through the options,
                        and made sure I was confident in my choice. 
                        I couldn’t be happier with my purchase.</p>
                </div>

            </div>

            <div class="name-custom">
                <div class="img-pf">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/pf2.png" alt="<?php bloginfo('jinRo Mart'); ?>">
                </div>
                
                <div class="name-pf">
                    <h3>Jeong-hwa</h3>
                    <span>Korean</span>
                    <p>Customer service was fantastic. They helped me choose the right product, guided me through the options,
                        and made sure I was confident in my choice. 
                        I couldn’t be happier with my purchase.</p>
                </div>
                </div>
            </div>   
        </div>
            
    </section>

    <section class="newsletter">
    <div class="newsletter-box">

        <div class="newsletter-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/mart1.png" alt="shop">
        </div>

        <div class="newsletter-content">
            <h2>Subscribe Newsletter</h2>
            <p>Enter your email below for daily updates</p>

            <form class="newsletter-form" method="post" action="">
                <input type="email" name="newsletter_email" placeholder="Enter your email" required>
                <button type="submit">Subscribe now</button>
            </form>
        </div>

    </div>
</section>


 

    




<?php get_footer(); ?>
