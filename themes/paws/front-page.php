<?php get_header() ?>

    <header style="<?php echo has_post_thumbnail() ? 'background-image: url('.get_the_post_thumbnail_url().');' : null ?>" class="main-banner">
        <div class="main-banner__content container text-light">
            <h5 class="main-banner__subtitle"><?php echo get_theme_mod( 'banner-subtitle', 'Lorem, ipsum dolor.' ); ?></h6>
            <h1 class="main-banner__title"><?php echo get_theme_mod( 'banner-title', 'Lorem ipsum dolor sit amet.' ); ?></h1>
            <h3 class="main-banner__desc"><?php echo get_theme_mod( 'banner-desc', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, fugit!' ); ?></h3>
        </div>
    </header>

    <?php 
    $aboutPage = get_page_by_title('about');

    
    ?>

    <section class="front-page__about pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-self-center flex-wrap pe-5 mt-2 mb-2">
                    <h2><?php echo $aboutPage->post_title ?></h2>
                    <p><?php echo $aboutPage->post_excerpt ?  $aboutPage->post_excerpt : wp_trim_words($aboutPage->post_content, 25, '...' ); ?></p>
                    <a href="<?php the_permalink($aboutPage->ID) ?>" class="btn button-secondary text-light">Learn More</a>
                </div>
                <div class="col-lg-6 col-md-6 mt-2 mb-2">
                    <?php if(get_the_post_thumbnail_url($aboutPage->ID)) { ?>
                    <img src="<?php echo get_the_post_thumbnail_url($aboutPage->ID)?>" class="img-fluid rounded" alt="about-image">
                    <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/about-placeholder.jpg" class="img-fluid rounded" alt="about-image">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
        $post_amount = get_theme_mod( 'post-amount', 3 );

        $fPosts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => $post_amount,
            'order' => 'DESC',
            'orderby' => 'date'
        ));

    ?>

    <section class="front-page__featured-posts pt-5 pb-3">
        <div class="container">
            <div class="front-page__heading">
               <h2 class="featured-posts__title"><?php echo get_theme_mod( 'post-title', 'Featured Posts' ); ?></h2>
               <hr class="content-divider">
               <h5 class="featured-posts__subtitle"><?php echo get_theme_mod( 'post-subtitle', 'Lorem ipsum dolor sit.' ); ?></h5>
            </div>

            <div class="featured-posts pb-5">
            <?php while($fPosts->have_posts()) { 
                $fPosts->the_post();
                ?>
                <div class="card" style="width: 23rem;">
                    <div class="card-head px-5 pt-4">
                        <p class="card-post-date"><?php echo get_the_date() ?></p>
                        <?php if(has_post_thumbnail()) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url()?>" class="img-fluid rounded" alt="post image">
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri() ?>/img/featured-post-placeholder.jpg" class="img-fluid rounded" alt="post image">
                        <?php } ?>
                        <p class="mt-3">By <strong><a class="title-link" href="<?php echo esc_url(get_author_posts_url(get_the_author_ID())); ?>"><?php the_author() ?></a></strong> in<strong class="cat-link"> <a href="<?php echo esc_url(get_category_link(get_the_category())); ?>"><?php the_category(', ') ?></a></strong></p>
                    </div>
                    <div class="card-body ps-4">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text"><?php echo has_excerpt() ? get_the_excerpt('') : wp_trim_words(get_the_content(), 20); ?></p><a class="btn btn-sm button-main" href="<?php the_permalink() ?>">Read more</a>
                    </div>
                    
                    <div class="mt-4 card-body featured-post__tags">
                        <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                        foreach($posttags as $tag) { ?>
                            <span class="post-tag px-3 py-2 mb-2 badge btn-secondary"><a class="text-decoration-none text-light" href="<?php echo get_tag_link($tag->term_taxonomy_id) ?>"><?php echo $tag->name ?></a></span>
                            <?php }} ?>
                    </div>
                </div>
                
            <?php }  ?>
            </div>
            <div class="featured-post__button py-5">
                <a href="<?php site_url('/') ?>/blog" class="btn button-secondary text-light">See More</a>
            </div>
        </div>
    </section>

    <section class="front-page__featured-categories pt-5 pb-3">
        <div class="container">
            <div class="front-page__heading">
               <h2 class="featured-categories__title"><?php echo get_theme_mod( 'category-title', 'Featured Categories' ); ?></h2>
               <hr class="content-divider">
               <h5 class="featured-categories__subtitle"><?php echo get_theme_mod( 'category-subtitle', 'Check out some of our categories' ); ?></h5>
            </div>
            <div class="featured-categories pb-5">
                <?php 

                    $cat = get_categories(array(
                        'orderby' => 'relevance'
                    ));

                    $cat_amount = get_theme_mod( 'category-amount', 3 );
                  
                    for($i = 0; $i < $cat_amount; $i++) {
                    if(!isset($cat[$i])) {

                        break;
                    }
                ?>
                    
                    <a class="text-decoration-none text-light" href="<?php echo get_category_link($cat[$i]->term_id); ?>">
                        <div class="f-category__wrapper">
                            <div class="f-category">
                                <?php if(get_field('category_image', $cat[$i])) { ?>
                                <img src="<?php the_field('category_image', $cat[$i]) ?>" alt="" width="200px" height="200px">
                                <?php } else {?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/category-placeholder.jpg" alt="" width="200px" height="200px">
                                <?php } ?>
                                <h6 class="py-2 f-category__title text-light"><?php echo $cat[$i]->cat_name ?></h6>
                            </div>
                        </div>
                    </a>

                <?php } ?>
            </div>
            <div class="featured-category__button pt-3 pb-5">
                <a href="<?php site_url('/') ?>/category" class="btn button-secondary text-light">See More</a>
            </div>
        </div>
    </section>

<?php get_footer() ?>