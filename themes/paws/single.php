<?php
get_header();
?>
<?php if(have_posts()): the_post(); ?>
<section style="<?php echo has_post_thumbnail() ? 'background-image: url('.get_the_post_thumbnail_url().');' : null ?>" class="secondary-banner bg-dark p-5 mb-5">
    <div class="container">
        <div class="secondary-banner__content text-light">
            <h1 class="text-wrap"><?php echo get_the_title(); ?></h1>
            <p> 
                <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?> 
            </p>
            <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
        </div>
    </div>
</section>

<section class="content-holder">
    <div class="container">
    <article class="post py-5">


<div class= "article pb-5"> 
<?php the_content(); ?>
</div>
<?php comments_template(); ?> 
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
</article> 
    </div>
</section>

<?php echo get_template_part('template-parts/content', 'more') ?>

<?php endif; ?>

<?php
get_footer();
