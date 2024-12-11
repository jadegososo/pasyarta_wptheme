<?php
/**
 * Template Name: Search Results
 * Description: A custom page template to display search results with pagination.
 */
get_header(); 
?>

<header class="page-header">
        <h1 class="page-title">
            <?php
                printf( esc_html__( 'Search Results for: %s', 'your-theme' ), '<span>' . get_search_query() . '</span>' );
            ?>
        </h1>
        <?php
            // Display the search form
            get_search_form();
        ?>
</header>
<main id="main-content" class="search-page">


    <div class="posts-list">
        <?php
        // Get the current page number
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // Define the custom query to fetch 6 posts per page for search results
        $args = array(
            'posts_per_page' => 6, // Limit to 6 posts per page
            'post_status' => 'publish', // Only published posts
            'paged' => $paged, // Pagination support
            's' => get_search_query(), // Perform search based on query
        );

        $search_query = new WP_Query( $args );

        // Check if there are search results
        if ( $search_query->have_posts() ) :
            while ( $search_query->have_posts() ) : $search_query->the_post();
                ?>
                <article class="post">
                    <!-- Display the featured image -->
                    <div class="post-thumbnail">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('medium'); // 'medium' can be changed to any size
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
            echo '<p>No posts found matching your search.</p>';
        endif;

        // Reset Post Data
        wp_reset_postdata();
        ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php
        echo paginate_links(array(
            'total' => $search_query->max_num_pages, // Total number of pages
            'current' => $paged, // Current page
            'prev_text' => '&laquo; Previous', // Previous page text
            'next_text' => 'Next &raquo;', // Next page text
        ));
        ?>
    </div>
</main>
<div class="destination-ending">
    
</div>

<?php get_footer(); ?>
