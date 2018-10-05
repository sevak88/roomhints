<?php

add_shortcode( 'advertising', 'advertising_func' );
function advertising_func( $atts ){

    $atts = shortcode_atts( array(
        'template' => 1,
        'categories' => null,
        'ids' => null,
        'count' => -1,
    ), $atts );

    $args = array(
        'post_type' => 'roomhints_ads',
        'post__in' => explode(",", $atts['ids']),
        'posts_per_page' => $atts['count'],
        'tax_query' => []
    );

    if(!empty($atts["categories"])){
        $args["tax_query"][] = [
            "taxonomy" => "ads_categories",
            "field" => "term_id",
            "terms" => explode(",", $atts["categories"]),
            "operator" => "IN",
            "include_children" => false
        ];
    }





    $query = new WP_Query( $args );



    $template = "";
    if(!empty($query->posts) && file_exists(__DIR__ . "/templates/template_{$atts['template']}/template.php")){
        $posts = $query->posts;
        $template = include_once __DIR__ . "/templates/template_{$atts['template']}/template.php";
    }

    wp_enqueue_style( 'template-1-style' );
    return $template;
}