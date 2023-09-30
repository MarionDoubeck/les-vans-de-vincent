<?php  get_header(); ?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Véhicules à vendre</h1>
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
                       // $array = get_field_object('statut')['choices'];
                       // foreach($array as $value){?>
                            <li class="drop-down-choice hidden"><?php //echo $value; ?></li>
                        <?php //}
                    ?>
                </ul>
            </div>
    </div> -->


    <?php
    $allRealisations = new WP_Query( array(
        'post_type' => array('vehicule', 'box', 'kit', 'evenement'),
        'tag' => array('depot-vente'),
        'posts_per_page' => -1,
        'post_status' => 'publish',
    ));
    while ($allRealisations->have_posts()){
        $aRealisation = $allRealisations->the_post(); 
        $realisationId = get_the_id($aRealisation);

        get_template_part( 'parts/bloc','vehicule', array('post_id' => $realisationId));
    }
    wp_reset_query();?>

    <div id="no-results-for-drops-down"></div>
    
</div>


<?php
get_footer();

