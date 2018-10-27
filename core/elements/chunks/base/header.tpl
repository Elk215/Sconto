<body>
    <div id="wrapper">
        <header class="header header4">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-top-text">Now shipping to Canada.</div>
                    <ul class="top-dropdowns">
                        <li><a href="#"><span>My Support</span></a></li>
                        <li class="hidden-xs"><a href="#"><span>My Favorites</span></a></li>
                        <li class="hidden-xs"><a href="#"><span>Checkout</span></a></li>
                        <li class="hidden-xs"><a href="#"><span>MY Wishlist</span></a></li>
                        <li><a href="#"><i class="icon top-icon top-icon-creditcard"></i> <span>Currency</span></a>
                            <ul>
                                <li><a href="#">Us Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                                <li><a href="#">Pound St</a></li>
                                <li><a href="#">Yuan</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon top-icon top-icon-flag"></i> <span>Language</span></a>
                            <ul>
                                <li>
                                    <a href="#"><img src="assets/sconto/assets/images/flags/england.jpg" alt="England Flag"> <span>English</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/sconto/assets/images/flags/spain.jpg" alt="Spain Flag"> <span>Spanish</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/sconto/assets/images/flags/france.jpg" alt="France Flag"> <span>French</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/sconto/assets/images/flags/germany.jpg" alt="Germany Flag"> <span>German</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/sconto/assets/images/flags/italy.jpg" alt="Italy Flag"> <span>Italian</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-inner">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="[[++site_url]]" title="Sconto - Premium eCommerce Template"><img src="[[++headerLogo]]" alt="Sconto"></a>
                    </div>
                    <div class="dropdowns-container">
                        <div class="header-boxes-container">
                            <div class="header-box"><i class="icon icon-truck"></i>
                                <div class="header-box-title">[[++delivery]]</div>
                                <p>on all orders</p>
                            </div>
                            <div class="header-box"><i class="icon icon-phone"></i>
                                <div class="header-box-title text-custom">[[++footerPhone]]</div>
                                <p>call us now</p>
                            </div>
                        </div>
                        <div class="header-search-container">
                            [[!SimpleSearchForm? 
                                &tpl=`search`
                                &landing=`22`
                            ]]
                        </div>
                        <div class="alldropdowns-wrapper">
                            <button type="button" class="navbar-toggle"><span class="toggle-wrapper"><span class="toggle-text">Menu</span> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></span>
                            </button>
                            <div class="dropdowns-wrapper">
                                <div class="dropdown header-dropdown login-dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon icon-header icon-lock"></i></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-title">Register Form</div>
                                        <form action="#">
                                            <div class="form-group label-overlay">
                                                <input type="text" class="form-control" required>
                                                <label class="input-desc"><i class="icon input-icon input-user"></i>Enter your username <span class="input-required">*</span></label>
                                            </div>
                                            <div class="form-group label-overlay">
                                                <input type="email" class="form-control" required>
                                                <label class="input-desc"><i class="icon input-icon input-email"></i>Enter your email <span class="input-required">*</span></label>
                                            </div>
                                            <div class="form-group label-overlay">
                                                <input type="password" class="form-control" required>
                                                <label class="input-desc"><i class="icon input-icon input-password"></i>Enter your password <span class="input-required">*</span></label>
                                            </div>
                                            <div class="form-group label-overlay">
                                                <input type="password" class="form-control" required>
                                                <label class="input-desc"><i class="icon input-icon input-password"></i>Repeat your password <span class="input-required">*</span></label>
                                            </div>
                                            <button type="submit" class="btn btn-custom">Register Account</button>
                                        </form>
                                    </div>
                                </div>
                                <ul class="header-dropdown account-dropdown">
                                    <li><a href="#" title="My Account"><i class="icon icon-header icon-user"></i> <span>My Account</span></a>
                                        <ul>
                                            <li><a href="#"><i class="icon icon-dropdown icon-dropdown-user"></i> <span>My Account</span></a></li>
                                            <li><a href="#"><i class="icon icon-dropdown icon-dropdown-wishlist"></i> <span>My Wishlist</span></a></li>
                                            <li><a href="#"><i class="icon icon-dropdown icon-dropdown-heart"></i> <span>My Favorites</span></a></li>
                                            <li><a href="#"><i class="icon icon-dropdown icon-dropdown-check"></i> <span>Checkout</span></a></li>
                                            <li><a href="#"><i class="icon icon-dropdown icon-dropdown-lock"></i> <span>Login or Register</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="dropdown header-dropdown cart-dropdown">
                                [[!msMiniCart?
                                tpl=`custom.msCart.dropdown`
                                ]]
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="menu-wrapper sticky-header">
                <div class="container-fluid">
                    [[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &resources=`1,8,6,5`
                    &sortby=``
                    &tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`
                    &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]">[[+menutitle]]</a></li>`
                    &hereClass=`open`
                    &outerClass=`menu`
                    ]]
                    [[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &resources=`1,8,6,5`
                    &sortby=``
                    &tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`
                    &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]">[[+menutitle]]</a></li>`
                    &hereClass=`open`
                    &outerClass=`mobile-menu`
                    ]]
                </div>
                
            </nav>
            
        </header>