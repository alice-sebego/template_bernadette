<?php 
namespace App;

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails');
add_theme_support( 'menus');

// function bernateste(){
//     die('Bonjour les gens');
// }

function registerStyle(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], false, true);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['popper'], false, true);

    wp_enqueue_script('bootstrap');
}

function mon_super_article($title) {
    return 'salut';
}

function mon_super_separator(){
    return '|';
}

function mon_super_theme() {
    register_nav_menu('header', 'En tête de menu');
    register_nav_menu('footer', 'Pied de page'); 
}

function mes_super_nav_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}


function mes_super_nav_menu_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function mon_theme_pagination()
{
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    $pages = paginate_links(['type' => 'array']);
    
    if ($pages === null) return;
    
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item'; 
        if ($active) $class .= ' active';
        echo "<li class='$class'>";
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

// function visionnage($title) {
//     unset($title['site']);
//     return $title;
// }

// add_action('wp_head', 'App\bernateste');
add_action('after_setup_theme', 'App\mon_super_theme');
add_action('wp_enqueue_scripts', 'App\registerStyle');
add_filter('wp_title', 'App\mon_super_article');
add_filter('document_title_separator', 'App\mon_super_separator');
add_filter('nav_menu_css_class', 'App\mes_super_nav_menu_class');
add_filter('nav_menu_link_attributes', 'App\mes_super_nav_menu_link_class');
// add_filter('document_title_parts', 'App\visionnage');