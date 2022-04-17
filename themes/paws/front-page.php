<?php get_header() ?>

    <header class="main-banner">
        <div class="main-banner__content container text-light">
            <h5 class="main-banner__subtitle">Lorem, ipsum dolor.</h6>
            <h1 class="main-banner__title">Lorem ipsum dolor sit amet.</h1>
            <h3 class="main-banner__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, fugit!</h3>
        </div>
    </header>

    <section class="front-page__about pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-self-center flex-wrap pe-5 mt-2 mb-2">
                    <h2>About</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis recusandae iure nihil dicta minus eligendi dolore inventore quisquam, animi unde magni numquam voluptatem perferendis laborum.</p>
                    <button class="btn button-secondary text-light">Learn More</button>
                </div>
                <div class="col-lg-6 col-md-6 mt-2 mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/img/about-placeholder.jpg" class="img-fluid rounded" alt="about-image">
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>