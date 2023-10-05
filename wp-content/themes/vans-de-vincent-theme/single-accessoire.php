<?php
/* 
Template for single accessoire
*/

get_header();


while(have_posts()){
    the_post();
    $dimensions = get_field('dimensions');
    $poids = get_field('poids');
    $prix = get_field('prix'); ?>
    <div class="container bg-white archive-vehicule">
        <div class="archive-title-box">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="orange">La partie accessoires est encore en construction, merci de votre compréhension</div>
        <Hr>
        
        <?php $id = get_the_id();
        if(get_field('introduction')){
            echo get_field('introduction');
        }?>

        <ul>
        <?php if ($dimensions){ ?>
            <li>Dimensions : <?=$dimensions?></li>
        <?php }
        if ($poids){ ?>
            <li>Poids : <?=$poids?>Kg</li>
        <?php }
        if ($prix){ ?>       
            <li>Prix : <?= $prix ?>€ (hors options)</li>
        <?php } ?>
        </ul>

        <div class="flex"><img src="<?php echo get_field('image_mise_en_avant', $id); ?>" alt="" style="width:500px; max-width:100%;"></div>
        <Hr>
        <h4 class="orange">Description : </h4>
        <div><?php the_content(); ?></div>
        <div class="tous-accessoires">
            <a href="/accessoire" class="btn-card">
                <span>Voir tous nos accessoires</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
    </div>
<?php }

get_footer();