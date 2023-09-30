<?php
/*
Template Name: Archive Evènement
*/


get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Tous les Evènements !</h1>
    </div>
    <div class="archive-actu">
    <?php
    $allEvents = new WP_Query(array(
        'post_type' => 'evenement',
        /* 'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'type_de_realisation',
                'compare' => '=',
                'value' => 'Pick Up'
            )
        ) */
    ));
    while ($allEvents->have_posts()){
        $theEvent = $allEvents->the_post(); 
        $eventId = get_the_id($theEvent);

        get_template_part( 'parts/bloc','actu', array('post_id' => $eventId));
    }
    wp_reset_query();?>

    </div>
    
</div>


<?php
get_footer();

