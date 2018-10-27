{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    [[$custom.msProduct.content]]
    <div class="mb100 mb70-sm mb60-xs"></div>
</div>

{/block}
{block 'add_hot__js'}
<script src="assets/sconto/assets/js/jquery.elevateZoom.min.js"></script>
<script src="assets/sconto/assets/js/slick.min.js"></script>
{/block}
{block 'add_js'}

<script>
    ! function(l) {
        "use strict";
        l(".product-vertical-gallery-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: !1,
            fade: !0,
            asNavFor: ".product-vertical-gallery-carousel"
        }), l(".product-vertical-gallery-carousel").slick({
            asNavFor: ".product-vertical-gallery-slider",
            infinite: !1,
            slidesToShow: 3,
            slidesToScroll: 1,
            vertical: !0,
            verticalSwiping: !0,
            arrows: !1,
            focusOnSelect: !0
        })
    }(jQuery)
</script>
{/block}