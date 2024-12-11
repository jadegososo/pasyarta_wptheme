<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            Comments
        </h2>

        <ol class="comment-list">
            <?php
            // List the comments
            wp_list_comments( array(
                'style'      => 'ol', // List format
                'short_ping' => true, // Short pingbacks
                'avatar_size' => 60, // Set the size of comment avatars
            ) );
            ?>
        </ol>

        <!-- Pagination for comments -->
        <?php the_comments_pagination( array(
            'prev_text' => 'Older comments',
            'next_text' => 'Newer comments',
        ) ); ?>

    <?php endif; // If no comments ?>

    <?php
    // Comment form
    if ( comments_open() ) :
        comment_form(); // Display the comment form
    else :
        echo '<p>Comments are closed for this post.</p>';
    endif;
    ?>
</div><!-- .comments-area -->
