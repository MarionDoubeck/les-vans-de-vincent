<?php
/*
Template Name: Archive Véhicule
*/


get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Tous les Vans de Vince !</h1>
    </div>


    <!-- <div class="recherche">
            <div class="type_de_realisation drop-down">
                <ul>
                    <li class="drop-down-label drop-down-all-choices">Toutes les catégories</li>
                    <?php
                        //$array = get_field_object('type_de_realisation')['choices'];
                        //foreach($array as $value){?>
                            <li class="drop-down-choice hidden"><?php //echo $value; ?></li>
                        <?php //}
                    ?>
                </ul>
            </div>

            <div class="statut drop-down">
                <ul>
                    <li class="drop-down-label drop-down-all-choices">Tous les statuts</li>
                    <?php
                        //$array = get_field_object('statut')['choices'];
                        //foreach($array as $value){?>
                            <li class="drop-down-choice hidden"><?php //echo $value; ?></li>
                        <?php //}
                    ?>
                </ul>
            </div>
    </div> -->


    <?php
    $allVehicules = new WP_Query(array(
        'post_type' => 'vehicule',
        /* 'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'type_de_realisation',
                'compare' => '=',
                'value' => 'Pick Up'
            )
        ) */
    ));
    while ($allVehicules->have_posts()){
        $theVehicule = $allVehicules->the_post(); 
        $vehiculeId = get_the_id($theVehicule);

        get_template_part( 'parts/bloc','vehicule', array('post_id' => $vehiculeId));
    }
    wp_reset_query();?>

    <div id="no-results-for-drops-down"></div>
    
</div>


<?php
get_footer();
