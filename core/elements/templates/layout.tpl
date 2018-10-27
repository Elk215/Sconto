{include 'file:chunks/base/head.tpl'}
{include 'file:chunks/base/header.tpl'}

{block 'main'}

{/block}

<footer class="footer footer5">
            <div class="footer-newsletter">
                <div class="container-fluid">
                    <h4>[[++newsletterTitle]]</h4>
                    <p>[[++newsletterText]]</p>
                    [[!AjaxForm?
                    &snippet=`FormIt`
                    &form=`@FILE chunks/newsletterForm.tpl`
                    &hooks=`email,FormItSaveForm`
                    &formFields=`email`
                    &fieldNames=`email==E-mail`
                    &validate=`email:email:required`
                    &validationErrorMessage=`Что-то пошло не так, проверьте форму!!!`
                    &formName=`Форма подписки на новости`
                    &successMessage=`Форма успешно отправлена`
                    &emailTo=`bamper25@gmail.com`
                    &emailSubject=`Письмо с подписки на новости`
                    &emailFromName=`От дяди Пети`
                    ]]
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
                                    <li>[[++footerPhone]]</li>
                                    <li>[[++footerPhone2]]</li>
                                </ul>
                                <p>Service hours: [[++workTime]]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container"><img src="[[++footerLogo]]" alt="Sconto" class="footer-logo">
                    <div class="payment-info">
                        <p>[[++footerText]]</p>
                        <img src="assets/sconto/assets/images/cards.png" alt="Payment methods">
                    </div>
                    <a class="scroll-top icon" href="#top" title="Scroll top"><span class="sr-only">Scroll Top</span></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/sconto/assets/js/plugins.min.js"></script>
    {block 'add_hot__js'}{/block}
    <script src="assets/sconto/assets/js/main.js"></script>
    
    {block 'add_js'}{/block}
    

</body>

</html>
