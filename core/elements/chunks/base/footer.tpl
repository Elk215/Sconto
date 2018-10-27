<footer class="footer footer5">
            <div class="footer-newsletter">
                <div class="container-fluid">
                    <h4>Stay in the know!</h4>
                    <p>Subscribe for the latest styles and sales, plus get 25% off your first order.</p>
                    <form>
                        <input type="email" class="form-control" placeholder="your@email.com" required>
                        <button type="submit" class="btn btn-link-icon"><i class="icon icon-btn-arrow"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">Information</h4>
                                <ul class="links">
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Top sellers</a></li>
                                    <li><a href="#">Specials products</a></li>
                                    <li><a href="#">Manufacturers</a></li>
                                    <li><a href="#">Suppliers</a></li>
                                    <li><a href="#">Our Stores</a></li>
                                    <li><a href="#">Coupons</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="links">
                                    <li><a href="#">Help &amp; Contact</a></li>
                                    <li><a href="#">Shipping &amp; Taxes</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="links">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Personal Information</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Your Vouchers</a></li>
                                    <li><a href="#">Addresses</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">Support</h4>
                                <ul class="call-list">
                                    <li>0203 - 980 - 14 - 79</li>
                                    <li>0203 - 478 - 12 - 96</li>
                                </ul>
                                <p>Service hours: 09:00 - 20:00</p>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Follow Us</h4>
                                <div class="social-icons smaller"><a href="#" class="social-icon icon facebook" title="Facebook"><span class="sr-only">Facebook</span></a> <a href="#" class="social-icon icon twitter" title="Twitter"><span class="sr-only">Twitter</span></a> <a href="#" class="social-icon icon pinterest" title="Pinterest"><span class="sr-only">Pinterest</span></a> <a href="#" class="social-icon icon instagram" title="Instagram"><span class="sr-only">Instagram</span></a> <a href="#" class="social-icon icon flickr" title="Flickr"><span class="sr-only">Flickr</span></a> <a href="#" class="social-icon icon skype" title="Skype"><span class="sr-only">Skype</span></a> <a href="mailto:#" class="social-icon icon email" title="Email"><span class="sr-only">Email</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container"><img src="assets/images/footer-logo2.png" alt="Sconto" class="footer-logo">
                    <div class="payment-info">
                        <p>Easy returns. Free shipping on orders over $100. Need help? <a href="#">Help Center.</a></p><img src="assets/images/cards.png" alt="Payment methods"></div><a class="scroll-top icon" href="#top" title="Scroll top"><span class="sr-only">Scroll Top</span></a></div>
            </div>
        </footer>
    </div>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.js"></script>
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
</body>

</html>