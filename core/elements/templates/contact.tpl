{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    <div class="map-container">
        <div id="map"></div>
        <div class="form-container">
            <h2>CONTACT</h2>
            [[!AjaxForm?
            &snippet=`FormIt`
            &form=`@FILE chunks/contactForm.tpl`
            &hooks=`email,FormItSaveForm`
            &formFields=`name,email,subject`
            &fieldNames=`name==Name,email==E-mail,subject==subject`
            &validate=`name:required,subject:required,email:email:required,message:required`
            &validationErrorMessage=`Что-то пошло не так, проверьте форму!!!`
            &formName=`Форма со страницы контакты`
            &successMessage=`Форма успешно отправлена`
            &emailTo=`bamper25@gmail.com`
            &emailSubject=`Письмо со страницы контакты`
            &emailFromName=`От дяди Пети`
            ]]
        </div>
    </div>
    <div class="contact-infos-container">
        <div class="container-fluid">
            <div class="contact-infos-wrapper">
                <div class="row">
                    <div class="col-sm-4 contact-info-container">
                        <div class="contact-info"><i class="icon contact-icon contact-pin-white"></i>
                            <div class="contact-info-meta">
                                <h3>our location</h3><address>[[++address]]</address>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 contact-info-container">
                        <div class="contact-info"><i class="icon contact-icon contact-email-white"></i>
                            <div class="contact-info-meta">
                                <h3>Contact Details</h3>
                                <ul>
                                    <li><span>Email:</span> <a href="mailto:[[++companyEmail]]">[[++companyEmail]]</a></li>
                                    <li><span>Skype:</span> [[++companySkype]]</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 contact-info-container">
                        <div class="contact-info"><i class="icon contact-icon contact-phone-white"></i>
                            <div class="contact-info-meta">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li><span>Phone:</span> [[++footerPhone]]</li>
                                    <li><span>Mobile:</span> [[++footerPhone2]]</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}

{block 'add_js'}
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
        ! function() {
            "use strict";
            if (document.getElementById("map") && "object" == typeof google) {
                var e, t, s = [
                        ["<address><strong>Address:</strong> Oxford Street 48/188, London 02587, UK, 24-157 <br> <strong>Phone:</strong> 0203 - 980 - 14 - 79</address>", 41.994953, 12.585666]
                    ],
                    l = new google.maps.Map(document.getElementById("map"), {
                        zoom: 5,
                        center: new google.maps.LatLng(39.532365, -5.871364),
                        scrollwheel: !1,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        styles: [{
                            featureType: "all",
                            elementType: "geometry",
                            stylers: [{
                                color: "#e7f8fd"
                            }]
                        }, {
                            featureType: "all",
                            elementType: "labels.text.fill",
                            stylers: [{
                                gamma: .01
                            }, {
                                lightness: 20
                            }]
                        }, {
                            featureType: "all",
                            elementType: "labels.text.stroke",
                            stylers: [{
                                saturation: -31
                            }, {
                                lightness: -33
                            }, {
                                weight: 2
                            }, {
                                gamma: .8
                            }]
                        }, {
                            featureType: "all",
                            elementType: "labels.icon",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "administrative",
                            elementType: "geometry",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "administrative",
                            elementType: "geometry.stroke",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "administrative",
                            elementType: "labels",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "landscape",
                            elementType: "geometry",
                            stylers: [{
                                lightness: 30
                            }, {
                                saturation: 30
                            }]
                        }, {
                            featureType: "landscape",
                            elementType: "labels",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "poi",
                            elementType: "geometry",
                            stylers: [{
                                saturation: 20
                            }]
                        }, {
                            featureType: "poi",
                            elementType: "labels",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "poi.park",
                            elementType: "geometry",
                            stylers: [{
                                lightness: 20
                            }, {
                                saturation: -20
                            }]
                        }, {
                            featureType: "road",
                            elementType: "geometry",
                            stylers: [{
                                lightness: 10
                            }, {
                                saturation: -30
                            }, {
                                visibility: "off"
                            }]
                        }, {
                            featureType: "road",
                            elementType: "geometry.stroke",
                            stylers: [{
                                saturation: 25
                            }, {
                                lightness: 25
                            }]
                        }, {
                            featureType: "road",
                            elementType: "labels",
                            stylers: [{
                                visibility: "off"
                            }]
                        }, {
                            featureType: "water",
                            elementType: "all",
                            stylers: [{
                                lightness: -20
                            }]
                        }, {
                            featureType: "water",
                            elementType: "labels",
                            stylers: [{
                                visibility: "off"
                            }]
                        }]
                    }),
                    a = new google.maps.InfoWindow;
                for (t = 0; t < s.length; t++) e = new google.maps.Marker({
                    position: new google.maps.LatLng(s[t][1], s[t][2]),
                    map: l,
                    animation: google.maps.Animation.DROP,
                    icon: "assets/sconto/assets/images/pin.png"
                }), google.maps.event.addListener(e, "click", function(e, t) {
                    return function() {
                        a.setContent(s[t][0]), a.open(l, e)
                    }
                }(e, t))
            }
        }()
    </script>
{/block}

