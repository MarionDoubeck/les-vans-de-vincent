<?php
/*
Template Name: Home Page
*/

get_header();


$homePage = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'page',
    'meta_query' => array(
        array(
        'key' => '_wp_page_template',
        'value' => 'home-page.php',
        )
    )
));
while($homePage->have_posts()){
    $homePage->the_post();?>

    <div class="container archive-vehicule home-page"><?php the_content();?></div>

    <?php
    wp_reset_postdata();
};

get_footer();
