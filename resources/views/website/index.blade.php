@extends('website-layouts.app')

@section('content')

<!--slider starts-->
<div id="slider">
    <div id="layerslider_2" class="ls-wp-container" style="width:100%;height:660px;margin:0 auto;margin-bottom: 0px;">
        <!-- <div class="ls-slide" data-ls=" transition2d: all;">
            <img src="{{ asset('assets/images/layerslider-gallery/slider1-bg1.jpg') }}" class="ls-bg" alt="Slide background" />
            <h2 class="ls-l caption-1" style="top:385px;left:7px; font-size:20px; padding:15px 30px 15px 25px;white-space: nowrap;" data-ls="offsetxin:-80;delayin:1000;skewxin:-80;"> A Perfect Law / Attorney Theme </h2>
            <p class="ls-l caption-1" style="top:452px;left:7px; font-weight:300; font-size:14px; padding:15px 50px 15px 25px; line-height:27px;white-space: nowrap;" data-ls="delayin:2000;skewxin:80;"> This theme has variety of Features like Attorneys, Practice Details, <br>
                Quick Contact, Special News pages &amp; Unique Design </p>
        </div>
        <div class="ls-slide" data-ls="slidedelay:8000; transition2d: all;">
            <img src="{{ asset('assets/images/layerslider-gallery/slider-bg2.jpg') }}" class="ls-bg" alt="Slide background" />
            <img class="ls-l" style="top:93px;left:286px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-80;delayin:500;" src="{{ asset('assets/images/layerslider-gallery/slider2-mac.png') }}" alt="">
            <img class="ls-l" style="top:213px;left:689px;white-space: nowrap;" data-ls="offsetxin:200;delayin:1000;" src="{{ asset('assets/images/layerslider-gallery/slider2-ipad.png') }}" alt="">
            <img class="ls-l" style="top:306px;left:233px;white-space: nowrap;" data-ls="offsetxin:-200;delayin:1000;" src="{{ asset('assets/images/layerslider-gallery/slider2-iphone.png') }}" alt="">
            <img class="ls-l" style="top:339px;left:663px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:4500;rotateyin:270;transformoriginin:25% 25% 0;" src="{{ asset('assets/images/layerslider-gallery/slider2-ribbon.png') }}" alt="">
            <img class="ls-l" style="top:97px;left:798px;white-space: nowrap;" data-ls="delayin:1500;skewxin:80;transformoriginin:Left 50% 50%;" src="{{ asset('assets/images/layerslider-gallery/slider2-html.png') }}" alt="">
            <img class="ls-l" style="top:188px;left:910px;white-space: nowrap;" data-ls="durationin:2000;delayin:2000;skewyin:90;" src="{{ asset('assets/images/layerslider-gallery/slider2-arrow2.png') }}" alt="">
            <img class="ls-l" style="top:184px;left:178px;white-space: nowrap;" data-ls="durationin:2000;delayin:2000;skewyin:-90;" src="{{ asset('assets/images/layerslider-gallery/slider2-arrow1.png') }}" alt="">
            <p class="ls-l" style="top:278px;left:941px;font-family:'Domine', serif; font-size:16px; color:#7d6d5e;white-space: nowrap;" data-ls="delayin:2500;rotateyin:180;">
                Coded with Latest Standard </p>
            <p class="ls-l" style="top:261px;left:37px;font-family:'Domine', serif; font-size:16px; color:#7d6d5e;white-space: nowrap;" data-ls="delayin:2500;rotateyin:-180;"> with lots of shortcodes </p>
            <h3 class="ls-l caption-2" style="top:560px;left:171px;font-family:'Domine', serif; font-size:30px; white-space: nowrap; text-transform: none; font-weight: 300;" data-ls="delayin:3500;rotateyin:90;skewxin:-60;"> We present you the best Law template </h3>
            <a href="#" class="ls-l dt-sc-bordered-button" style='top:558px;left:743px;font-family:"Source Sans Pro",sans-serif; font-size:15px; padding:10px 28px; border:1px solid #ffffff; color:#ffffff; display:inline-block; font-weight:600; padding:12px 26px; text-transform:uppercase; white-space: nowrap;' data-ls="delayin:4000;rotateyin:90;skewxin:60;"> Purchase Theme </a>
        </div> -->
        <div class="ls-slide" data-ls="slidedelay:8500; transition2d: all;">

            <!-- Background -->
            <img src="{{ asset('assets/images/layerslider-gallery/slider-bg3.jpg') }}" class="ls-bg" alt="Slide background" />

            <!-- Left Image -->
            <img class="ls-l"
                style="top:22px;left:4px;"
                data-ls="offsetxin:0;offsetyin:100;durationin:1800;delayin:500;scalexin:0.8;scaleyin:0.8;"
                src="{{ asset('assets/images/layerslider-gallery/slider3-image.png') }}" alt="">

            <!-- Name -->
            <h3 class="ls-l"
                style="top:120px;left:560px;font-family:'Domine', serif;font-weight:bold;font-size:26px;color:#ffffff;"
                data-ls="delayin:1200;skewxin:80;">
                Marcus R.
            </h3>

            <!-- Heading -->
            <h2 class="ls-l"
                style="top:550px;left:560px;font-family:'Domine', serif;font-weight:bold;font-size:17px;color:#ffffff;text-transform:uppercase;line-height:48px;"
                data-ls="offsetxin:-80;delayin:1400;skewxin:-80;">
                Reduced His Total Debt By 36%
            </h2>

            <!-- Testimonial -->
            <p class="ls-l"
                style="top:160px;left:560px;font-family:'Domine', serif;font-size:16px;color:#ffffff;line-height:26px;width:420px;"
                data-ls="offsetxin:0;delayin:2000;scalexin:0.8;scaleyin:0.8;">
                “Coming from a high-pressure background, I know the value of a reliable squad.
                Consumer Debt Management Service stepped in and became that essential backbone for me.
                Having a dedicated support structure gave me the leverage I needed to finally move forward.”
            </p>

            <div class="ls-l caption-list" style="top:325px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:3000;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-picture-o" style="margin-right:10px;"></i>
                Total Debt: <strong style="color:#f5c26b;">$38,420</strong>
            </div>
            <div class="ls-l caption-list" style="top:385px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:3500;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-user" style="margin-right:10px;"></i>
                Monthly Payment: <strong style="color:#f5c26b;">$595</strong>
            </div>
            <div class="ls-l caption-list" style="top:445px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:4000;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-briefcase" style="margin-right:10px;"></i>
                Program Length: <strong style="color:#f5c26b;">42 Months</strong>
            </div>
            <div class="ls-l caption-list" style="top:505px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:4500;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-align-justify" style="margin-right:10px;"></i>
                Total Savings: <strong style="color:#f5c26b;">$13,830</strong>
            </div>

        </div>

        <div class="ls-slide" data-ls="slidedelay:8500; transition2d: all;">

            <!-- Background -->
            <img src="{{ asset('assets/images/layerslider-gallery/slider-bg3.jpg') }}" class="ls-bg" alt="Slide background" />

            <!-- Left Image -->
            <img class="ls-l"
                style="top:22px;left:4px;"
                data-ls="offsetxin:0;offsetyin:100;durationin:1800;delayin:500;scalexin:0.8;scaleyin:0.8;"
                src="{{ asset('assets/images/layerslider-gallery/slider3-image.png') }}" alt="">

            <!-- Name -->
            <h3 class="ls-l"
                style="top:120px;left:560px;font-family:'Domine', serif;font-weight:bold;font-size:26px;color:#ffffff;"
                data-ls="delayin:1200;skewxin:80;">
                Elena G.
            </h3>

            <!-- Heading -->
            <h2 class="ls-l"
                style="top:550px;left:560px;font-family:'Domine', serif;font-weight:bold;font-size:17px;color:#ffffff;text-transform:uppercase;line-height:48px;"
                data-ls="offsetxin:-80;delayin:1400;skewxin:-80;">
                Reduced Her Total Debt By 32%
            </h2>

            <!-- Testimonial -->
            <p class="ls-l"
                style="top:160px;left:560px;font-family:'Domine', serif;font-size:16px;color:#ffffff;line-height:26px;width:420px;"
                data-ls="offsetxin:0;delayin:2000;scalexin:0.8;scaleyin:0.8;">
                “Having a team I can fully rely on has freed me up to focus on the things that truly matter in my daily life.
                Knowing their experts are handling the details gives me total peace of mind.”
            </p>

            <!-- Stats -->
            <div class="ls-l caption-list"
                style="top:325px;left:560px;font-family:'Domine', serif;font-size:16px;padding:10px 0 10px 20px;"
                data-ls="delayin:3000;">
                <i class="fa fa-picture-o" style="margin-right:15px;"> </i>
                Total Debt: <strong style="color:#f5c26b;">$42,850</strong>
            </div>

            <div class="ls-l caption-list"
                style="top:385px;left:560px;font-family:'Domine', serif;font-size:16px;padding:10px 0 10px 20px;"
                data-ls="delayin:3500;">
                <i class="fa fa-user" style="margin-right:10px;"></i>
                Monthly Payment: <strong style="color:#f5c26b;">$615</strong>
            </div>

            <div class="ls-l caption-list"
                style="top:445px;left:560px;font-family:'Domine', serif;font-size:16px;padding:10px 0 10px 20px;"
                data-ls="delayin:4000;">
                <i class="fa fa-briefcase" style="margin-right:10px;"></i>
                Program Length: <strong style="color:#f5c26b;">48 Months</strong>
            </div>

            <div class="ls-l caption-list"
                style="top:505px;left:560px;font-family:'Domine', serif;font-size:16px;padding:10px 0 10px 20px;"
                data-ls="delayin:4500;">
                <i class="fa fa-align-justify" style="margin-right:10px;"></i>
                Total Savings: <strong style="color:#f5c26b;">$13,712</strong>
            </div>

        </div>
        <!-- <div class="ls-slide" data-ls="slidedelay:8500; transition2d: all;">
            <img src="{{ asset('assets/images/layerslider-gallery/slider-bg3.jpg') }}" class="ls-bg" alt="Slide background" />
            <img class="ls-l" style="top:22px;left:4px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:100;durationin:1800;delayin:500;scalexin:0.8;scaleyin:0.8;" src="{{ asset('assets/images/layerslider-gallery/slider3-image.png') }}" alt="">
            <h3 class="ls-l" style="top:162px;left:560px;font-family:'Domine', serif; font-weight:bold; font-size:26px; color:#ffffff;white-space: nowrap;" data-ls="delayin:1500;skewxin:80;"> Create a Perfect Website for </h3>
            <h2 class="ls-l" style="top:198px;left:560px;font-family:'Domine', serif; font-weight:bold; font-size:39px; color:#ffffff; text-transform:uppercase;white-space: nowrap;" data-ls="offsetxin:-80;delayin:1500;skewxin:-80;"> law / attorney </h2>
            <p class="ls-l" style="top:270px;left:560px;font-family:'Domine', serif; font-size:16px; color:#ffffff; line-height:27px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2000;scalexin:0.8;scaleyin:0.8;"> This theme has variety of Features like Attorneys, Practice Details, <br>
                Quick Contact, Special News pages &amp; Unique Design </p>
            <div class="ls-l caption-list" style="top:350px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:3000;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-picture-o" style="margin-right:15px;"> </i> 
                Layer Slider Included 
            </div>
            <div class="ls-l caption-list" style="top:410px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:3500;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-user" style="margin-right:15px;"> </i> 
                Team Page Included 
            </div>
            <div class="ls-l caption-list" style="top:470px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:4000;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-briefcase" style="margin-right:15px;"> </i> 
                Practices Page 
            </div>
            <div class="ls-l caption-list" style="top:530px;left:560px;font-family:'Domine', serif; font-size:16px; font-weight:normal; padding:10px 0px 10px 20px;white-space: nowrap;" data-ls="delayin:4500;rotateyin:180;transformoriginin:Left 50% 0;">
                <i class="fa fa-align-justify" style="margin-right:15px;"> </i> 
                Mega Menu Support 
            </div>
        </div> -->
    </div>

