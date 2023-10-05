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

    <h4 style="border: solid 1px black; text-align:center; padding:10px;line-height:30px;">La liste ci-dessous est non-exhaustive. N'hésitez pas à nous contacter pour tous vos besoins de composants et d'accessoires !</h4>

    <h2>Lit et literie</h2>
    <p>Une sélection optimale de lits pour van ou camion aménagé</p>
    <p>Pour être à l’aise le jour comme la nuit, notre literie est 2 en 1 :
La journée, profitez de nos banquettes lits pour fourgon aménagé pour vous asseoir, partager un repas, ou pour vous allonger et vous reposer.
Le soir, par une simple adaptation de votre literie, vous bénéficiez d’un lit pratique et confortable pour 1 ou 2 personnes.</p>
<p>En plus de vous garantir un sommeil de qualité, nos lits pour van aménagé disposent d’espaces de rangement spacieux pour stocker votre linge de lit ou d’autres affaires. Vous pouvez également personnaliser votre literie et ajouter des tiroirs de cuisine, réfrigérateur, et batterie et créer ainsi un espace utile et optimisé qui vous fait gagner de la place.
Apportez du confort supplémentaire à votre lit banquette de fourgon ou camion aménagé en ajoutant un matelas en mousse supérieure, découpés sur-mesure. Composés de 2 matelas, un pour l’assise et un pour le dossier, ils améliorent votre confort à chaque instant de la journée.</p>
<div class="flex wrap">
<?php
    $allAccessories = new WP_Query(array(
        'post_type' => 'accessoire',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_accessoire',
                'field'    => 'slug',
                'terms'    => 'literie',
            ),
        ),
        'order' => 'DESC',
    ));
    while ($allAccessories->have_posts()){
        $theAccessory = $allAccessories->the_post(); 
        $accessoryId = get_the_id($theAccessory);

        get_template_part( 'parts/bloc','accessoire', array('post_id' => $accessoryId));
    }
    wp_reset_query();?>
</div>
    <h2>Cuisine</h2>
    <p>Tous nos équipements de cuisine de van ont été spécifiquement conçus pour s’intégrer idéalement avec le reste de vos aménagements de van, camion, fourgon, camionnette, etc, et vous garantir une cuisine facile et pratique, confortablement installés dans votre véhicule. Gardez votre liberté et cuisinez vos plats préférés où vous voulez, quand vous voulez.

Découvrez notre sélection de kitchenettes pour fourgon aménagé et tous nos accessoires de cuisine de van aménagé et préparez sereinement vos prochains repas seul ou à plusieurs, qu’il neige, qu’il vente, qu’il pleuve.</p>
<div class="flex wrap">
<?php
    $allAccessories = new WP_Query(array(
        'post_type' => 'accessoire',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_accessoire',
                'field'    => 'slug',
                'terms'    => 'cuisine',
            ),
        ),
    ));
    while ($allAccessories->have_posts()){
        $theAccessory = $allAccessories->the_post(); 
        $accessoryId = get_the_id($theAccessory);

        get_template_part( 'parts/bloc','accessoire', array('post_id' => $accessoryId));
    }
    wp_reset_query();?>
</div>

    <h2>Meubles</h2>
    <div class="flex wrap">
    <?php
    $allAccessories = new WP_Query(array(
        'post_type' => 'accessoire',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_accessoire',
                'field'    => 'slug',
                'terms'    => 'meuble',
            ),
        ),
    ));
    while ($allAccessories->have_posts()){
        $allAccessories->the_post(); 
        $accessoryId = get_the_id();

        get_template_part( 'parts/bloc','accessoire', array('post_id' => $accessoryId));
    }
    wp_reset_query();?>
    </div>

    <h2>Tout pour le sport</h2>
    <div class="flex wrap">
    <?php
    $allAccessories = new WP_Query(array(
        'post_type' => 'accessoire',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_accessoire',
                'field'    => 'slug',
                'terms'    => 'sport',
            ),
        ),
    ));
    while ($allAccessories->have_posts()){
        $theAccessory = $allAccessories->the_post(); 
        $accessoryId = get_the_id($theAccessory);

        get_template_part( 'parts/bloc','accessoire', array('post_id' => $accessoryId));
    }
    wp_reset_query();?>
    </div>

    <h2>Electricité</h2>
    <p>L’alimentation en électricité de votre véhicule aménagé est primordiale. C’est pourquoi nos kits d’électricité pour van complets vous proposent :

Des panneaux solaires, pour produire une énergie propre et durable,
Des batteries, pour stocker et distribuer facilement et rapidement l’énergie produite.
Notre panneau solaire vous permet de produire une énergie verte et intelligente, quel que soit le temps extérieur. Compacte et portable, c’est la solution d’installation électrique pour van parfaite, vous accompagnant partout et vous offrant une autonomie supplémentaire.

Nos batteries portables hautes capacités vous offrent ensuite une solution d’électricité pour camion et fourgon aménagé idéale, vous permettant de brancher et de recharger facilement rapidement tous vos appareils électriques, petits comme gros (téléphone, lampe, pompe à eau, frigo, etc.).</p>
<div class="orange">La partie accessoires est encore en construction, merci de votre compréhension. Vous pouvez visiter les sites de nos partenaires, dont nous sommes revendeurs officiels, et nous contacter pour tout devis ou achat : </div>
    <a href="https://fr.ecoflow.com/" class="btn"><span>Notre partenaire Ecoflow</span></a>
    <a href="https://www.solar-one.fr/" class="btn"><span>Notre partenaire Solar One</span></a>
    <div class="flex wrap">
    <?php
    $allAccessories = new WP_Query(array(
        'post_type' => 'accessoire',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_accessoire',
                'field'    => 'slug',
                'terms'    => 'electricite',
            ),
        ),
    ));
    while ($allAccessories->have_posts()){
        $theAccessory = $allAccessories->the_post(); 
        $accessoryId = get_the_id($theAccessory);

        get_template_part( 'parts/bloc','accessoire', array('post_id' => $accessoryId));
    }
    wp_reset_query();?>
    </div>

    <h2>Autres</h2>
    <div>Nous sommes également revendeurs de Narbonne Accessoires, retrouvez le catalogue sur le site de </div>
    <a href="https://www.narbonneaccessoires.fr/" class="btn"><span>Notre partenaire Narbonne Accessoires</span></a>
</div>


<?php
get_footer();

