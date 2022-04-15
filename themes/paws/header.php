<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg navbar-dark border-bottom border-black small custom-nav border-bottom">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url('/') ?>">
        Paws
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="main-menu">
    <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav m-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
    ?>
    <form role="search" action="/" method="" class="d-flex">
        <div class="ml-auto input-group">
            <input name="s" value="<?php echo get_search_query() ?>" type="search" class="form-control form-control-sm" placeholder="Search For" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-sm button-main" type="submit">
                Search
            </button>
        </div>
    </form>
    </div>
  </div>
</nav>
