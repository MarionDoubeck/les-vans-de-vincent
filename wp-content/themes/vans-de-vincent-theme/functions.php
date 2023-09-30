<?php

//styles et scripts
function vans_by_vince_files(){
    wp_enqueue_style('vans_by_vince_main_styles', get_stylesheet_directory_uri() . '/public/style.css' );
    wp_enqueue_script('drop-down',get_stylesheet_directory_uri() . '/public/drop-down.js','',1.1,true );
    wp_enqueue_script('header',get_stylesheet_directory_uri() . '/public/header.js','',1.1,true );
}

add_action('wp_enqueue_scripts','vans_by_vince_files');

//allow svg for Wp v4.7.1 and higher
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );



//bouton
function vans_by_vince_bouton($texte, $lien){
    echo '<a href="' . $lien . '" class="btn"><span>' . $texte . '</span><svg width="13px" height="10px" viewBox="0 0 13 10"><path d="M1,5 L11,5"></path><polyline points="8 1 12 5 8 9"></polyline></svg></a>';
}

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to Actus
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $labels->name = 'Actus';
    $labels->singular_name = 'Actu';
    $labels->add_new = 'Ajouter une actu';
    $labels->add_new_item = 'Ajouter une actu';
    $labels->edit_item = 'Modifier une actu';
    $labels->new_item = 'Actus';
    $labels->view_item = 'Voir les actus';
    $labels->search_items = 'Chercher une actu';
    $labels->not_found = 'Aucune actualité trouvée';
    $labels->not_found_in_trash = 'Aucune actualité trouvée dans la corbeille';
    $labels->all_items = 'Toutes les actus';
    $labels->menu_name = 'Actus';
    $labels->name_admin_bar = 'Actus';
}
function vans_by_vince_replace_admin_menu_icons_css() {
    ?>
    <style>
        .dashicons-admin-post:before {
            content: url('../wp-content/themes/vans-de-vincent-theme/assets/images/blog.png');
        }
    </style>
    <?php
}

add_action( 'admin_head', 'vans_by_vince_replace_admin_menu_icons_css' );

//custom post types
function vans_by_vince_post_types(){
    register_post_type('vehicule', array(
        'rewrite' => array('slug' => 'vehicules'),
        'has_archive' => 'vehicules',
        'public' => true,
        'labels' => array(
            'name' => 'Véhicules',
            'all_items' => 'Tous les véhicules',
            'add_new' => 'Ajouter un véhicule',
            'add_new_item' => 'Ajouter un véhicule',
            'singular_name' => 'Véhicule',
            'edit_item' => 'Modifier un véhicule'
        ),
        'show_in_rest' => true,
        'supports' => ['title', 'thumbnail', 'editor'], 
        'menu_icon' => get_stylesheet_directory_uri().'/assets/images/van.png',
        'taxonomies' => array('post_tag')
        ),
    );
    register_post_type('box', array(
        'has_archive' => 'box',
        'public' => true,
        'labels' => array(
            'name' => 'Box',
            'all_items' => 'Toutes les box',
            'add_new' => 'Ajouter une box',
            'add_new_item' => 'Ajouter une box',
            'singular_name' => 'Box',
            'edit_item' => 'Modifier une box'
        ),
        'show_in_rest' => true,
        'supports' => ['title', 'thumbnail', 'editor'], 
        'menu_icon' => get_stylesheet_directory_uri().'/assets/images/box.png',
        'taxonomies' => array('post_tag')
        ),
    );
    register_post_type('kit', array(
        'has_archive' => 'kits',
        'public' => true,
        'labels' => array(
            'name' => 'Kit d\'aménagement',
            'all_items' => 'Tous les kits d\'aménagement',
            'add_new' => 'Ajouter un kit d\'aménagement',
            'add_new_item' => 'Ajouter un kit d\'aménagement',
            'singular_name' => 'Kit d\'aménagement',
            'edit_item' => 'Modifier un kit d\'aménagement'
        ),
        'show_in_rest' => true,
        'supports' => ['title', 'thumbnail', 'editor'], 
        'menu_icon' => get_stylesheet_directory_uri().'/assets/images/kit.png',
        'taxonomies' => array('post_tag')
        ),
    );
    register_post_type('accessoire', array(
        'has_archive' => 'accessoires',
        'public' => true,
        'labels' => array(
            'name' => 'Accessoire d\'aménagement',
            'all_items' => 'Tous les accessoires d\'aménagement',
            'add_new' => 'Ajouter un accessoire d\'aménagement',
            'add_new_item' => 'Ajouter un accessoire d\'aménagement',
            'singular_name' => 'Accessoire d\'aménagement',
            'edit_item' => 'Modifier un accessoire d\'aménagement'
        ),
        'show_in_rest' => true,
        'supports' => ['title', 'thumbnail', 'editor'], 
        'menu_icon' => get_stylesheet_directory_uri().'/assets/images/lego.png',
        'taxonomies' => array('post_tag')
        ),
    );
    register_post_type('evenement', array(
        'has_archive' => 'evenements',
        'public' => true,
        'labels' => array(
            'name' => 'Évènements',
            'all_items' => 'Tous les évènements',
            'add_new' => 'Ajouter un évènement',
            'add_new_item' => 'Ajouter un évènement',
            'singular_name' => 'Évènement',
            'edit_item' => 'Modifier un évènement'
        ),
        'show_in_rest' => true,
        'supports' => ['title', 'thumbnail', 'editor'], 
        'menu_icon' => get_stylesheet_directory_uri().'/assets/images/calendrier.png',
        'taxonomies' => array('post_tag')
        ),
    );

    
}
add_action('init','vans_by_vince_post_types');



//Arrangement de l'ordre du menu backoffice
add_filter( 'custom_menu_order', 'dgtlnk_custom_menu_order', 10, 1 );

add_filter( 'menu_order', 'dgtlnk_custom_menu_order', 10, 1 );

function dgtlnk_custom_menu_order( $menu_ord ) {

     if ( !$menu_ord ) return true;

     return array(

          'index.php', // Dashboard

          'separator1', // First separator
          'separator1', // First separator

          'edit.php', // Posts
          'edit.php?post_type=vehicule', // Véhicules
          'edit.php?post_type=box', // Box
          'edit.php?post_type=kit', // Kits d'aménagement
          'edit.php?post_type=accessoire', // Accessoires d'aménagement
          'edit.php?post_type=evenement', // Evènements
          'edit.php?post_type=page', // Pages

          'separator1', // First separator

     );

}


//Enlever les trucs du menu du back-office
add_action( 'admin_menu', 'dgtlnk_remove_menus' );

function dgtlnk_remove_menus(){

    remove_menu_page( 'edit-comments.php' );

}

//mettre des dashicons
function wpc_dashicons() { 
	wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'wpc_dashicons');