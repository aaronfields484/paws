<?php


get_header();
?>

<section class="page-not-found pt-5 my-5 d-flex justify-content-center">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 d-flex align-self-center flex-wrap">
                <h1>404 <br> Page Not Found</h1>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri() ?>/img/sad-doggo.jpg" height="600px" width="600px" class="img-fluid rounded" alt="404-image">
            </div>
        </div>
        <form role="search" action="/" method="">
            <div class="ml-auto input-group">
                <input name="s" value="<?php echo get_search_query() ?>" type="search" class="form-control form-control-lg" placeholder="Search For" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn button-main" type="submit">
                Search
            </button>
            </div>
        </form>
        <div class="page-not-found__button py-5">
                <a href="<?php echo site_url('/') ?>" class="btn button-secondary text-light">Back To Home</a>
        </div>
    </div>
</section>

<?php
get_footer();
