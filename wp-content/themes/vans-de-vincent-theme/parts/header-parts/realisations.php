<ul class="sub-menu" id="sub-menu__realisations">
    <?php
    $recent_realisations = new WP_Query( array(
        'post_type' => array('vehicule', 'box', 'kit', 'evenement'),
        'tag' => array('realisation'),
        'posts_per_page' => 4,
        'post_status' => 'publish',
    ));
    if ($recent_realisations->have_posts()){
        while ($recent_realisations->have_posts()) : $recent_realisations->the_post();
        $titre = get_the_title();
        $image = get_field('image_mise_en_avant');
        $contenu = get_field('chapo');
        $lien = get_the_permalink();
        $nbEtiquettes = 4;
        get_template_part( 'parts/bloc','sub-menu', array(
            'titre' => $titre,
            'image' => $image,
            'contenu' => $contenu,
            'lien' => $lien,
            'nombre d etiquettes' => $nbEtiquettes,
            'voir tout' => array('Toutes nos réalisations', '/archive-realisations')
        ));
        endwhile;
    }else{
        echo "pas encore de realisation mise en ligne";
    }
    wp_reset_postdata();
    ?>
    <a href="/categorie/realisation" class="btn-card" style="margin-top:10px">
        <span>Toutes nos réalisations</span>
        <svg width="13px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
    </a>
    <div class="close">X</div>
</ul>