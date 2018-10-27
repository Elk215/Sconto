{extends 'file:templates/layout.tpl'}

{block 'main'}
        <div class="mb30"></div>
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="banner-top-container">
                            <div class="row">
                                <div class="slider-col">
                                    <div class="banner-top-slider swiper-container">
                                        <div class="swiper-wrapper">
                                        [[getImageList?
                                        &tvname=`homeSlider`
                                        &tpl=`@CODE:
                                        <div class="swiper-slide banner v5"><img src="[[+homeSliderImage]]" class="banner-bg" alt="Banner">
                                            <div class="banner-content banner-contentbg">
                                                <h4>[[+homeSliderTitle]]</h4>
                                                <h3>[[+homeSliderTitle2]]</h3>
                                                <p>[[+homeSliderText]]</p>
                                                <a href="[[+homeSliderButtonLink]]" class="btn btn-custom">[[+homeSliderButton]]</a>
                                            </div>
                                        </div>
                                        `
                                        ]]
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="banner-col">
                                    [[!BannerY?
                                     &position=`1`
                                     &tpl=`@CODE: 
                                    <div class="banner v5">
                                        <a href="[[++bannery_click]]/[[+adposition]]"><img src="[[+image]]" alt="[[+name]]"></a>
                                    </div>
                                     `
                                    ]]
                                </div>
                            </div>
                        </div>
                        <div class="mb50 mb30-sm mb20-xs"></div>
                        <div class="products-tab-container smaller" role="tabpanel">
                        [[!pdoMenu?
                        &parents=`8`
                        &includeTVs=`categoryIconBig`
                        &tplOuter=`@CODE:
                        <ul class="nav nav-icons nav-justified text-center text-uppercase" role="tablist">
                            [[+wrapper]]
                        </ul>
                        `
                        &firstClass=`active`
                        &tpl=`@CODE:
                            <li role="presentation" [[+classes]]>
                                <a href="#tab-[[+id]]" aria-controls="[[+menutitle]]" role="tab" data-toggle="tab" title="[[+menutitle]]" [[+attributes]]>
                                    <i class="icon tab-icon [[+categoryIconBig]]"></i> <span class="sr-only">[[+menutitle]]</span>
                                </a>
                            </li>
                        `
                        ]]
                            <div class="tab-content">
                            {foreach ['9','10'] as $field}
                                <div role="tabpanel" class="tab-pane {if $field==9?}active{/if}" id="tab-{$field}">
                                
                                    <div class="row product-container-row">
                                        <div class="products-container max-col-4" data-layoutmode="fitRows">
                                            [[!msProducts?
                                            &limit=`4`
                                            &parents=`{$field}`
                                            &includeThumbs=`medium`
                                            &tpl=`custom.msProducts.row2`
                                            &sortdir=`DESC`
                                            ]]
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                            </div>
                        </div>
                        <div class="mb45 visible-lg"></div>
                        <div class="banner-row-container">
                            <div class="row">
                                <div class="banner-main-col">
                                    <div class="banner v6 bigger wow zoomIn">
                                        [[!BannerY?
                                        &position=`3`
                                        &tpl=`@CODE: 
                                            <a href="[[++bannery_click]]/[[+adposition]]"><img src="[[+image]]" alt="[[+name]]"></a>                     
                                        `
                                        ]]
                                    </div>
                                </div>
                                <div class="banner-side-col">
                                    [[!BannerY?
                                    &position=`2`
                                    &tpl=`@CODE: 
                                    <div class="banner v6 wow zoomIn" data-wow-delay="0.3s">
                                        <a href="[[++bannery_click]]/[[+adposition]]"><img src="[[+image]]" alt="[[+name]]"></a>
                                    </div>                   
                                    `
                                    ]]
                                </div>
                            </div>
                        </div>
                        <div class="mb100 mb70-sm mb30-xs"></div>
                        <div class="widget-area">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h3 class="widget-title">Popular</h3>
                                        <div class="swiper-container widget-top-products-slider">
                                        [[!msProducts?
                                        &limit=`3`
                                        &parents=`8`
                                        &sortdir=`DESC`
                                        &includeThumbs=`mini`
                                        &tpl=`custom.msProducts.Mini`
                                        &where=`{ "Data.popular":1 }`
                                        ]]
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h3 class="widget-title">New</h3>
                                        <div class="swiper-container widget-top-products-slider">
                                        [[!msProducts?
                                        &limit=`3`
                                        &sortdir=`DESC`
                                        &parents=`8`
                                        &includeThumbs=`mini`
                                        &tpl=`custom.msProducts.Mini`
                                        &where=`{ "Data.new":1 }`
                                        ]]
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h3 class="widget-title">Last product</h3>
                                        <div class="swiper-container widget-top-products-slider">
                                        [[!msProducts?
                                        &limit=`3`
                                        &sortdir=`DESC`
                                        &parents=`8`
                                        &includeThumbs=`mini`
                                        &tpl=`custom.msProducts.Mini`
                                        ]]
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb20 mb0-xs"></div>
                        [[getImageList?
                        &toPlaceholder=`partners`
                        &tvname=`manufacturers`
                        &tpl=`@CODE:
                        <div class="swiper-slide">
                            <div class="partner">
                                <img src="[[+partnerImage]]" alt="Partner">
                            </div>
                        </div>
                        `
                        ]]
                        [[+partners:notempty=`
                        <div class="swiper-container partners-small-carousel">
                            <div class="carousel-header bordered">
                                <h2 class="carousel-title text-center">MANUFACTURERS</h2>
                                <div class="swiper-nav-wrapper">
                                    <div class="swiper-button-prev icon"></div>
                                    <div class="swiper-button-next icon"></div>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                [[+partners]]
                            </div>
                        </div>
                        `:else=``]]

                        <div class="mb90-sm mb70-xs visible-sm visible-xs"></div>
                    </div>
                    <div class="mb30 visible-sm visible-xs clearfix"></div>
                    <aside class="col-md-3 col-md-pull-9 sidebar v2">
                        <div class="sidebar-wrapper">
                            
                            [[!pdoMenu?
                            &parents=`8`
                            &includeTVs=`categoryIcon`
                            &tplOuter=`@CODE:
                            <div class="widget widget-category">
                                <h3 class="widget-title">Shop By Categories <i class="icon cat-title-icon"></i></h3>
                                <ul class="category-list">
                                    [[+wrapper]]
                                </ul>
                            </div>
                            `
                            &tpl=`@CODE:
                                <li><a href="[[+link]]" [[+attributes]]>[[+menutitle]] <i class="cat-icon icon [[+categoryIcon]] custom"></i></a></li>
                            `
                            ]]

                            [[*addTestimonials:is=`Yes`:then=`
                            [[!getImageList?
                            &toPlaceholder=`testimonialItem`
                            &tvname=`testimonial`
                            &docid=`6`
                            &tpl=`@CODE:
                            <div class="swiper-slide testimonial">
                                <blockquote>
                                    <p>[[+text]]</p>
                                </blockquote>
                                <div class="testimonial-owner">
                                    <figure><img src="[[+avatar]]" alt="Mark"></figure>
                                    <div class="owner-meta">[[+author]],<br>[[+data]]</div>
                                </div>
                            </div>
                            `
                            ]]
                            [[+testimonialItem:notempty=`
                            <div class="widget">
                                <h3 class="widget-title">Testimonials</h3>
                                <div class="widget-body">
                                    <div class="swiper-container testimonials-slider">
                                        <div class="swiper-wrapper">
                                        [[+testimonialItem]]
                                        </div>
                                        <div class="swiper-button-next icon"></div>
                                        <div class="swiper-button-prev icon"></div>
                                    </div>
                                </div>
                            </div>
                            `:else=``]]
                            `:else=``]]
                        </div>
                    </aside>
                </div>
            </div>
            <div class="mb170 mb50-sm"></div>
        </div>
{/block}

{block 'add_js'}
<script>
        $(function() {
            "use strict";
            new Swiper(".banner-top-slider", {
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
    </script>
{/block}

