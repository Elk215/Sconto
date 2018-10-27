{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    
    <div class="banners-slider swiper-container">
        <div class="swiper-wrapper">
            [[getImageList?
            &tvname=`categorySlider`
            &tpl=`@CODE:
            <div class="swiper-slide banner top-banner v5"><img src="[[+categorySliderImage]]" class="banner-bg" alt="Banner">
                <div class="banner-content banner-contentbg right">
                    <h4>[[+categorySliderTitle]]</h4>
                    <h3>[[+categorySliderTitle2]]</h3>
                    <p>[[+categorySliderText]]</p>
                    <a href="[[+categorySliderButtonLink]]" class="btn btn-custom">Shop Now</a>
                </div>
            </div>
            `
            ]]
        </div>
    </div>

    <div class="container-fluid">
        [[!mFilter2?
        &limit=`3`
        &parents=`[[*id]]`
        &element=`msProducts`
        &includeThumbs=`medium`
        &filters=`
            msoption|color,
            ms|price:number
        `
        &tpls=`custom.msProducts.row2,custom.msProducts.row`
        &class=`msProduct`
        &sort=`ms|new:desc,ms|popular:desc`
        &tplOuter=`custom.mFilter2.outer.tpl`
        &tplFilter.outer.msoption|color=`custom.mFilter2.filter.outer`
        &tplFilter.row.msoption|color=`custom.mFilter2.filter.checkbox`
        &tplFilter.outer.ms|price=`custom.mFilter2.filter.slider`
        &tplFilter.row.ms|price=`custom.mFilter2.filter.number`
        &tplPageWrapper=`@INLINE <ul class="pagination">[[+prev]][[+pages]][[+next]]</ul>`
        &tplPagePrev=`@INLINE <li class="control"><a href="[[+href]]"><</a></li>`
        &tplPageNext=`@INLINE <li class="control"><a href="[[+href]]">></a></li>`
        &tplPagePrevEmpty=`@INLINE <li class="disabled"><span><</span></li>`
        &tplPageNextEmpty=`@INLINE <li class="disabled"><span>></span></li>`
        ]]
    </div>
</div>
{/block}
{block 'add_js'}
<script>
! function(n) {
    "use strict";
    n(function() {
        new Swiper(".banners-slider", {
            pagination: ".swiper-pagination",
            paginationClickable: !0,
            nextButton: ".swiper-button-next",
            prevButton: ".swiper-button-prev",
            spaceBetween: 0,
            speed: 600,
            loop: !0,
            preventClicks: !1,
            onSlideChangeEnd: function() {
                BackgroundCheck.refresh()
            }
        }), BackgroundCheck.init({
            targets: ".swiper-pagination, .banner-contentbg",
            images: ".banner-bg"
        })
    })
}
$(document).ready(function() {
    $(document).on('change', '#mse2_sort', function() {
        var selected = $(this).find('option:selected');
        var sort = selected.data('sort');
        if(sort!=""){
            sort += mse2Config.method_delimeter + selected.val();
        }else{
            sort = '';
        }
        mse2Config.sort =  sort;
        mSearch2.submit();
    });
});
(jQuery)
</script>
{/block}


