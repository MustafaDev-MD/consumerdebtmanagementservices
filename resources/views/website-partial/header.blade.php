<header>
    <!--top-bar starts-->
    <div class="top-bar">
        <div class="container">
            <!-- <ul class="dt-sc-social-icons">
                <li><a href="#" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#" title="Google Plus"><span class="fa fa-google-plus"></span></a></li>
                <li><a href="#" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#" title="Youtube"><span class="fa fa-youtube"></span></a></li>
                <li><a href="#" title="Linkedin"><span class="fa fa-linkedin"></span></a></li>
            </ul> -->
            <div class="dt-sc-contact-number">
                <span class="fa fa-phone"> </span> Call us: (212) 742 1414
            </div>
        </div>
    </div>
    <!--top-bar ends-->
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}" title="Consumer Debt Management Services">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Consumer Debt Management Services" title="Consumer Debt Management Services" style="margin:20px 0px;">
                <!-- <h2 style="margin:20px 0px;">Consumer Debt<br> Management Services </h2> -->
            </a>
        </div>
        <div class="alignright">
            <a class="dt-sc-bordered-button dt-sc-bordered-button-secondary" href="#"> Free Consultation </a>
        </div>
    </div>
    <!--menu-container starts-->
    <div id="menu-container">
        <div class="container">
            <!--nav starts-->
            <nav id="main-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                <ul id="menu-main-menu" class="menu">
                    <li class="{{ request()->routeIs('home') ? 'current_page_item' : '' }}">
                        <a href="{{ route('home') }}"> Home </a> 
                    </li>
                    <li class="{{ request()->routeIs('how-it-works') ? 'current_page_item' : '' }}">
                        <a href="{{ route('how-it-works') }}"> How It Works </a> 
                    </li>
                    <li class="{{ request()->routeIs('about-us') ? 'current_page_item' : '' }}"> 
                        <a href="{{ route('about-us') }}"> About Us </a> 
                    </li>
                    <!-- <li class="{{ request()->routeIs('resources') ? 'current_page_item' : '' }}"> <a href="{{ route('resources') }}"> Resources </a> </li>
                    <li class="{{ request()->routeIs('our-firm') ? 'current_page_item' : '' }}"> <a href="{{ route('our-firm') }}"> Our Firm </a> </li>
                    <li class="{{ request()->routeIs('our-practices') ? 'current_page_item' : '' }}"> <a href="{{ route('our-practices') }}"> Our Practices </a> </li> -->

                    <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 {{ request()->routeIs('our-people') ? 'current_page_item' : '' }}"> 
                        <a href="{{ route('resources') }}" > 
                            Resources 
                            <img src="{{ asset('assets/images/down-arrow.png') }}" alt="" title="">
                        </a>
                        <div class="megamenu-child-container">
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area fill-four-columns">
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-2">
                                            <span class="nolink-menu"></span>
                                            <div class="dt-megamenu-custom-content">

                                                <div class="dt-sc-one-fourth column first p-10-20">
                                                    <div class="flex gap-20 align-items-start">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/resources/credit-card-debt-relief.svg') }}" alt="" title="">
                                                        </div>
                                                        <div class="flex flex-direction-column align-items-start">
                                                            <h5 class="alignleft mb-1">
                                                                <a href="{{ route('credit-card-debt-relief') }}">
                                                                    Credit Card Debt Relief
                                                                </a>
                                                            </h5>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('credit-card-debt-forgiveness') }}">
                                                                    Credit Card Forgiveness
                                                                </a>
                                                            </span>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('how-to-eliminate-credit-card-debt') }}">
                                                                    How to Eliminate Credit Card Debt
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dt-sc-one-fourth column border-left-1 p-10-20">
                                                    <div class="flex gap-20 align-items-start">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/resources/debt-relief-settlement.svg') }}" alt="" title="">
                                                        </div>
                                                        <div class="flex flex-direction-column align-items-start">
                                                            <h5 class="alignleft mb-1">
                                                                <a href="{{ route('debt-relief-settlement') }}">
                                                                    Debt Relief Settlement
                                                                </a>
                                                            </h5>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('national-debt-relief-top-faqs') }}">
                                                                    Debt Relief FAQs
                                                                </a>
                                                            </span>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('debt-relief-options-and-benefits') }}">
                                                                    Debt Relief Options
                                                                </a>
                                                            </span>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('debt-relief-qualifications') }}">
                                                                    Qualifications
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dt-sc-one-fourth column border-left-1 p-10-20">
                                                    <div class="flex gap-20 align-items-start">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/resources/debt-consolidation.svg') }}" alt="" title="">
                                                        </div>
                                                        <div class="flex flex-direction-column align-items-start">
                                                            <h5 class="alignleft mb-1">
                                                                <a href="{{ route('debt-consolidation-relief') }}">
                                                                    Debt Consolidation Relief
                                                                </a>
                                                            </h5>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('debt-consolidation-programs') }}">
                                                                    Programs
                                                                </a>
                                                            </span>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('how-to-choose-debt-consolidation-program') }}">
                                                                    How to Choose
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dt-sc-one-fourth column border-left-1 p-10-20">
                                                    <div class="flex gap-20 align-items-start">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/resources/credit-counseling.png') }}" alt="" title="">
                                                        </div>
                                                        <div class="flex flex-direction-column align-items-start">
                                                            <h5 class="alignleft mb-1">
                                                                <a href="{{ route('credit-counseling') }}">
                                                                    Credit Counseling
                                                                </a>
                                                            </h5>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('finding-a-credit-counselor') }}">
                                                                    Finding a Credit Counselor
                                                                </a>
                                                            </span>
                                                            <span class="text-align-left mb-1">
                                                                <a href="{{ route('debt-management-plans') }}">
                                                                    Debt Management Plans
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="dt-sc-one-fourth column first">
                                                    <div class="dt-sc-ico-content type1 flex gap-20 align-items-start">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/resources/credit-card-debt-relief-white.svg') }}" alt="" title="">
                                                        </div>
                                                        <div>
                                                            <h5 class="alignleft mb-1"><a href="{{ route('credit-card-debt-relief') }}">Credit Card Debt Relief</a></h5>
                                                            <span class="text-align-left mb-1"><a href="{{ route('credit-card-debt-forgiveness') }}">Credit Card Debt Forgiveness</a></span>
                                                            <span class="text-align-left mb-1"><a href="{{ route('how-to-eliminate-credit-card-debt') }}">How to Eliminate Credit Card Debt</a></span>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <!-- <div class="dt-sc-one-fourth column">
                                                    <div class="dt-sc-ico-content type1">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/practice_icon2.png') }}" alt="" title="">
                                                        </div>
                                                        <h5><a href=""> Discrimination </a></h5>
                                                        <span> Discriminations should end </span>
                                                    </div>
                                                </div>

                                                <div class="dt-sc-one-fourth column">
                                                    <div class="dt-sc-ico-content type1">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/practice_icon3.png') }}" alt="" title="">
                                                        </div>
                                                        <h5><a href=""> Flsa Overtime </a></h5>
                                                        <span> Need to evaluate your standard </span>
                                                    </div>
                                                </div>

                                                <div class="dt-sc-one-fourth column">
                                                    <div class="dt-sc-ico-content type1">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/practice_icon4.png') }}" alt="" title="">
                                                        </div>
                                                        <h5><a href=""> Retaliation </a></h5>
                                                        <span> Stop before it causes a big trouble </span>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <a class="dt-menu-expand">+</a>
                    </li>

                    <li class="{{ request()->routeIs('client-stories') ? 'current_page_item' : '' }}"> 
                        <a href="{{ route('client-stories') }}"> 
                            Client Stories 
                        </a> 
                    </li>

                    <!-- <li class="{{ request()->routeIs('news-events') ? 'current_page_item' : '' }}"> <a href="{{ route('news-events') }}" title=""> News &amp; Events </a> </li>
                    <li class="menu-item-simple-parent menu-item-depth-0"> <a href="shortcodes.html"> Shortcodes </a>
                        <ul class="sub-menu">
                            <li> <a href="shortcodes.html"> Typography </a> </li>
                            <li> <a href="buttons.html"> Buttons </a> </li>
                            <li> <a href="columns.html"> Columns </a> </li>
                            <li> <a href="fancy-boxes.html"> Fancy Boxes </a> </li>
                            <li> <a href="icon-boxes.html"> Icon Boxes </a> </li>
                            <li> <a href="lists.html"> Lists </a> </li>
                            <li> <a href="pricing-tables.html"> Pricing Tables </a> </li>
                            <li> <a href="progressbars.html"> Progress Bars </a> </li>
                            <li> <a href="quotes.html"> Quotes </a> </li>
                            <li> <a href="tabs-toggles.html"> Tabs &amp; Toggles </a> </li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li> -->
                    <!-- <li><a href="location.html" title="">Location</a></li> -->
                </ul>
            </nav>
            <!--nav ends-->
            <!-- <form method="get" id="searchform" action="#">
                <input id="s" name="s" type="text" value="Search..." class="text_input" onblur="if(this.value==''){this.value='Search...';}" onfocus="if(this.value =='Search...') {this.value=''; }">
                <input name="submit" type="submit" value="">
            </form> -->
        </div>
    </div>
    <!--menu-container ends-->
</header>