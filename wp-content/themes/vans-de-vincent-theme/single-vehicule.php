<?php
/*
Template Name: Page Véhicule
*/

get_header();

while(have_posts()){
    the_post();
    $typeReal = get_field('type_de_realisation'); 
    $image = get_field('image_mise_en_avant'); 
    $annee = get_field('annee'); 
    $km = get_field('kilometrage'); 
    $carburant = get_field('carburant');
    $statut = get_field('statut');
    $prix = get_field('prix'); 
    $actus = get_field('actualite_liee'); 
    $events = get_field('evenement_lie'); 
    $chapo = get_field('chapo');
    ?>
    <div class="container bg-white vehicule">
        <div class="title-box">
            <h1><?php the_title(); ?></h1>
            

            <img src="<?php echo $image; ?>" alt="">
            
            <div class="vehicule-info flex">
                <ul>
                    <?php if(count($typeReal)>0):?>
                    <li><span>Type de réalisation : </span><?php 
                    for ($i=0; $i<count($typeReal); $i++){
                        echo $typeReal[$i];
                        if($i<count($typeReal)-1){
                            echo ', ';
                        } 
                    }
                    ?></li>
                    <?php endif;
                    if($annee): ?>
                    <li><span>Année : </span><?php echo $annee; ?></li>
                    <?php endif;
                    if($km): ?>
                    <li><span>Kilométrage : </span><?php echo $km; ?> km</li>
                    <?php endif;
                    if($carburant): ?>
                    <li><span>Carburant : </span><?php echo $carburant; ?></li>
                    <?php endif;
                    if($statut !== "Pas en vente"):?>
                    <li><span>Statut : </span><?php echo $statut; ?></li>
                    <?php if($statut === "à vendre"):?>
                        <li><span>Prix : </span><?php echo $prix; ?>€</li>
                    <?php endif; endif; ?>
                </ul>
            </div>
        </div>
            
        <?php if($chapo){?><div class="chapo"><?= $chapo ?></div><?php } ?>

        <div><?php the_content(); ?></div>

        <?php if($actus): ?>
            <h2 class='links-title'>Les actualités du <?php the_title(); ?> :</h2>
            <div class="posts-lies flex">
                <?php
                foreach($actus as $actu){
                    get_template_part( 'parts/bloc','actu', array('post_id' => $actu));
                }?>
            </div>
        <?php endif; ?>

        <?php if($events): ?>
            <h2 class='links-title'>Les évènements avec le <?php the_title(); ?> :</h2>
            <div class="posts-lies flex">
            <?php
                foreach($events as $event){
                    get_template_part( 'parts/bloc','actu', array('post_id' => $event));
                }?>
            </div>
        <?php endif; ?>
    </div>
<?php }

get_footer();
