
<?php

get_header();
?>
<div class="container mt-5">
<div class="about-page">
    <?php if(has_post_thumbnail()){
        the_post_thumbnail('pagethumbnail' );}?>
    
<?php the_content(  )?>   
</div>

</div>


<?php get_footer( )?>

