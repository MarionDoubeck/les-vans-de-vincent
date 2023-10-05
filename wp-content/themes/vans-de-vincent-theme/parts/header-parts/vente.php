<ul class="sub-menu" id="sub-menu__aLaVente">
<?php
    $nbEtiquettes = 4;

    $titre = "Box prêtes à l'emploi";
    $image = 'https://x6i2h2j9.rocketcdn.me/wp-content/uploads/2022/03/hive-box-110-04.jpg.webp';
    $contenu = "Nous vous proposons un large de choix de box prêtes à l'emploi. Chargez la simplement dans votre véhicule et partez tout équipé";
    $lien = '/box';
    get_template_part( 'parts/bloc','sub-menu', array(
        'titre' => $titre,
        'image' => $image,
        'contenu' => $contenu,
        'lien' => $lien,
        'nombre d etiquettes' => $nbEtiquettes
    ));

    $titre = "Kits d'aménagement";
    $image = 'https://x6i2h2j9.rocketcdn.me/wp-content/uploads/2022/03/01-1-HORNET.jpg.webp';
    $contenu = "<p>Nous vendons des kits d'aménagement pré-conçus FLV.</p><p>A installer vous-même, ou, si vous n'êtes pas bricoleur, nous pouvons également installer le kit dans votre véhicule (fixation, eau, électricité...)</p>";
    $lien = '/kits';
    get_template_part( 'parts/bloc','sub-menu', array(
        'titre' => $titre,
        'image' => $image,
        'contenu' => $contenu,
        'lien' => $lien,
        'nombre d etiquettes' => $nbEtiquettes
    ));

    $titre = "Composants et accessoires";
    $image = 'https://x6i2h2j9.rocketcdn.me/wp-content/uploads/2022/11/porte-velo-sol-04.jpg.webp';
    $contenu = "Vous cherchez un accessoire d'aménagement ? Nous en avons également du lit peigne au porte skateboard, il y en a pour tous les besoins.<Br/>Pour vos installations électrique, nous sommes également revendeur Ecoflow. ";
    $lien = '/accessoire';
    get_template_part( 'parts/bloc','sub-menu', array(
        'titre' => $titre,
        'image' => $image,
        'contenu' => $contenu,
        'lien' => $lien,
        'nombre d etiquettes' => $nbEtiquettes
    ));


    $titre = "Dépot vente de véhicules aménagés";
    $image = 'https://lesvansdevincent.com/wp-content/uploads/2023/05/traffic.jpeg';
    $contenu = "Nous faisons du dépot-vente de véhicules aménagés, tels quels ou après quelques transformations.<Br>Pour vendre votre véhicule contactez-nous.<Br>Pour acheter cliquez ci-dessous.";
    $lien = '/categorie/depot-vente';
    get_template_part( 'parts/bloc','sub-menu', array(
        'titre' => $titre,
        'image' => $image,
        'contenu' => $contenu,
        'lien' => $lien,
        'nombre d etiquettes' => $nbEtiquettes
    ));
    ?>
<img class="close" src="<?= get_stylesheet_directory_uri() ?>/assets/images/close.svg" alt="close-menu">
</ul>