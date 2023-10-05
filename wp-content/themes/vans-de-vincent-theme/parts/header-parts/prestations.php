<?php $nbEtiquettes = 3; ?>

<ul class="sub-menu" id="sub-menu__prestations">

    <li class="sub-menu-etiquette" style="width: calc(<?php echo floor(100 / $nbEtiquettes); ?>% - 40px)">
        <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" style="background:url('https://lesvansdevincent.com/wp-content/uploads/2023/05/traffic-interieur.jpeg') no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="flip-card-title">Aménagements sur mesure</div>
            </div>
            <div class="flip-card-back">
                <div class="flip-card-back-texte">
                    <p>Aménagements sur mesure. </p>
                    <p>Véhicules professionnels, de loisir ou modulables. </p>
                    <p>Rénovation, mise au goût du jour.</p>
                    <p>Aménagement partiel et/ou réparation</p>
                </div>
                <div>
                    <a href="/toutes-nos-prestations-sur-mesure/" class="btn-card">
                        <span>Voir</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </li>

    <li class="sub-menu-etiquette" style="width: calc(<?php echo floor(100 / $nbEtiquettes); ?>% - 40px)">
        <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" style="background:url('https://x6i2h2j9.rocketcdn.me/wp-content/uploads/2022/03/hive-box-beetle-1.jpg.webp') no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="flip-card-title">Nos solutions loisir</div>
            </div>
            <div class="flip-card-back">
                <div class="flip-card-back-texte">
                    <p>Des kits pour vans et utilitaires.</p>
                    <p>Des box à emporter pour équiper votre voiture pour le week-end.</p>
                    <p>Des accessoires pour compléter votre installation.</p>
                </div>
                <div>
                    <a href="/vente-et-pose-de-kits-pour-vehicules-de-loisir" class="btn-card">
                        <span>Voir</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </li>

    <li class="sub-menu-etiquette" style="width: calc(<?php echo floor(100 / $nbEtiquettes); ?>% - 40px)">
        <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" style="background:url('https://lesvansdevincent.com/wp-content/uploads/2023/10/kit-optipro.png') no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="flip-card-title">Nos solutions pro</div>
            </div>
            <div class="flip-card-back">
                <div class="flip-card-back-texte">
                    <p>En fonction de votre modèle d'utilitaire et de vos besoins professionnels, nous avons toute une gamme de kits pré-conçus à poser.</p>
                </div>
                <div>
                    <a href="/vente-et-pose-de-kits-pour-vehicules-professionnels/" class="btn-card">
                        <span>Voir</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </li>

    <img class="close" src="<?= get_stylesheet_directory_uri() ?>/assets/images/close.svg" alt="close-menu">
</ul>