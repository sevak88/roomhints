jQuery(document).ready(function ($) {
    var pro_max = 0;
    var cons_max = 0;
    var review_max = 0;

    $(".roomhint-review").each(function (index, el) {
        if(review_max < $(el).height()){
            review_max = $(el).height()
        }
    });
    $(".roomhints-pro-product").each(function (index, el) {
        if(pro_max < $(el).height()){
            pro_max = $(el).height()
        }
    });
    $(".roomhints-cons-product").each(function (index, el) {
        if(cons_max < $(el).height()){
            cons_max = $(el).height()
        }
    });

    $(".roomhint-review").height(review_max)
    $(".roomhints-pro-product").height(pro_max)
    $(".roomhints-cons-product").height(cons_max)

})
