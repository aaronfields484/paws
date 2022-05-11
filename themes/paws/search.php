<?php
get_header();
?>

<section class="secondary-banner bg-dark p-5 mb-5">
    <div class="container">
        <div class="secondary-banner__content text-light">
            <h1 class="text-wrap">Search</h1>
        </div>
    </div>
</section>

<section class="archive-content py-5 my-5">
    <div class="container">
        <div class="archive-content__description mb-5">
            <h2 class="">You searched for: '<?php echo $_GET['s'] ?>'</h2>
            <hr class="content-divider">
            <h3 class="mt-4">Search Results:</h3>
        </div>
        <ul class="list-group mb-5 px-5">
            <?php while(have_posts()) { 
                the_post();
            ?>
            <a href="<?php the_permalink() ?>" class="text-decoration-none text-dark">
                <li class="archive-content__list list-group-item my-3">
                    <div class="row">
                        <div class="col-lg-3 d-flex align-self-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/about-placeholder.jpg" class="img-fluid rounded" alt="about-image"> 
                        </div>
                        <div class="col-lg-8 d-flex align-self-center flex-wrap mt-3">
                            <h3><?php the_title() ?></h3>
                            <p><?php echo has_excerpt() ?  the_excerpt() : wp_trim_words(get_the_content(), 45, '...' ); ?></p> 
                        </div>
                        <div class="col d-flex align-self-center flex-wrap mt-3">
                            <span class="fs-5 py-2 position-absolute top-0 start-100 translate-middle badge rounded-pill <?php echo get_post_type() == 'post' ? 'bg-danger' : 'bg-info' ?> ">
                                <?php echo get_post_type() ?>
                            </span>
                         </div>
                    </div>
                </li>
            </a>
            <?php } ?>
        </ul>
    </div>
    <?php get_template_part( 'template-parts/content', 'pagination' ); ?>
</section>

<?php get_template_part( 'template-parts/content', 'more' ); ?>

<?php

get_footer();
