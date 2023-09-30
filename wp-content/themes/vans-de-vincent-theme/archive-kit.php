<?php
/*
Template Name: Archive Kit
*/


get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Tous nos kits d'aménagement à installer</h1>
    </div>

    <?php
    $allKits = new WP_Query(array(
        'post_type' => 'kit',
        /* 'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'type_de_realisation',
                'compare' => '=',
                'value' => 'Pick Up'
            )
        ) */
    ));
    while ($allKits->have_posts()){
        $theKit = $allKits->the_post(); 
        $kitId = get_the_id($theKit);

        get_template_part( 'parts/bloc','kit', array('post_id' => $kitId));
    }
    wp_reset_query();?>


</div>

<?php
get_footer();

