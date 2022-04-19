<?php get_header() ?>

    <header class="main-banner">
        <div class="main-banner__content container text-light">
            <h5 class="main-banner__subtitle"><?php echo get_theme_mod( 'banner-subtitle', 'Lorem, ipsum dolor.' ); ?></h6>
            <h1 class="main-banner__title"><?php echo get_theme_mod( 'banner-title', 'Lorem ipsum dolor sit amet.' ); ?></h1>
            <h3 class="main-banner__desc"><?php echo get_theme_mod( 'banner-des ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, fugit!' ); ?></h3>
        </div>
    </header>

    <section class="front-page__about pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-self-center flex-wrap pe-5 mt-2 mb-2">
                    <h2>About</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis recusandae iure nihil dicta minus eligendi dolore inventore quisquam, animi unde magni numquam voluptatem perferendis laborum.</p>
                    <a href="#" class="btn button-secondary text-light">Learn More</a>
                </div>
                <div class="col-lg-6 col-md-6 mt-2 mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/img/about-placeholder.jpg" class="img-fluid rounded" alt="about-image">
                </div>
            </div>
        </div>
    </section>

    <section class="front-page__featured-posts pt-5 pb-3">
        <div class="container">
            <div class="front-page__heading">
               <h2>Featured Posts</h2>
               <hr>
               <h5>Lorem ipsum dolor sit.</h5>
            </div>
            <div class="featured-posts pb-5">
                <div class="card" style="width: 23rem;">
                    <div class="card-head px-5 pt-4">
                        <p class="card-post-date">October 2nd, 2021</p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/featured-post-placeholder.jpg" class="rounded card-img-top" alt="...">
                        <p class="mt-3">By <strong class="title-link">Author</strong> in <strong class="title-link">Category</strong></p>
                    </div>
                    <div class="card-body ps-4">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue.</p>
                    </div>
                    <div class="mt-4 card-body featured-post__tags">
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                    </div>
                </div>
                <div class="card" style="width: 23rem;">
                    <div class="card-head px-5 pt-4">
                        <p class="card-post-date">October 2nd, 2021</p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/featured-post-placeholder.jpg" class="rounded card-img-top" alt="...">
                        <p class="mt-3">By <strong class="title-link">Author</strong> in <strong class="title-link">Category</strong></p>
                    </div>
                    <div class="card-body ps-4">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue.</p>
                    </div>
                    <div class="mt-4 card-body featured-post__tags">
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                    </div>
                </div>
                <div class="card" style="width: 23rem;">
                    <div class="card-head px-5 pt-4">
                        <p class="card-post-date">October 2nd, 2021</p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/featured-post-placeholder.jpg" class="rounded card-img-top" alt="...">
                        <p class="mt-3">By <strong class="title-link">Author</strong> in <strong class="title-link">Category</strong></p>
                    </div>
                    <div class="card-body ps-4">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue.</p>
                    </div>
                    <div class="mt-4 card-body featured-post__tags">
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                        <span class="post-tag px-3 py-2 badge btn-secondary">Tag</span>
                    </div>
                </div>
            </div>
            <div class="featured-post__button py-5">
                <a href="#" class="btn button-secondary text-light">Learn More</a>
            </div>
        </div>
    </section>

    <section class="front-page__featured-categories pt-5 pb-3">
        <div class="container">
            <div class="front-page__heading">
               <h2>Featured Posts</h2>
               <hr>
               <h5>Lorem ipsum dolor sit.</h5>
            </div>
            <div class="featured-categories pb-5">
                <div class="f-category">
                    <img src="<?php echo get_template_directory_uri() ?>/img/category-placeholder.jpg" alt="" width="200px" height="200px">
                    <h6 class="py-2 f-category__title text-light">Category Name</h6>
                </div>
                <div class="f-category">
                    <img src="<?php echo get_template_directory_uri() ?>/img/category-placeholder.jpg" alt="" width="200px" height="200px">
                    <h6 class="py-2 f-category__title text-light">Category Name</h6>
                </div>
                <div class="f-category">
                    <img src="<?php echo get_template_directory_uri() ?>/img/category-placeholder.jpg" alt="" width="200px" height="200px">
                    <h6 class="py-2 f-category__title text-light">Category Name</h6>
                </div>
            </div>
            <div class="featured-category__button pt-3 pb-5">
                <a href="#" class="btn button-secondary text-light">Learn More</a>
            </div>
        </div>
    </section>

<?php get_footer() ?>