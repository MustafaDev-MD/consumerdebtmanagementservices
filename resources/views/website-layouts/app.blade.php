<!DOCTYPE html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'State Attorney LLC' }}</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->

    {{-- CSS --}}
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
    <link id="default-css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/shortcodes.css') }}"> -->
    <link id="shortcodes-css" href="{{ asset('assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"> -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('assets/skins/maroon/style.css') }}"> -->
    <link id="skin-css" href="{{ asset('assets/skins/maroon/style.css') }}" rel="stylesheet" media="all" />


    {{-- Google Fonts (fixed https) --}}
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    {{-- Font Awesome --}}
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->

    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'dd/mm/yy',
            });
        });
    </script>

    {{-- JS (head) --}}
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>

    <div class="wrapper">
        <div class="inner-wrapper">

            {{-- HEADER --}}
            @include('website-partial.header')

            <!--main starts-->
            <div id="main">

                {{-- MAIN CONTENT --}}
                @yield('content')

                <!--office_locations starts-->
                <!-- <div class="office_locations">
                    <div class="container">
                        <p> Our Offices: </p>
                        <ul class="dt-sc-locations">
                            <li>
                                <a href="#"> Princeton, NJ </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 3rd Floor, Sedrik Street, <br>
                                        Princeton, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Flemington, NJ </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 1rd Floor, Sedrik Street, <br>
                                        Flemington, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Red Bank, NJ </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 3rd Floor, Aslan Street, <br>
                                        Red Bank, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Wilmington, DE </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 3rd Floor, Sedrik Street, <br>
                                        Wilmington, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Georgetown, DE </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 3rd Floor, Sedrik Street, <br>
                                        Georgetown, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> New York, NY </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 4th Floor, Moro Street, <br>
                                        New York, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Haddonfield, NJ </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 3rd Floor, Sedrik Street, <br>
                                        Haddonfield, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Philadelphia, PA </a>
                                <div class="dt-sc-text-overlay">
                                    <p class="address"> <span class="fa fa-location-arrow"></span> 32nd Floor, Hagid Street, <br>
                                        Philadelphia, PA 16103
                                    </p>
                                    <p> <span class="fa fa-envelope-o"></span> <a href="#"> abc@somemail.com </a> </p>
                                    <p> <span class="fa fa-phone"></span> Phone: 224-335-3654 </p>
                                    <p> <span class="fa fa-fax"></span> Fax: 112-223-2265 </p>
                                    <a href="#" class="dt-sc-button"> <span class="fa fa-map-marker"></span> View on Map </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!--office_locations ends-->

            </div>
            <!--main ends-->

            {{-- FOOTER --}}
            @include('website-partial.footer')

        </div>
    </div>

    {{-- HELP FORM (converted to Laravel safe form) --}}
    <div class="fixed-help-form">
        <div class="fixed-help-form-icon">
            <img src="{{ asset('assets/images/fixed-help-form-icon.png') }}">
        </div>

        <h4> Help Form </h4>
        <p> This form helps you to get the search you need. In case if you feel like talking to us pls feel to contact
            through. </p>
        <p> <span> Office | +22 004 324 1124 </span> </p>
        <form name="helpform" method="post" class="help-form" action="php/helpform.php">
            <p>
                <input type="text" placeholder="First Name" class="text_input" name="hf_first_name" required />
            </p>
            <p>
                <input type="text" placeholder="Last Name" class="text_input" name="hf_last_name" required />
            </p>
            <p>
                <span class="select-sort">
                    <select name="hf_consult_incident">
                        <option value=""> - Practice Area - </option>
                        <option value="Divorce Cases"> - Divorce Cases - </option>
                        <option value="Local Asset Management"> - Local Asset Management - </option>
                        <option value="Health Insurance"> - Health Insurance - </option>
                        <option value="Business Law"> - Business Law - </option>
                        <option value="Pregnancy"> - Pregnancy - </option>
                        <option value="Estate Planning"> - Estate Planning - </option>
                    </select>
                </span>
            </p>
            <p>
                <span class="select-sort">
                    <select name="hf_consult_incident_2">
                        <option value=""> - Title - </option>
                        <option value="Divorce Cases"> - Compensation Defense - </option>
                        <option value="Local Asset Management"> - Subrogation - </option>
                        <option value="Health Insurance"> - Arbitration - </option>
                    </select>
                </span>
            </p>
            <div id="ajax_helpform_msg"> </div>
            <p>
                <input type="submit" value="&#xf002; &nbsp; Search">
            </p>
        </form>
    </div>

    <a href="#" class="back-to-top">
        <span class="fa fa-angle-up"></span>
    </a>

    {{-- JS --}}
    <!-- <script src="{{ asset('assets/js/jquery.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery-easing-1.3.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/jquery.jquery.tabs.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.jquery.viewport.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.smartresize.js') }}"></script>
    <script src="{{ asset('assets/js/shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-easing-1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.tabs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.viewport.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.smartresize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/shortcodes.js') }}"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->

    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/custom.js') }}"></script> -->

    {{-- Layer Slider --}}
    <script src="{{ asset('assets/js/jquery-transit-modified.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/greensock.js') }}"></script>
    <script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>

    <script type="text/javascript">
        var lsjQuery = jQuery;
    </script>
    <script
        type="text/javascript">
        lsjQuery(document).ready(function() {
            if (typeof lsjQuery.fn.layerSlider == "undefined") {
                lsShowNotice('layerslider_2', 'jquery');
            } else {
                lsjQuery("#layerslider_2").layerSlider({
                    responsiveUnder: 1240,
                    layersContainer: 1170,
                    skinsPath: 'assets/js/layerslider/skins/'
                })
            }
        });
    </script>

</body>

</html>