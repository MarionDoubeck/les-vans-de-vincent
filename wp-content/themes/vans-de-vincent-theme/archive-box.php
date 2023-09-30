<?php
/*
Template Name: Archive Box
*/


get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Toutes nos box prêtes à l'emploi</h1>
    </div>

    <?php
    $allBoxes = new WP_Query(array(
        'post_type' => 'box',
        /* 'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'type_de_realisation',
                'compare' => '=',
                'value' => 'Pick Up'
            )
        ) */
    ));
    while ($allBoxes->have_posts()){
        $theBox = $allBoxes->the_post(); 
        $boxId = get_the_id($theBox);
        get_template_part( 'parts/bloc','box', array('post_id' => $boxId));
    }
    wp_reset_query();
    ?>


</div>

<?php
get_footer();
