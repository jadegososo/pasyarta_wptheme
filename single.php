<?php
    get_header();
?>

<div class="guide-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="blog-image">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', array( 'class' => 'featured-image' ) ); ?>
            <?php endif; ?>
        </div>
        <h1 class="blog-title"><?php the_title(); ?></h1>
        <div class="blog-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
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

<!-- Add Comment Section -->
<div class="comments-section">
    <?php
        // Display comments and the comment form
        if (comments_open() || get_comments_number()) :
            comments_template(); // This will load the comment form and existing comments
        endif;
    ?>
</div>

<?php
    get_footer();
?>