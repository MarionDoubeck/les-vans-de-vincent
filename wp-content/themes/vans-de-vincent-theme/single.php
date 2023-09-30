<?php
/* 
Template for single post and single event, single kit, single box...
*/

get_header();


while(have_posts()){
    the_post();?>
    <div class="container bg-white archive-vehicule">
        <div class="archive-title-box">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php $id = get_the_id();
        if(get_field('chapo')){
            echo get_field('chapo');
        }?>

        <div><img src="<?php echo get_field('image_mise_en_avant', $id); ?>" alt="" style="width:100%"></div>
        <div><?php the_content(); ?></div>
    </div>
<?php }

get_footer();
