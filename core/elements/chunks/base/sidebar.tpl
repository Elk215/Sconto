<aside class="col-md-3 sidebar">
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
        <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]] <i class="cat-icon icon [[+categoryIcon]] custom"></i></a></li>
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

    <div class="widget">
        [[!BannerY?
        &position=`2`
        &limit=`2`
        &tpl=`@CODE: 
        <div class="banner v6 wow zoomIn" data-wow-delay="0.3s">
            <a href="[[++bannery_click]]/[[+adposition]]"><img src="[[+image]]" alt="[[+name]]"></a>
        </div>                   
        `
        ]]
    </div>
</aside>