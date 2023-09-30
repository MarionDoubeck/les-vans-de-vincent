<?php  get_header(); ?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Toutes nos réalisations</h1>
    </div>

    <?php
    $allRealisations = new WP_Query( array(
        'post_type' => array('vehicule', 'box', 'kit', 'evenement'),
        'tag' => array('realisation'),
        'posts_per_page' => 5,
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


/* <script>
    doubeck_drop_down('bloc-vehicule') //passer le type de blocs à trier en paramètre
</script> */