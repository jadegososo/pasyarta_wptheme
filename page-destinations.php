<?php
    /**
     * Template Name: Destinations
     * Description: A custom page template to display all posts with pagination.
     */
    get_header(); 
?>

<header class="page-header">
    <h2 class="page-title">Destinations</h2>
    <?php
        get_search_form();
    ?>
</header>
<main id="main-content" class="destinations-page">
    <div class="posts-list">
        <?php
            // Get the current page number
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Define the custom query to fetch 6 posts per page
            $args = array(
                'posts_per_page' => 6, // Limit to 6 posts per page
                'post_status' => 'publish', // Only published posts
                'paged' => $paged, // Pagination support
            );

            $all_posts_query = new WP_Query( $args );

            // Check if there are posts
            if ( $all_posts_query->have_posts() ) :
                while ( $all_posts_query->have_posts() ) : $all_posts_query->the_post();
        ?>

        <article class="post">
            <!-- Display the featured image -->
            <div class="post-thumbnail">
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail('medium'); // 'medium' can be changed to any size, e.g., 'full', 'large'
                endif;
                ?>
            </div>

            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>
        </article>

        <?php
            endwhile;
            
            else :
                echo '<p>No posts found.</p>';
            endif;

            // Reset Post Data
            wp_reset_postdata();
        ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php
            echo paginate_links(array(
                'total' => $all_posts_query->max_num_pages, // Total number of pages
                'current' => $paged, // Current page
                'prev_text' => 'Previous', // Previous page text
                'next_text' => 'Next', // Next page text
            ));
        ?>
    </div>
</main>

<div class="destination-ending">
    
</div>

<?php get_footer(); ?>
