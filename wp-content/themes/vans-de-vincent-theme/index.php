<?php
/*
* template for posts archive
*/


get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Toutes les actus !</h1>
    </div>
    <div class="archive-actu">
    <?php

    while (have_posts()){
        $thePost = the_post(); 
        $postId = get_the_id($thePost);
        get_template_part( 'parts/bloc','actu', array('post_id' => $postId));
    }
    ?>

    </div>
    
</div>


<?php
get_footer();

