<?php
get_header();
?>

<div class="main-content">
    <div class="main-pic">
        <div class="main-text">
            <h2>Start Discovering</h2>
            <h1>Your Next Journey</h1>        
            <button><a href="<?php echo site_url('/destinations'); ?>">Explore Travel Spots</a></button>
        </div>
    </div>
    <div class="main-offers">
        <div class="find-tourist-guide">
            <p>Providing unforgettable travel experiences that inspire adventure, create memories, and connect you with the world&#8217;s most beautiful destinations.
            </p>
            <a href="<?php echo site_url('/travel-guide'); ?>" class="green-button">
                View Guides
            </a>
        </div>
        <div class="offer-features">
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
    </div>
    <div class="featured-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beach2.jpg" alt="Beach Background">
        <i class="fa-solid fa-van-shuttle"></i>
        <p>
            Discover the beauty of Eastern Visayas with Pasyar Ta! From breathtaking beaches to hidden gems and rich cultural heritage, we&rsquo;re here to guide you every step of the way. Let&rsquo;s create unforgettable memories as you explore the wonders of this vibrant region. Your adventure starts here!
        </p>
        <a href="<?php echo site_url('/destinations'); ?>"  class="green-button">Discover New Adventures</a>
    </div>
    <div class="short-message">
        <h3>Uncover the wonders of the region!</h3>
        <p class="gold-text">
            Let Pasyar Ta guide you to unforgettable experiences in Eastern Visayas!
        </p>
    </div>

    <div class="destinations">
        <h3>Destinations</h3>
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

    <div class="main-ending">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pintados_festival.jpg" alt="Beach Background">
        <div class="ending-text">
            <h3>The Eastern Visayas Culture</h3>
            <p>               
                Eastern Visayas is a region of vibrant traditions, rich history, and warm, resilient people whose spirit shines through in every aspect of their culture. Known for colorful festivals like the Pintados-Kasadyaan and Sangyaw, it celebrates heritage through music, dance, and art. The region’s historical landmarks, including the MacArthur Landing Memorial and centuries-old churches, tell stories of courage and faith. Visitors can savor unique delicacies such as binagol, moron, and suman latik while exploring breathtaking landscapes like the iconic San Juanico Bridge, pristine beaches, and majestic waterfalls. Through its captivating history, stunning scenery, and inspiring stories of unity and resilience, Eastern Visayas offers an enriching experience that showcases the true heart of Filipino culture.
            </p>
            <a href="<?php echo site_url('/about-us'); ?>" class="green-button">Learn More</a>
        </div>
        
    </div>

</div>

<?php
get_footer();
?>