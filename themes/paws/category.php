<?php
get_header();
?>

<section class="secondary-banner bg-dark p-5 mb-5">
    <div class="container">
        <div class="secondary-banner__content text-light">
            <h1 class="text-wrap">Category</h1>
        </div>
    </div>
</section>

<section class="archive-content py-5 my-5">
    <div class="container">
        <div class="archive-content__description mb-5">
            <h1 class="mb-2"><?php single_cat_title() ?></h1>
            <hr class="content-divider">
            <h4><?php the_archive_description() ?></h4>
        </div>
        <ul class="list-group mb-5">
            <?php while(have_posts()) { 
                the_post();
            ?>
            <a href="<?php the_permalink() ?>" class="text-decoration-none text-dark">
                <li class="archive-content__list list-group-item my-2">
                    <div class="row">
                        <div class="col-lg-3 d-flex align-self-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/about-placeholder.jpg" class="img-fluid rounded" alt="about-image"> 
                        </div>
                        <div class="col d-flex align-self-center flex-wrap mt-3">
                            <h3><?php the_title() ?></h3>
                            <p><?php echo has_excerpt() ?  the_excerpt() : wp_trim_words(get_the_content(), 45, '...' ); ?></p> 
                        </div>
                    </div>
                </li>
            </a>
            <?php } ?>
        </ul>
    </div>
</section>

<section class="more-content">
    <div class="row">
        <div class="col-lg-6 m-0 p-0 cat-gradient-bg">
            <div class="container">
                
                <?php 
                    $post_amount = get_theme_mod( 'post-amount', 3 );

                    $fPosts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => $post_amount,
                        'order' => 'DESC',
                        'orderby' => 'date'
                    ));
                ?>

                <div class="front-page__heading mb-5">
                    <h2 class="my-3 featured-categories__title">More Posts</h2>
                    <hr class="my-3 content-divider">
                </div>

                <div class="swiper mySwiper">
                    <div class="pb-5 swiper-wrapper">
                        <?php while($fPosts->have_posts()) { 
                            $fPosts->the_post();
                        ?>
                            <?php if(has_post_thumbnail()) { ?>
                                    <div class="swiper-slide"><a class="text-decoration-none text-dark" href="<?php the_permalink() ?>"><h3 class="py-2"><?php the_title() ?></h3><img src="<?php echo get_the_post_thumbnail_url()?>" alt="post image" width="250px" height="250px"></a></div>
                                    <?php } else { ?>
                                    <div class="swiper-slide"><a class="text-decoration-none text-dark" href="<?php the_permalink() ?>"><h3 class="py-2"><?php the_title() ?></h3><img src="<?php echo get_template_directory_uri() ?>/img/featured-post-placeholder.jpg" width="250px" height="250px" alt="post image"></a></div>
                            <?php } } ?>
                    </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                </div>
                    <div class="featured-category__button pt-3 pb-5">
                        <a href="<?php echo site_url('/blog') ?>" class="btn button-secondary text-light">Show All</a>
                    </div>
            </div>
        </div>

        <div class="col-lg-6 m-0 p-0 bg-section">
            <div class="container">
                <div class="front-page__heading mb-5">
                    <h2 class="my-3 featured-categories__title">More categories</h2>
                    <hr class="my-3 content-divider">
                </div>
                <div class="swiper mySwiper">
                    <div class="pb-5 swiper-wrapper">
                        <?php 
                            $excludedCategory = single_cat_title('', false);
                            
                            $cat = get_categories(array(
                                'orderby' => 'relevance'
                            ));

                            $cat_amount = get_theme_mod( 'category-amount', 3 );
                        
                            for($i = 0; $i < $cat_amount; $i++) {
                            if(!isset($cat[$i])) {

                                break;
                            }
                        ?>
                            <?php if($cat[$i]->cat_name != $excludedCategory) { ?>
                                <div class="swiper-slide">
                                    <a class="text-decoration-none text-dark" href="<?php echo get_category_link($cat[$i]->term_id); ?>">
                                        <h3 class="py-2"><?php echo $cat[$i]->cat_name ?></h3>
                                        <?php if(get_field('category_image', $cat[$i])) { ?>
                                        <img src="<?php the_field('category_image', $cat[$i]) ?>" alt="" width="250px" height="250px">
                                        <?php } else {?>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/category-placeholder.jpg" alt="" width="250px" height="250px">
                                        <?php } ?>
                                    </a>
                                </div>
                        <?php } } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="featured-category__button pt-3 pb-5">
                    <a href="<?php echo site_url('/category') ?>" class="btn button-secondary text-light">Show All</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();
