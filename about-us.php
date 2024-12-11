<?php
    /**
     * Template Name: About Us
     * Description: A custom page template for about us page.
     */
    get_header(); 
?>

<div class="about-main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/beach3.jpg'); background-position: center; background-size:cover">
    <div class="about-text">
        <h2>About Us</h2>
        <p>
            Welcome to Pasyar Ta, your ultimate guide to discovering the beauty, culture, and hidden gems of the Philippines.
            <br><br>
            We are a passionate team of travelers and storytellers who believe that every place has a unique story to tell. Whether you're looking to explore pristine beaches, vibrant festivals, mouthwatering local cuisines, or historic landmarks, Pasyar Ta is here to inspire your next adventure.
            <br><br>
            Our mission is simple:
            <br><br>
            To showcase the wonders of the Philippines.
            To make travel planning easy and exciting.
            To connect locals and travelers, one journey at a time.
            At Pasyar Ta, we’re more than just a travel guide; we’re your travel companion. We offer curated recommendations, helpful tips, and authentic experiences to make your trips unforgettable.
            <br><br>
            So, whether you’re a seasoned explorer or someone looking for your next getaway, we invite you to come and "Pasyar Ta" — let’s roam, discover, and celebrate the Philippines together!
        </p>
    </div>   
</div>

<div class="offer-features center-items">
    <div class="guide-card">
        <i class="fa-solid fa-camera"></i>
        <h3>Stories to share for years to come</h3>
        <p>
            Discover destinations that inspire, create bonds, and leave you with tales worth telling for a lifetime.
        </p>
    </div>
    <div class="guide-card">
        <i class="fa-solid fa-clock"></i>
        <h3>Here for you around the clock</h3>
        <p>
            Whether day or night, we're always ready to assist, ensuring your journey is smooth and worry-free.
        </p>
    </div>
    <div class="guide-card">
        <i class="fa-solid fa-map-location-dot"></i>
        <h3>With you every step, from start to finish.</h3>
        <p>
            Count on us for seamless support, ensuring a hassle-free experience at every stage.
        </p>
    </div>
</div>

<div class="destinations gray-bg">
        <h3>You might also like</h3>
        <div class="posts-container">
            <?php
                // Custom query to fetch 3 latest posts
                $args = array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish', // Only show published posts
                );
                $latest_posts = new WP_Query($args);

                // Check if there are any posts
                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>

            <div class="post-card">
                <div class="post-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="post-content">
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>
                </div>
            </div>
            
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the query
                else : echo '<p>No posts found</p>';
                endif;
            ?>
        </div>
        <a href="<?php echo site_url('/destinations'); ?>" class="white-text green-button">View More</a>
</div>

<?php
    get_footer();
?>