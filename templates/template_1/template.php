<?php
$template = "";

$template .= "<div class='roomhints columns-{$atts['columns']}'>";
foreach ($posts as $post){
    $product_button = get_field('product_button', $post->ID);
    $product_subtitle = get_field('product_subtitle', $post->ID);
    $designer_reviews = get_field('designer_review', $post->ID);
    $pro_product = get_field('pro_product', $post->ID);
    $cons_product = get_field('cons_product', $post->ID);
    $designer_image = get_field('designer_image', $post->ID);
//    print_r($pro_product);

    $template .= "<div class='roomhint'>";
        $template .= "<div class='roomhint-product'>";
            $template .= get_the_post_thumbnail( $post->ID, "thumbnail", ["alt" => $post->post_title]);
            $template .= "<h2>{$post->post_title}</h2>";
            $template .= "<h4>{$product_subtitle}</h4>";
            $template .= "<a class='roomhint-link' href='{$product_button['url']}' target='{$product_button['target']}' >{$product_button['title']}</a>";
        $template .= "</div>";
        if(!empty($designer_reviews)){
            foreach ($designer_reviews as $designer_review) {
                $template .= "<div class='roomhint-review'>";
                    $template .= "<h4>" . __("Designer review", "roomhints_ads") . "</h4>";
                    if ($designer_review["designer_avatar"]) {
                        $template .= "<img src='{$designer_review["designer_avatar"]["sizes"]["thumbnail"]}' alt='{$designer_review["designer_avatar"]["alt"]}' >";
                    }
                    if ($designer_review["designer_name"]) {
                        $template .= "<p class='roomhints-designer-name'>{$designer_review["designer_name"]}</p>";
                    }
                    if ($designer_review["designer_link"]) {
                        $template .= "<a href='{$designer_review["designer_link"]["url"]}' target='{$designer_review["designer_link"]["target"]}'>{$designer_review["designer_link"]["title"]}</a>";
                    }
                    $template .= "<div class='designer-social-networks'>";
                    if ($designer_review["designer_instagram"]) {
                        $template .= "<a href='{$designer_review["designer_instagram"]}' target='_blank'><i class='fa fa-instagram'></i> </a>";
                    }
                    if ($designer_review["designer_facebook"]) {
                        $template .= "<a href='{$designer_review["designer_facebook"]}' target='_blank'><i class='fa fa-facebook-square'></i> </a>";
                    }
                    if ($designer_review["designer_pinterest"]) {
                        $template .= "<a href='{$designer_review["designer_pinterest"]}' target='_blank'><i class='fa fa-pinterest'></i> </a>";
                    }
                    if ($designer_review["designer_twitter"]) {
                        $template .= "<a href='{$designer_review["designer_twitter"]}' target='_blank'><i class='fa fa-twitter'></i> </a>";
                    }

                    $template .= "</div>";
                    if ($designer_review["designer_review_text"]) {
                        $template .= "<p class='roomhints-designer-review-text'>{$designer_review["designer_review_text"]}</p>";
                    }

                $template .= "</div>";
            }
        }
        if(!empty($designer_image)){
            $template .= "<div class='designer-image'>";
                $template .= "<img src='{$designer_image["sizes"]["thumbnail"]}' alt='{$designer_image["alt"]}' >";
            $template .= "</div>";
        }
        if(!empty($pro_product)){
            $template .= "<div class='roomhints-pro-product'>";
            $template .= "<h6>".__("PRO", "roomhints_ads")."</h6>";
                foreach ($pro_product as $pro) {
                    $template .= "<p>* {$pro["fields"]}</p>";
                }
            $template .= "</div>";
        }

        if(!empty($cons_product)){
            $template .= "<div class='roomhints-cons-product'>";
            $template .= "<h6>".__("CONS", "roomhints_ads")."</h6>";
                foreach ($cons_product as $cons) {
                    $template .= "<p>* {$cons["fields"]}</p>";
                }
            $template .= "</div>";
        }
    $template .= "</div>";
}
$template .= "</div>";

return $template;