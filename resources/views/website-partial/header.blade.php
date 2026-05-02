<header>
    <!--top-bar starts-->
    <div class="top-bar">
        <div class="container">
            <ul class="dt-sc-social-icons">
                <li><a href="#" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#" title="Google Plus"><span class="fa fa-google-plus"></span></a></li>
                <li><a href="#" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#" title="Youtube"><span class="fa fa-youtube"></span></a></li>
                <li><a href="#" title="Linkedin"><span class="fa fa-linkedin"></span></a></li>
            </ul>
            <div class="dt-sc-contact-number">
                <span class="fa fa-phone"> </span> Call us: (212) 742 1414
            </div>
        </div>
    </div>
    <!--top-bar ends-->
    <div class="container">
        <div class="logo">
            <a href="index.html" title="State Attorney, LLC">
                <!-- <img src="{{ asset('assets/images/logo.png') }}" alt="State Attorney, LLC" title="State Attorney, LLC"> -->
                <h2 style="margin:20px 0px;">Consumer Debt<br> Management Services </h2>
            </a>
        </div>
        <div class="alignright">
            <a class="dt-sc-bordered-button" href="#"> Free Consultation </a>
        </div>
    </div>
    <!--menu-container starts-->
    <div id="menu-container">
        <div class="container">
            <!--nav starts-->
            <nav id="main-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                <ul id="menu-main-menu" class="menu">
                    <li class="{{ request()->routeIs('home') ? 'current_page_item' : '' }}"> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="{{ request()->routeIs('how-it-works') ? 'current_page_item' : '' }}"> <a href="{{ route('how-it-works') }}"> How It Works </a> </li>
                    <li class="{{ request()->routeIs('about-us') ? 'current_page_item' : '' }}"> <a href="{{ route('about-us') }}"> About Us </a> </li>
                    <li class="{{ request()->routeIs('resources') ? 'current_page_item' : '' }}"> <a href="{{ route('resources') }}"> Resources </a> </li>
                    <li class="{{ request()->routeIs('our-firm') ? 'current_page_item' : '' }}"> <a href="{{ route('our-firm') }}"> Our Firm </a> </li>
                    <li class="{{ request()->routeIs('our-practices') ? 'current_page_item' : '' }}"> <a href="{{ route('our-practices') }}"> Our Practices </a> </li>

                    <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 {{ request()->routeIs('our-people') ? 'current_page_item' : '' }}"> <a href="{{ route('our-people') }}"> Our People </a>
                        <div class="megamenu-child-container">
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area fill-two-columns">
                                    <a href="#"> About </a>
                                    <!--menu-item-widget-area-container starts-->
                                    <div class="menu-item-widget-area-container">
                                        <ul>
                                            <li class="widget widget_text">
                                                <div class="textwidget">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title="">
                                                    </div>
                                                    <div class="alignleft">
                                                        <span class="alignleft dt-sc-highlight"> We provide effective and reliable solutions. Looking for legal help?</span>
                                                        <div class="dt-sc-hr-image"></div>
                                                        <div class="dt-sc-hr-invisible-very-small"></div>
                                                        <span class="alignleft dt-sc-highlight"> We let you know the right way. </span>
                                                        <a class="dt-sc-bordered-button first" href="#"> <span class="fa fa-thumbs-o-up"></span> By Direct </a>
                                                        <a class="dt-sc-bordered-button" href="#"> <span class="fa fa-phone"></span> By Phone </a>
                                                    </div>
                                                    <div class="dt-sc-clear"></div>
                                                    <p> At vero eos et accusamus et iusto odio dignissimos duci blandits quite praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--menu-item-widget-area-container ends-->
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area">
                                    <a href="#"> Latest Blog </a>
                                    <!--menu-item-widget-area-container starts-->
                                    <div class="menu-item-widget-area-container">
                                        <ul>
                                            <li class="widget widget_recent_entries">
                                                <ul>
                                                    <li>
                                                        <div class="entry-meta">
                                                            <p class="date"> <span class="fa fa-calendar-o"></span> 20 June 2014 </p>
                                                            <a href="#" class="comments"> <span class="fa fa-comment"></span> 16 </a>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h6><a href="news-detail.html"> Free consultation makes you decide to pursue the case </a></h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="entry-meta">
                                                            <p class="date"> <span class="fa fa-calendar-o"></span> 20 June 2014 </p>
                                                            <a href="#" class="comments"> <span class="fa fa-comment"></span> 16 </a>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h6><a href="news-detail.html"> Estimating your Budget in the consultations </a></h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="entry-meta">
                                                            <p class="date"> <span class="fa fa-calendar-o"></span> 20 June 2014 </p>
                                                            <a href="#" class="comments"> <span class="fa fa-comment"></span> 16 </a>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h6><a href="news-detail.html"> Accident cases taken under crime divsions </a></h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                    <!--menu-item-widget-area-container ends-->
                                </li>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area">
                                    <a href="#"> Testimonials </a>
                                    <!--menu-item-widget-area-container starts-->
                                    <div class="menu-item-widget-area-container">
                                        <ul>
                                            <li class="widget widget_text">
                                                <div class="textwidget">
                                                    <div class="dt-sc-testimonial">
                                                        <blockquote><q> But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces little more line to make this complete </q></blockquote>
                                                        <div class="author-meta">
                                                            <p> Jason Shane </p>
                                                            <span> Business Consultant / <strong> Magick Wall </strong> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <!--menu-item-widget-area-container ends-->
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area fill-four-columns">
                                    <a href="#"> Our Practices </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-2">
                                            <span class="nolink-menu"></span>
                                            <div class="dt-megamenu-custom-content">
                                                <div class="dt-sc-one-fourth column first">
                                                    <div class="dt-sc-ico-content type1">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/practice_icon1.png') }}" alt="" title="">
                                                        </div>
                                                        <h5><a href=""> Employment Law </a></h5>
                                                        <span> Anything Related to Employment </span>
                                                    </div>
                                                </div>

                                                <div class="dt-sc-one-fourth column">
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
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <a class="dt-menu-expand">+</a>
                    </li>

                    <li class="{{ request()->routeIs('news-events') ? 'current_page_item' : '' }}"> <a href="{{ route('news-events') }}" title=""> News &amp; Events </a> </li>
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
                    </li>
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