<?php 
get_header();
?>

<section class="secondary-banner bg-dark p-5">
    <div class="container">
        <div class="secondary-banner__content text-light">
            <h1 class="text-wrap">Categories</h1>
        </div>
    </div>
</section>

<section class="cat-gradient-bg category-page__featured-categories pt-2 pb-5 overflow-hidden">
            <div class="all-categories row g-1 pb-5">
                <?php 
                    $excludedCategory = single_cat_title('', false);
                    
                    $cat = get_categories(array(
                        'orderby' => 'relevance'
                    ));

                    $cat_amount = count($cat);
                  
                    for($i = 0; $i < $cat_amount; $i++) {
                    if(!isset($cat[$i])) {

                        break;
                    }
                ?>
                    <?php if($cat[$i]->cat_name != $excludedCategory) { ?>
                        <div class="f-category__full__wrapper col-lg-4 col-md-6 col-sm-12 m-0 p-0">
                            <a class="text-decoration-none text-light" href="<?php echo get_category_link($cat[$i]->term_id); ?>">
                            <div class="f-category__full py-0 px-1 m-0">
                                <?php if(get_field('category_image', $cat[$i])) { ?>
                                <img class="center" src="<?php the_field('category_image', $cat[$i]) ?>" alt="" width="800px">
                                <?php } else {?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/category-placeholder.jpg" alt="" width="800px">
                                <?php } ?>
                                <h6 class="py-3 f-category__full__title text-light"><?php echo $cat[$i]->cat_name ?></h6>
                            </div>
                            </a>
                        </div>

                <?php } } ?>
            </div>
            <?php if($cat_amount < count($cat)) { ?>
            <div class="featured-category__button pt-3 pb-5">
                <a href="<?php site_url('/category') ?>" class="btn button-secondary text-light">Load More</a>
            </div>
            <?php }?>
        </div>
    </section>



<?php

get_footer();

?>