<footer>
    <!--footer-widgets-wrapper starts-->
    <div class="footer-widgets-wrapper">
        <!--container starts-->
        <div class="container">
            <div class="footer_top">
                <p class="footer-logo">
                    <a href="{{ route('home') }}"> When Truth &amp; </a>
                    <a href="{{ route('home') }}"> <img src="{{ asset('assets/images/logo-footer-center.png') }}" alt="" title=""> </a>
                    <a href="{{ route('home') }}"> Justice calls </a>
                </p>
                <!-- <ul class="dt-sc-social-icons">
                    <li><a href="#" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" title="Google Plus"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" title="Youtube"><span class="fa fa-youtube"></span></a></li>
                    <li><a href="#" title="Linkedin"><span class="fa fa-linkedin"></span></a></li>
                </ul> -->
            </div>

            <div class="column dt-sc-two-sixth first">
                <aside class="widget widget_text">
                    <div class="widget_text_logo">
                        <a href="{{ route('home') }}" class="m-0">
                            <img src="{{ asset('assets/images/logo-footer.png') }}" alt="Consumer Debt Management Services" title="Consumer Debt Management Services">
                        </a>
                        <!-- <h4> Consumer Debt<br> Management Services </h4> -->
                    </div>
                    <span><i>It's all about Relief. </i></span>
                    <div class="dt-sc-hr-invisible-very-small"></div>
                    <p> Consumer Debt Management Service is a premier financial optimization platform built to resolve personal financial hardships. Whether you are seeking to establish path toward financial clarity or intending to restructure your existing accounts, Consumer Debt Management Service delivers every strategic resource you necessitate. </p>
                    <!-- <a href="#"> <strong> Learn more about our Practices <span class="fa fa-angle-double-right"></span> </strong> </a> -->
                </aside>
            </div>

            <div>

            </div>
            <div class="column dt-sc-one-fourth float-right">
                <aside class="widget widget_text">
                    <h3 class="widgettitle">Contact Details</h3>
                    <div class="textwidget">
                        <p class="dt-sc-contact-info"><span><i class="fa fa-phone"></i> Phone: </span> +22 004 324 1124 </p>
                        <p class="dt-sc-contact-info"><span><i class="fa fa-envelope"></i> Email: </span><a href="mailto:yourname@somemail.com"> info@consumerdebtservices.com </a></p>
                        <p class="dt-sc-contact-info"><i class="fa fa-location-arrow"></i>58, Thomson Street, Edison Avenue, USA</p>
                    </div>
                </aside>
            </div>

            <!-- <div class="column dt-sc-one-sixth">
                <aside class="widget widget_text">
                    <h3 class="widgettitle"> Clients </h3>
                    <ul>
                        @foreach(collect($clients ?? [])->take(5) as $client)
                        <li> <a href="{{ route('client-stories-detail', $client['slug']) }}"> {{ $client['name'] }} </a> </li>
                        @endforeach
                    </ul>
                </aside>
            </div> -->

            <div class="column dt-sc-one-sixth float-right">
                <aside class="widget widget_text">
                    <h3 class="widgettitle"> Overview </h3>
                    <ul>
                        <li> <a href="{{ route('about-us') }}"> About Us </a> </li>
                        <li> <a href="{{ route('contact-us') }}"> Contact Us </a> </li>
                        <li> <a href="{{ route('how-it-works') }}"> How It Works </a> </li>
                        <li> <a href="{{ route('client-stories') }}"> Client Stories </a> </li>
                    </ul>
                </aside>
            </div>


        </div>
        <!--container ends-->
    </div>
    <!--footer-widgets-wrapper ends-->
    <div class="copyright">
        <div class="container">
            <div class="copyright-info">Consumer Debt Management Services © 2026 </a> All Rights Reserved. </div>
            <ul class="footer-links">
                <!-- <li><a href="#"> Sitemap </a></li> -->
                <li><a href="{{ route('privacy-policy') }}"> Privacy Policy </a></li>
                <li><a href="{{ route('terms-of-use') }}"> Terms Of Use </a></li>
                <!-- <li><a href="#"> Disclaimer </a></li> -->
            </ul>
            <!-- <p> Design by <a href="http://themeforest.net/user/buddhathemes" target="_blank" title="">Buddha Themes</a> </p> -->
        </div>
    </div>
</footer>