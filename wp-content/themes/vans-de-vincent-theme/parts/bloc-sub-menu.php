<?php
if ($args['titre']){
    $titre = $args['titre'];
}
if ($args['image']){
    $image = $args['image'];
}
if ($args['contenu']){
    $contenu = $args['contenu'];
}
if (isset($args['lien'])){
    $lien = $args['lien'];
}
if ($args['nombre d etiquettes']){
    $nbEtiquettes = $args['nombre d etiquettes'];
}

?>



<li class="sub-menu-etiquette" style="width: calc(<?php echo floor(100 / $nbEtiquettes); ?>% - 40px)">
    <div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front" style="background:url('<?php echo $image ?>') no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div class="flip-card-title"><?php echo $titre; ?></div>
        </div>
        <div class="flip-card-back">
            <div class="flip-card-back-texte"><?php echo $contenu; ?></div>
            <div>
            <?php if ($lien){?>
                <a href="<?php echo $lien; ?>" class="btn-card">
                    <span>Voir</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            <?php }?>
            </div>
        </div>
    </div>
    </div>
</li>