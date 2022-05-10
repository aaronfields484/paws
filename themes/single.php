<?php
get_header();
?>

<section class="content-holder">

<article class="post">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class= "article"> 
            <div class="thumbnail">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                ?>
            </div>
        <h2> <?php echo get_the_title(); ?> </h2>
        <p> 
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small> 
        </p>
        <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

        <?php the_content(); ?>
        <?php comments_template(); ?> 
        </div>

        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
</article>

</section>

<?php
get_footer();
