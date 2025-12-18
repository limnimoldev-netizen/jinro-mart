<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
<section class="about-wrapper">

  <div class="about-hero">
    <div class="overlay">
      <h1>About Us</h1>
      <p>Bringing Korean Taste to Everyday Life</p>
    </div>
  </div>

  <div class="about-cards">
    <div class="card">
      <h1>Our Mission</h1>
      <p>
        At <?php bloginfo('name'); ?>, our mission is to bring the authentic taste of Korea to your doorstep. 
        We are committed to providing high-quality beverages, snacks, and products while ensuring a convenient 
        and enjoyable shopping experience for our customers. Our goal is to connect you with the flavors you love 
        and make every visit to our mart a delightful experience.
      </p>
    </div>

    <div class="card">
      <h1>Our Vision</h1>
      <p>
        Our journey began with a small idea: to make Korean products easy and accessible for everyone. 
        What started as a simple online store with only a few items has steadily grown through customer support and trust. 
        Over time, we expanded our product range, improved our service, and built stronger connections with reliable suppliers. 
        Today, <?php bloginfo('name'); ?> continues to grow with the same passion we had from the beginning—offering authentic 
        Korean goods and a smooth, enjoyable shopping experience for all.
      </p>
    </div>
  </div>

  <div class="journey-section">
    <h1>Our Journey</h1>
    <div class="content-box">
      <div class="timeline">
        <div class="time-box">
          <span>2022</span>
          <p><?php bloginfo('name'); ?> started as a small Korean grocery shop, sharing authentic Korean flavors with a few classic drinks and snacks.</p>
        </div>

        <div class="time-box">
          <span>2023</span>
          <p>Expanded our products with a variety of Korean beverages, including soju, rice drinks, tea, and fruit juices. Focused on freshness and quality.</p>
        </div>

        <div class="time-box">
          <span>2024</span>
          <p>Welcomed hundreds of happy customers, held tasting events, and became a place for Korean drink lovers to discover new flavors.</p>
        </div>

        <div class="time-box">
          <span>Today</span>
          <p>We continue to grow, offering an even wider selection of Korean beverages, teas, and juices while keeping quality and customer-first service at the heart of everything.</p>
        </div>
      </div>

      
    </div>
  </div>

  <div class="highlight-pro">
    <h2 class="section-title">Story Highlights</h2>
    <div class="highlight-cards">

      <div class="highlight-card animate">
        <span class="number">5+</span>
        <h3>Years of Passion</h3>
        <p>Serving Korean products with care, quality, and consistency since our first day.</p>
      </div>

      <div class="highlight-card animate">
        <span class="number">500+</span>
        <h3>Products Available</h3>
        <p>A wide range of drinks, snacks, and daily groceries from Korea.</p>
      </div>

      <div class="highlight-card animate">
        <span class="number">1K+</span>
        <h3>Happy Customers</h3>
        <p>Trusted by customers who return and recommend <?php bloginfo('name'); ?>.</p>
      </div>

      <div class="highlight-card animate">
        <span class="number">100%</span>
        <h3>Quality Promise</h3>
        <p>We focus on freshness, safety, and authentic Korean taste.</p>
      </div>

    </div>
  </div>

</section>

<?php get_footer(); ?>
