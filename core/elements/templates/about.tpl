{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}

    <div class="story-section">
        <div class="story-video-col video-gallery" style="background-image:url([[*storyImage]])">
            <a href="[[*storyVideo]]" class="icon video-btn"></a>
        </div>
        <div class="story-content-col">
            <h2>[[*storyTitle]]</h2>
            <p>[[*storyText]]</p>
        </div>
    </div>
    
    [[!getImageList?
    &toPlaceholder=`testimonialItem`
    &tvname=`testimonial`
    &tpl=`@CODE:
    <div class="swiper-slide">
        <blockquote class="testimonial-gallery">
            <p>“[[+text]]”</p>
            <cite>[[+author]], [[+data]]</cite>
        </blockquote>
    </div>
    `
    ]]
    [[+testimonialItem:notempty=`
    <div class="testimonials-section bg-image" style="background-image:url(assets/sconto/assets/images/testimonialsbg.jpg)">
        <div class="container-fluid">
            <h3>[[*testimonialsTitle]]</h3>
            <h2>[[*testimonialsText]]</h2>
            <div class="testimonials-gallery-container">
                <div class="swiper-container testimonials-gallery">
                    <div class="swiper-wrapper">
                        [[+testimonialItem]]
                    </div>
                </div>
                <div class="testimonials-carousel-container">
                    <div class="swiper-container testimonials-gallery-carousel">
                        <div class="swiper-wrapper">
                        [[getImageList?
                        &tvname=`testimonial`
                        &tpl=`@CODE:
                        <div class="swiper-slide"><img src="[[+avatar]]" alt="Image"></div>
                        `
                        ]]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `:else=``]]

    [[!getImageList?
    &toPlaceholder=`teamItem`
    &tvname=`team`
    &tpl=`@CODE:
    <div class="swiper-slide">
        <div class="member">
            <figure><img src="[[+avatar]]" alt="Member"></figure>
            <div class="member-meta">
                <h4>[[+position]]</h4>
                <h3>[[+name]]</h3>
                <p>[[+info]]</p>
                <div class="social-icons transparent">
                    <a href="[[+facebookLink]]" class="social-icon icon facebook" title="Facebook"><span class="sr-only">Facebook</span></a>
                    <a href="[[+twitterLink]]" class="social-icon icon twitter" title="Twitter"><span class="sr-only">Twitter</span></a> 
                    <a href="[[+googleLink]]" class="social-icon icon googleplus" title="Google plus"><span class="sr-only">Google plus</span></a>
                </div>
            </div>
        </div>
    </div>
    `
    ]]
    [[+teamItem:notempty=`
    <div class="container-fluid">
        <h2 class="carousel-title text-center">MEET OUR TEAM</h2>
        <div class="swiper-container team-carousel">
            <div class="swiper-nav-wrapper">
                <div class="swiper-button-prev icon"></div>
                <div class="swiper-button-next icon"></div>
            </div>
            <div class="swiper-wrapper">
                [[+teamItem]] 
            </div>
        </div>
    </div>
    `:else=``]]
    
    [[!getImageList?
    &toPlaceholder=`partners`
    &tvname=`manufacturers`
    &docid=`1`
    &tpl=`@CODE:
    <div class="swiper-slide">
        <div class="partner">
            <img src="[[+partnerImage]]" alt="Partner">
        </div>
    </div>
    `
    ]]
    [[+partners:notempty=`
    <div class="bg-custom6 pt90 pb100 pt75-sm pb75-sm pt65-xs pb70-xs">
        <div class="container-fluid">
            <h2 class="carousel-title text-white text-center">OUR PARTNERS</h2>
            <div class="swiper-container partners-carousel">
                <div class="swiper-nav-wrapper">
                    <div class="swiper-button-prev icon light"></div>
                    <div class="swiper-button-next icon light"></div>
                </div>
                <div class="swiper-wrapper">
                    [[+partners]]
                </div>
            </div>
        </div>
    </div>
    `:else=``]]
</div>
{/block}