</div>
<!--slider ends-->

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">

        <!-- Schedule Your Complimentary Debt Relief Review -->

        <section>

            <h2 class="dt-sc-hr-title">Schedule Your Complimentary Debt Relief Review</h2>
            <div class="column aligncenter text-alignleft">
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li><span>Receive a customized savings forecast</span></li>
                    <li><span>Review your timeline to financial freedom.</span></li>
                    <li><span>Pay zero service costs until settlements are finalized.</span></li>
                </ul>
            </div>

            <div class="ds-form-wrapper">
                <div class="ds-card">

                    <!-- TOP HEADING -->
                    <div class="ds-header">
                        <h2>Request Your Personalized Debt Analysis</h2>
                        <p>Brief 30-second form – zero obligation, no impact on credit.</p>
                    </div>

                    <!-- PROGRESS -->
                    <div class="ds-progress-wrap">
                        <div class="ds-progress-bar" id="progressBar"></div>
                    </div>

                    <!-- STEP INFO -->
                    <div class="ds-step-info">
                        <p class="ds-step-count">Step <span id="stepNum">1</span> of 5</p>
                        <p class="ds-time">~30 seconds</p>
                    </div>

                    <form id="multiStepForm">

                        <!-- STEP 1 -->
                        <div class="ds-step active">
                            <h3 class="ds-question">What is your total estimated debt balance?</h3>
                            <p class="ds-subtext">Estimates are acceptable.</p>

                            <div class="ds-options">
                                <div class="ds-option">Under $5,000</div>
                                <div class="ds-option">$5,000 - $10,000</div>
                                <div class="ds-option">$10,000 - $25,000</div>
                                <div class="ds-option">$25,000 - $50,000</div>
                                <div class="ds-option">$50,000 - $100,000</div>
                                <div class="ds-option">Over $100,000</div>
                            </div>

                            <button type="button" class="ds-btn ds-next">View My Estimate →</button>
                        </div>

                        <!-- STEP 2 -->
                        <div class="ds-step">
                            <h3 class="ds-question">What types of debt do you have?</h3>
                            <p class="ds-subtext">Select all that apply.</p>

                            <div class="ds-checks">
                                <label class="ds-check-card">
                                    <input type="checkbox">
                                    <span>Credit cards</span>
                                </label>

                                <label class="ds-check-card">
                                    <input type="checkbox">
                                    <span>Medical bills</span>
                                </label>

                                <label class="ds-check-card">
                                    <input type="checkbox">
                                    <span>Personal loans</span>
                                </label>

                                <label class="ds-check-card">
                                    <input type="checkbox">
                                    <span>Collections</span>
                                </label>

                                <label class="ds-check-card">
                                    <input type="checkbox">
                                    <span>Payday loans</span>
                                </label>

                                <label class="ds-check-card">
                                    <input type="checkbox">
                                    <span>Store cards</span>
                                </label>
                            </div>

                            <div class="ds-btns">
                                <button type="button" class="ds-btn ds-back">← Back</button>
                                <button type="button" class="ds-btn ds-next">Continue →</button>
                            </div>
                        </div>

                        <!-- STEP 3 -->
                        <div class="ds-step">
                            <h3 class="ds-question">What is your name?</h3>
                            <input type="text" class="ds-input" placeholder="Full Name">

                            <div class="ds-btns">
                                <button type="button" class="ds-btn ds-back">← Back</button>
                                <button type="button" class="ds-btn ds-next">Continue →</button>
                            </div>
                        </div>

                        <!-- STEP 4 -->
                        <div class="ds-step">
                            <h3 class="ds-question">Best phone number</h3>
                            <input type="text" class="ds-input" placeholder="Phone Number">

                            <div class="ds-btns">
                                <button type="button" class="ds-btn ds-back">← Back</button>
                                <button type="button" class="ds-btn ds-next">Continue →</button>
                            </div>
                        </div>

                        <!-- STEP 5 -->
                        <div class="ds-step">
                            <h3 class="ds-question">Email Address</h3>
                            <input type="email" class="ds-input" placeholder="Email Address">

                            <div class="ds-btns">
                                <button type="button" class="ds-btn ds-back">← Back</button>
                                <button type="button" class="ds-btn ds-next">Submit</button>
                            </div>
                        </div>

                        <!-- SUCCESS -->
                        <div class="ds-step ds-success">
                            <h2>✓ You are All Set!</h2>
                            <p>A debt specialist will call you shortly.</p>

                        </div>

                    </form>
                    <hr class="mt-2">
                    <ul class="flex gap-20 m-0">
                        <li class="p-0">🔒 Fully Private & Secure</li>
                        <li class="p-0">✓ Zero Upfront Costs</li>
                        <li class="p-0">⭐ A+ Accredited Business</li>
                    </ul>
                </div>
            </div>
            <script>
                let currentStep = 0;

                const steps = document.querySelectorAll(".ds-step");
                const nextBtns = document.querySelectorAll(".ds-next");
                const backBtns = document.querySelectorAll(".ds-back");

                const progressBar = document.getElementById("progressBar");
                const stepNum = document.getElementById("stepNum");

                // ===== SHOW STEP =====
                function showStep(index) {
                    steps.forEach(s => s.classList.remove("active"));
                    steps[index].classList.add("active");

                    // Step number (max 5)
                    stepNum.innerText = Math.min(index + 1, 5);

                    // Progress bar (ignore success step)
                    let percent = (index / (steps.length - 1)) * 100;
                    progressBar.style.width = percent + "%";
                }

                // ===== NEXT BUTTON =====
                nextBtns.forEach(btn => {
                    btn.addEventListener("click", () => {

                        // ===== VALIDATION =====

                        // STEP 1
                        if (currentStep === 0) {
                            let selected = document.querySelector(".ds-option.active");
                            if (!selected) {
                                alert("Please select your debt amount");
                                return;
                            }
                        }

                        // STEP 2
                        if (currentStep === 1) {
                            let checked = document.querySelectorAll(".ds-check-card input:checked");
                            if (checked.length === 0) {
                                alert("Select at least one debt type");
                                return;
                            }
                        }

                        // STEP 3
                        if (currentStep === 2) {
                            let name = document.querySelector(".ds-input[placeholder='Full Name']");
                            if (!name.value.trim()) {
                                alert("Enter your name");
                                return;
                            }
                        }

                        // STEP 4
                        if (currentStep === 3) {
                            let phone = document.querySelector(".ds-input[placeholder='Phone Number']");
                            if (!phone.value.trim()) {
                                alert("Enter phone number");
                                return;
                            }
                        }

                        // STEP 5
                        if (currentStep === 4) {
                            let email = document.querySelector(".ds-input[placeholder='Email Address']");
                            if (!email.value.trim()) {
                                alert("Enter email address");
                                return;
                            }
                        }

                        // MOVE NEXT
                        if (currentStep < steps.length - 1) {
                            currentStep++;
                            showStep(currentStep);
                        }
                    });
                });

                // ===== BACK BUTTON =====
                backBtns.forEach(btn => {
                    btn.addEventListener("click", () => {
                        if (currentStep > 0) {
                            currentStep--;
                            showStep(currentStep);
                        }
                    });
                });

                // ===== STEP 1 (SINGLE SELECT) =====
                document.querySelectorAll(".ds-option").forEach(option => {
                    option.addEventListener("click", () => {
                        document.querySelectorAll(".ds-option").forEach(o => o.classList.remove("active"));
                        option.classList.add("active");
                    });
                });

                // ===== STEP 2 (MULTI SELECT) =====
                document.querySelectorAll(".ds-check-card").forEach(card => {
                    card.addEventListener("click", () => {
                        card.classList.toggle("active");

                        let input = card.querySelector("input");
                        input.checked = !input.checked;
                    });
                });

                // INIT
                showStep(currentStep);
            </script>

        </section>

        <div class="dt-sc-hr-invisible-large"></div>

        <!-- Reviews -->

        <section class="nx-reviews-sec">
            <div class="nx-reviews-wrap">
                <h2 class="nx-reviews-title">
                    Elite Ratings from Our Success Stories
                </h2>

                <div class="nx-reviews-grid">

                    <div class="nx-review-card">
                        <img src="{{ asset('assets/images/gooogle.png') }}" alt="Google Logo" class="nx-review-logo">
                        <div class="nx-review-stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <!-- ★★★★★ -->
                        </div>
                        <p class="nx-review-text">
                            <b>4.8/5</b> — 14,500+ Verified Reviews
                        </p>
                    </div>

                    <div class="nx-review-card">
                        <img src="{{ asset('assets/images/consumer.png') }}" alt="ConsumerAffairs Logo" class="nx-review-logo">
                        <div class="nx-review-stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <!-- ★★★★★ -->
                        </div>
                        <p class="nx-review-text">
                            <b>4.9/5</b> — 61,200+ Verified Reviews
                        </p>
                    </div>

                    <div class="nx-review-card">
                        <img src="{{ asset('assets/images/t-pilot.png') }}" alt="Trustpilot Logo" class="nx-review-logo">
                        <div class="nx-review-stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <!-- ★★★★★ -->
                        </div>
                        <p class="nx-review-text">
                            <b>4.8/5</b> — 45,900+ Verified Reviews
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <div class="dt-sc-hr-invisible-large"></div>

        <!-- Process -->

        @include('website-component.how-it-works')

        <!-- <div class="dt-sc-one-fourth column">
            <div class="dt-sc-ico-content type1">
                <div class="icon">
                    <img src="{{ asset('assets/images/practice_icon4.png') }}" alt="" title="">
                </div>
                <h5><a href=""> Retaliation </a></h5>
                <span> Stop before it causes a big trouble </span>
                <p> Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
            </div>
        </div> -->

        <div class="dt-sc-hr-invisible-large"></div>

        <!-- Testimonials -->

        <section>

            <h2 class="dt-sc-hr-title mb-2"> Empowering Over 1.5 Million Individuals to Reach Financial Freedom. </h2>
            <p class="aligncenter mb-3">“The goal of Consumer Debt Management Service is to return your autonomy, allowing you to live life on your own terms. Alongside our professional team, we work relentlessly to provide impactful and permanent solutions for your debt resolution journey.”</p>
            <div class="flex gap-20 mb-2">
                <div class="author">
                    <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="" title="">
                </div>
                <div class="author-meta">
                    <p> Julian M. </p>
                </div>
            </div>

            <!-- Slider Viewport -->
            <div class="custom-slider-viewport">
                <div class="custom-slider-track">

                    <!--dt-sc-one-third starts-->
                    <div class="dt-sc-one-half column first">
                        <div class="dt-sc-testimonial">
                            <blockquote><q> “My self-assurance grew immensely. Consumer Debt Management Service helped me pinpoint the issue, establish a target, and execute a strategy that actually delivered results.” </q></blockquote>
                            <div class="testimonial-stats">
                                <div class="stat">
                                    <span>Total Debt</span>
                                    <b>$29,540</b>
                                </div>
                                <div class="stat">
                                    <span>Monthly Payment</span>
                                    <b>$480</b>
                                </div>
                                <div class="stat">
                                    <span>Program Length</span>
                                    <b>36 Months</b>
                                </div>
                                <div class="stat">
                                    <span>Total Savings</span>
                                    <b>$11,225</b>
                                </div>
                            </div>
                            <div class="author">
                                <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="" title="">
                            </div>
                            <div class="author-meta">
                                <p> Mike Patton </p>
                                <span>Leo T. Coffee enthusiast, <b>graphic designer</b> </span>
                            </div>
                        </div>
                    </div>
                    <!--dt-sc-one-third ends-->

                    <!--dt-sc-one-third starts-->

                    <div class="dt-sc-one-half column">
                        <div class="dt-sc-testimonial">
                            <blockquote><q> “Everything became much simpler once the weight of my financial obligations was lifted. That pressure is incredibly difficult to manage alone.” </q></blockquote>
                            <div class="testimonial-stats">
                                <div class="stat">
                                    <span>Total Debt</span>
                                    <b>$41,200</b>
                                </div>
                                <div class="stat">
                                    <span>Monthly Payment</span>
                                    <b>$625</b>
                                </div>
                                <div class="stat">
                                    <span>Program Length</span>
                                    <b>42 Months</b>
                                </div>
                                <div class="stat">
                                    <span>Total Savings</span>
                                    <b>$13,596</b>
                                </div>
                            </div>
                            <div class="author">
                                <img src="{{ asset('assets/images/testimonial2.jpg') }}" alt="" title="">
                            </div>
                            <div class="author-meta">
                                <p> Kurt Russel </p>
                                <span>Robert S. Outdoor adventurer, <b>family man</b> </span>
                            </div>
                        </div>
                    </div>

                    <!--dt-sc-one-third ends-->

                </div>
            </div>

            <!--dt-sc-one-third starts-->
            <!-- <div class="dt-sc-one-third column">
                <div class="dt-sc-testimonial">
                    <blockquote><q> Omnis voluptas assumenda est, omnis dolor repellendus. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus duis sunon et magnis dis. Cum sociis natoque pena tibus duis sunon et magnis dis. </q></blockquote>
                    <div class="author">
                        <img src="{{ asset('assets/images/testimonial3.jpg') }}" alt="" title="">
                    </div>
                    <div class="author-meta">
                        <p> Jason Shane </p>
                        <span> Business Consultant / <b> Magick Wall </b> </span>
                    </div>
                </div>
            </div> -->
            <!--dt-sc-one-third ends-->

        </section>

        <div class="dt-sc-hr-invisible-large"></div>

        <!-- CTA -->

        <section>

            <h4 class="aligncenter no-transform"> Reach Out. We’re Ready to Assist. </h4>
            <div class="dt-sc-hr-invisible-very-small"></div>
            <p class="aligncenter">A sense of renewed hope often follows a client's very first consultation with us.<br> Regardless of your current financial landscape, Consumer Debt Management Service is here to provide the support you need.</p>

            <div class="aligncenter mt-3">
                <a class="dt-sc-bordered-button" href="#"> Our Company Profile </a>
            </div>

            <!-- <div class="dt-sc-hr-invisible-medium"></div>

            <div class="dt-sc-hr-image"></div>

            <div class="dt-sc-hr-invisible"></div>

            <div class="column dt-sc-one-fifth first">
                <div class="dt-sc-ico-content type2">
                    <div class="icon">
                        <span class="fa fa-magic"> </span>
                    </div>
                    <h6><a href="#" target="_blank"> Unique Design </a></h6>
                </div>
            </div>

            <div class="column dt-sc-one-fifth">
                <div class="dt-sc-ico-content type2">
                    <div class="icon">
                        <span class="fa fa-bolt"> </span>
                    </div>
                    <h6><a href="#" target="_blank"> Powerful Features </a></h6>
                </div>
            </div>

            <div class="column dt-sc-one-fifth">
                <div class="dt-sc-ico-content type2">
                    <div class="icon">
                        <span class="fa fa-cog"> </span>
                    </div>
                    <h6><a href="#" target="_blank"> Easy Customization </a></h6>
                </div>
            </div>

            <div class="column dt-sc-one-fifth">
                <div class="dt-sc-ico-content type2">
                    <div class="icon">
                        <span class="fa fa-chain-broken"> </span>
                    </div>
                    <h6><a href="#" target="_blank"> Special Pages </a></h6>
                </div>
            </div>

            <div class="column dt-sc-one-fifth">
                <div class="dt-sc-ico-content type2">
                    <div class="icon">
                        <span class="fa fa-lightbulb-o"> </span>
                    </div>
                    <h6><a href="#" target="_blank"> Innovative Ideas </a></h6>
                </div>
            </div> -->

        </section>

        <div class="dt-sc-hr-invisible"></div>

        <!-- FAQ's -->

        <section class="faq">

            <div class="container aligncenter flex flex-direction-column">
                <div class="column dt-sc-two-third first">

                    <h2 class="dt-sc-hr-icon-title"> <img src="{{ asset('assets/images/question.png') }}" alt="Question" class="question"> FAQs </h2>
                    <!--dt-sc-toggle-frame-set starts-->
                    <div class="dt-sc-toggle-frame-set faq alignLeft">
                        <h5 class="dt-sc-toggle-accordion"><a href="#"> What defines Consumer Debt Management Service and why are we reliable? </a></h5>
                        <div class="dt-sc-toggle-content">
                            <div class="dt-sc-block">
                                Mutual trust is the foundation of every client partnership we build. We prioritize active listening to fully grasp your financial objectives and concerns, which allows us to engineer relief strategies specifically tailored to your unique circumstances.<br>
                                <b>Our dedication to client success is unparalleled.</b> We operate with total transparency, fulfill our promises, and always prioritize your financial well-being. Consumer Debt Management Service is proud to maintain an A+ rating and full accreditation with the Better Business Bureau (BBB). We are consistently recognized as a premier debt resolution provider, supported by thousands of verified testimonials, including:<br>
                                <ul class="dt-sc-fancy-list ocean angle-double-right mt-1">
                                    <li><span>TopConsumerReviews: Premier Ranking</span></li>
                                    <li><span>TopTenReviews: Industry Leader</span></li>
                                    <li><span>ConsumersAdvocate: Top-Rated Service</span></li>
                                    <li><span>ConsumerAffairs: #1 Choice</span></li>
                                    <li><span>61,000+ ConsumerAffairs reviews (4.9/5 rating)</span></li>
                                    <li><span>45,000+ Trustpilot reviews (4.8/5 rating)</span></li>
                                </ul>
                                <b>Our history of success is clear.</b> Every month, we guide thousands of new individuals toward financial recovery, having successfully resolved billions in consumer obligations. As authorities in the field, we are active, accredited members of the Association for Consumer Debt Relief (ACDR) and hold Platinum Accreditation with the IAPDA.<br>
                                We achieve meaningful outcomes with integrity.

                            </div>
                        </div>
                        <h5 class="dt-sc-toggle-accordion"><a href="#"> What specific solutions are available through your service? </a></h5>
                        <div class="dt-sc-toggle-content">
                            <div class="dt-sc-block">
                                Our clients benefit from an extensive network of professional partners. This includes diverse options such as debt consolidation financing, expert credit counseling, bankruptcy legal referrals, and more. The specialists at<b> Consumer Debt Management Service</b> evaluate your specific financial landscape to provide a strategy that aligns with your location, hardship, and long-term objectives.
                            </div>
                        </div>
                        <h5 class="dt-sc-toggle-accordion"><a href="#"> What is the mechanism behind debt resolution? </a></h5>
                        <div class="dt-sc-toggle-content">
                            <div class="dt-sc-block">
                                <b>Our process is straightforward and transparent.</b> Instead of sending funds to your creditors, you will contribute a set monthly amount into a personal, FDIC-insured savings account that remains under your total control. As your balance grows, we initiate negotiations with your creditors to settle for a fraction of what you owe. (Creditors are often incentivized to accept a lower lump sum rather than risking no payment at all.) Once a settlement is reached, you authorize us to use your saved funds to pay the negotiated amount. As each account is resolved, it is reported with a zero balance.
                            </div>
                        </div>
                        <h5 class="dt-sc-toggle-accordion"><a href="#"> Is this program financially viable for me? </a></h5>
                        <div class="dt-sc-toggle-content">
                            <div class="dt-sc-block">
                                <b>Consumer Debt Management Service</b> does more than just ensure our fees are manageable—we conduct a deep dive into your monthly budget. Our goal is to ensure the proposed strategy effectively alleviates your financial stress rather than adding to it. Furthermore, you have the flexibility to adjust your deposit frequency, keeping you in the driver's seat throughout your journey to recovery.
                            </div>
                        </div>
                        <h5 class="dt-sc-toggle-accordion"><a href="#"> What is the investment for your services? </a></h5>
                        <div class="dt-sc-toggle-content">
                            <div class="dt-sc-block">
                                <b>Consumer Debt Management Service</b> operates on a results-oriented fee structure. Unlike traditional programs, our model is strictly performance-based. We do not collect any service fees until we have successfully secured your settlements and you are satisfied with the realized savings.<br>
                                Our service fees are determined by your state of residence and the total volume of your enrolled debt (typically capped at 25%). When compared to the compounding interest accrued by maintaining minimum payments on credit cards, the net savings achieved through <b>Consumer Debt Management Service</b> remain significant.<br>
                                While individual results vary, consider this recent client scenario:<br>
                                “Sarah” joined our program with <b>$26,400</b> in combined high-interest debt, facing monthly obligations of approximately <b>$1,150</b>. After a shift in her financial circumstances, her primary goal was lowering her monthly overhead. She committed to a monthly deposit of <b>$415</b> over a <b>48-month</b> term to achieve total resolution.<br>
                                Under the <b>Consumer Debt Management Service</b> strategy, “Sarah’s” obligations could be fully settled for roughly <b>$19,800</b>—a stark contrast to the estimated <b>$68,000</b> she would have paid by following traditional minimum payment schedules.

                            </div>
                        </div>
                    </div>
                    <!--dt-sc-toggle-frame-set ends-->
                </div>
            </div>

        </section>

        <div class="dt-sc-hr-invisible-large"></div>
        <!-- <div class="mailchimp">
            <p> <span class="fa fa-envelope-o"></span> Subscribe to Newsletter </p>
            <form name="frmnewsletter" method="post" class="mailchimp-form" action="php/subscribe.php">
                <input type="email" placeholder="Email" name="mc_email" required />
                <input type="submit" value="Submit" class="nl-submit" name="btnsubscribe">
            </form>
            <div id="ajax_subscribe_msg"></div>
        </div> -->
    </div>
    <!--container ends-->
</section>
<!--primary ends-->

@endsection