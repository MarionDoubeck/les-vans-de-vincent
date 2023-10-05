<?php 
if ($args['post_id']){
    $postId = $args['post_id'];
}
$title = get_the_title($postId);
$permalink = get_the_permalink($postId);
$typeReal = get_field('type_de_realisation'); 
//$image = get_field('image_mise_en_avant'); 
$annee = get_field('annee'); 
$km = get_field('kilometrage'); 
$carburant = get_field('carburant');
$statut = get_field('statut');
$prix = get_field('prix'); 
$taille = get_field('taille'); 

if (get_field('image_mise_en_avant', $postId)){
    $image = get_field('image_mise_en_avant', $postId);
}else{
    $image = get_stylesheet_directory_uri().'/assets/images/logo.png';
}
/* $class1 = str_replace(' ','_',$statut);
$class2 = str_replace(' ','_',$typeReal);
$classForDropDown = 'type_de_realisation'.$class2; */
?>

<div class="bloc-vehicule flex <?php //echo $classForDropDown; ?>">
    <div class="bloc-vehicule-title">
        <h4><?php echo $title; ?></h4>
        <div class="vehicule-info flex">
        <ul>
                    <?php if($typeReal && count($typeReal)>0):?>
                    <li><span>Type de réalisation : </span><?php 
                    for ($i=0; $i<count($typeReal); $i++){
                        echo $typeReal[$i];
                        if($i<count($typeReal)-1){
                            echo ', ';
                        } 
                    }
                    ?></li>
                    <?php endif;
                    if($taille): ?>
                    <li><span>Taille : </span><?php echo $taille[0]; ?></li>
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
                    if($statut && $statut !== "Pas en vente"):?>
                    <li><span>Statut : </span><?php echo $statut; ?></li>
                    <?php if($statut === "à vendre"):?>
                        <li><span>Prix : </span><?php echo $prix; ?>€</li>
                    <?php endif; endif; ?>
                </ul>
        </div>
        <div><?php vans_by_vince_bouton('Voir', $permalink); ?></div>
    </div>
    <div class="bloc-vehicule-img"><img src="<?php echo $image;?>" alt=""></div>
</div>