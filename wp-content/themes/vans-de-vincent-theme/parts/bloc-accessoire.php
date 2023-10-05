<?php 
if ($args['post_id']){
    $postId = $args['post_id'];
}
$title = get_the_title($postId);
$permalink = get_the_permalink($postId);
$prix = get_field('prix'); 

if (get_field('image_mise_en_avant', $postId)){
    $image = get_field('image_mise_en_avant', $postId);
}else{
    $image = get_stylesheet_directory_uri().'/assets/images/logo.png';
}

?>

<a href="<?= $permalink; ?>" class="bloc-accessoire flex col">
    <div class="bloc-vehicule-title" >
        <h4><?php echo $title; ?></h4>
    </div>

    <div class="bloc-vehicule-img flex">
        <img src="<?= $image ?>" alt="">
        <div class="vehicule-info">
            Prix : <?= $prix ?>€
        </div>
    </div>
</a>