<?php
/* template for single page */

get_header();

while(have_posts()){
    the_post();
?>


<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1><?php the_title(); ?></h1>
        
    </div>
    <div class="page-content"><?php the_content(); ?></div>
    <hr>
</div>
<?php }

get_footer();
