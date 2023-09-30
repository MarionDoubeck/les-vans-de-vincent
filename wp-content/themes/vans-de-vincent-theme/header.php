<!DOCTYPE html>
<html lang="fr">
<head>
<?php wp_head();?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php //wp_title(''); ?>Les Vans de Vincent</title>
<?php do_action( 'wpseo_head' );  ?>
</head>
<body onload="document.body.className += ' loaded';" class="fadein">

<header>
    <div class="header full-width-container">

        <?php if (is_front_page()) : ?>
        <div class="background-image">
            <div class="layer"></div>
            <img src="http://lesvansdevincent.com/wp-content/uploads/2023/05/fond-home-page-scaled.jpeg" alt="">
        </div>
        <?php endif; ?>

        <!-- menu haut -->
        <div class="header-menu-content">
            <ul id="menu-gauche">
                <li id="prestations">Prestations<div class="underliner"></div></li>
                <li id="realisations">Réalisations<div class="underliner"></div></li>
                <li id="aLaVente">A la vente<div class="underliner"></div></li>
            </ul>

            <div class="logo">
                <a href="<?= site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png'; ?>" alt="logo"></a>
            </div>

            <ul id="menu-droite">
                <li><a href="<?= site_url() ?>/evenements">Evènements</a><div class="underliner"></div></li>
                <li><a href="<?= site_url() ?>/actualites">Actualités</a><div class="underliner"></div></li>
                <li><a href="<?= site_url() ?>/nous-contacter">Nous contacter</a><div class="underliner"></div></li>
            </ul>
        </div>
        <!-- fin menu haut-->


        <?php
        require_once(dirname( __FILE__ ) . "/parts/header-parts/prestations.php");
        require_once(dirname( __FILE__ ) . "/parts/header-parts/realisations.php");
        require_once(dirname( __FILE__ ) . "/parts/header-parts/vente.php");
        ?>

        <div id="picto-ford">
            <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/ford.png'; ?>" alt="">
        </div>


        <!-- menu mobile -->
        <div class="menu-mobile">
            <div class="logo">
                <a href="<?= site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png'; ?>" alt="logo"></a>
            </div>
            <div class="burger">
                <div id="input">
                    <input type="checkbox" name="burger" id="checkbox">
                    <label for="burger">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/burger-menu.svg
                    " alt="menu">
                    <ul class="burger_list">
                        <li>
                            <a href="<?= site_url() ?>/toutes-nos-prestations-sur-mesure" aria-label="Voir les prestations">
                                Prestations à la carte
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/categorie/realisation" aria-label="Voir les réalisations">
                                Toutes nos réalisations
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/kits" aria-label="Kits d'aménagements">
                                Kits d'aménagement
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/box" aria-label="Box prêtes à l'emploi">
                                Box prêtes à l'emploi
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/accessoires" aria-label="Composants et accessoires">
                                Composants et accessoires
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/categorie/depot-vente" aria-label="Dépot vente de véhicules">
                                Dépot-vente de véhicules
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/actualites" aria-label="Blog">
                                Actualités
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/evenements" aria-label="évènements">
                               Évènements
                            </a>
                            <div class="border-bottom"></div>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/nous-contacter" aria-label="contact">
                               Contact
                            </a>
                            <div class="border-bottom"></div>
                        </li>


                        <img id="close-burger-menu" src="<?= get_stylesheet_directory_uri() ?>/assets/images/close.svg" alt="close-menu">
                    </ul>
                    </label>
                </div>
            </div>
        </div>
        <!-- fin menu mobile -->

    </div>
</header>





    
