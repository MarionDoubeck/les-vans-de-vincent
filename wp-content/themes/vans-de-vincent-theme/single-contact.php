<?php
/*
Template Name: Page Contact
*/
get_header();
?>

<div class="container bg-white archive-vehicule">
    <div class="archive-title-box">
        <h1>Nous contacter</h1>
        
    </div>

    <h2>Nous situer</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.5244414945955!2d3.7310312765787477!3d46.47792696523321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f169b228c0eb8b%3A0x57063f994f951d44!2sLes%20Vans%20de%20Vincent!5e0!3m2!1sfr!2sfr!4v1683623784415!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <h2>Nos horaires d'ouverture</h2>
    <div class="horaires">
        <div>Lundi : 9h-12h30 14h-18h</div>
        <div>Mardi : 9h-12h30 14h-18h</div>
        <div>Mercredi : 9h-12h30 14h-18h</div>
        <div>Jeudi : 9h-12h30 14h-18h</div>
        <div>Vendredi : 9h-12h30 14h-18h</div>
        <div>Samedi : Sur rendez-vous</div>
    </div>
    
    <h2>Téléphone et email en un clic</h2>
    <div class="dashicon" id="phone"><a href="tel:+33788238311">07 88 23 83 11</a></div>
    <Br><Br>
    <div class="dashicon" id="email"><a href="mailto:lesvansdevincent@gmail.com">lesvansdevincent@gmail.com</a></div>

    <h2>Formulaire de contact</h2>
    <div><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/en_construction.gif'; ?>" alt="en construction"></div>
</div>

<?php
get_footer();
