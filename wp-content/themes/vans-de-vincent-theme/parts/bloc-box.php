<?php 
if ($args['post_id']){
    $postId = $args['post_id'];
}
$title = get_the_title($postId);
$permalink = get_the_permalink($postId);
$dimensions = get_field('dimensions');
$poids = get_field('poids');
$prix = get_field('prix'); 

if (get_field('image_mise_en_avant', $postId)){
    $image = get_field('image_mise_en_avant', $postId);
}else{
    $image = get_stylesheet_directory_uri().'/assets/images/logo.png';
}

?>

<div class="bloc-box flex">
    <div class="bloc-vehicule-title">
        <h4><?php echo $title; ?></h4>
        <div class="vehicule-info flex">
            <ul>
                <li><span>Dimensions : </span><?= $dimensions ?></li>
                <li><span>Poids: </span><?= $poids ?> kg</li>
                <li><span>Prix : </span><?= $prix ?>€</li>
            </ul>
        </div>
        <div><?php vans_by_vince_bouton('Voir', $permalink); ?></div>
    </div>
    <div class="bloc-vehicule-img"><img src="<?= $image ?>" alt=""></div>
</div>