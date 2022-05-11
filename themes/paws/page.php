<?php

get_header();
?>
<div class="container pt-5 mt-5">
<div class="about-page">
    <?php if(has_post_thumbnail()){
        the_post_thumbnail('pagethumbnail' );}?>
    
<?php the_content(  )?>   
</div>

</div>

<?php get_template_part( 'template-parts/content', 'more' ); ?>

<?php get_footer( )?>
