<?php 
if ($args['post_id']){
    $postId = $args['post_id'];
}
$title = get_the_title($postId);
$permalink = get_the_permalink($postId);
if (get_field('image_mise_en_avant', $postId)){
    $image = get_field('image_mise_en_avant', $postId);
}else{
    $image = get_stylesheet_directory_uri().'/assets/images/logo.png';
}
if(get_post_type($postId)==='post'){
    $date = get_the_date('',$postId);
}else{
    $date = get_post_type($postId);
}
?>

<div class="bloc-actu">
    <a class="flex" href="<?php echo $permalink; ?>">
        <div class="bloc-actu-title">
            <h4><?php echo $title; ?></h4>
            <p><?php echo $date;?></p>
        </div>
        <div class="bloc-actu-img"><img src="<?php echo $image;?>" alt=""></div>
    </a>
</div>