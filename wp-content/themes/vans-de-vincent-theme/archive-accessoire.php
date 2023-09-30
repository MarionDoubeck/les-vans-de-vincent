<?php
/*
Template Name: Archive Accessoires
*/


get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Tous les Composants et Accessoires</h1>
    </div>

    <div>Page en cours de construction, merci de votre compréhension</div>

    <h2>Lit et literie</h2>

    <h2>Cuisine</h2>

    <h2>Meubles</h2>

    <h2>Tout pour le sport</h2>

    <h2>Batteries Ecoflow</h2>
    <a href="https://fr.ecoflow.com/">Ecoflow</a>

    <h2>Nous posons aussi le matériel Solar One</h2>
    <a href="https://www.solar-one.fr/">Solar One</a>

    <?php
    $allEvents = new WP_Query(array(
        'post_type' => 'accessoire',
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

    <div id="no-results-for-drops-down"></div>
    
</div>


<?php
get_footer();

