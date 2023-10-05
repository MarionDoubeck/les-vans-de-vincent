<?php
/* 
Template for single box
*/

get_header();


while(have_posts()){
    the_post();?>
    <div class="container bg-white archive-vehicule">
        <div class="archive-title-box">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php $id = get_the_id();
        if(get_field('introduction')){
            echo get_field('introduction');
        }?>

        <div><img src="<?php echo get_field('image_mise_en_avant', $id); ?>" alt="" style="width:100%"></div>
        <div><?php the_content(); ?></div>
        <div class="toutes-box">
            <a href="/box" class="btn-card">
                <span>Voir toutes nos box</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
    </div>
<?php }

get_footer();