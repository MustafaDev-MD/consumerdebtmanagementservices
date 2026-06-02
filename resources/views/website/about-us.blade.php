@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <h1> About Us </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <span class="current"> About Us </span>
        </div>
    </div>
</div>

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--fullwidth-background starts-->
    <div class="fullwidth-background dt-sc-parallax-section trust_section">
        <div class="container">
            <h1> Supporting You At Every Turn </h1>
        </div>
    </div>
    <!--fullwidth-background ends-->
    <div class="dt-sc-hr-invisible-medium"></div>
    <!--container starts-->
    <div class="container">
        <p class="aligncenter"><span class="dt-sc-highlight skin-color"> We are dedicated to helping you reclaim your financial freedom. That involves a specialized debt consultant and support group working without pause to achieve your desired outcome—debt resolution. We will remain by your side from the first step to the last.</p>
    </div>
    <div class="aligncenter mt-3">
        <a class="dt-sc-bordered-button" href="{{ route('contact-us') }}"> Let’s Begin Now </a>
    </div>
    <!--container ends-->


    <div class="dt-sc-hr-invisible-medium"></div>
    <div class="dt-sc-hr-invisible-small"></div>

</section>
<!--primary ends-->
<div class="dt-sc-hr-invisible"></div>

<section class="trust-section">

    <div class="container">

        <h4 class="aligncenter no-transform trust-title">Our Proven History</h4>

        <p class="aligncenter trust-subtitle">
            Relied upon by thousands and endorsed by top-tier financial critics.
            Our dedication<br> to honesty and premier support has secured elite rankings and honors.
        </p>

        <div class="trust-logos">
            <img src="{{ asset('assets/images/forbes-advisor.png') }}" alt="Forbes Advisor">
            <img src="{{ asset('assets/images/usa-today.png') }}" alt="USA Today">
            <img src="{{ asset('assets/images/bbb.png') }}" alt="BBB">
            <img src="{{ asset('assets/images/acdr.png') }}" alt="ACDR">
            <img src="{{ asset('assets/images/consumer-affairs.png') }}" alt="Consumer Affairs">
            <img src="{{ asset('assets/images/trust-pilot.png') }}" alt="Trust Pilot">
        </div>

    </div>

</section>

<section class="trust-section">

    <div class="container">

        <h4 class="aligncenter no-transform trust-title mb-2">Our Story</h4>

        <p class="aligncenter trust-subtitle">
            More than fifteen years ago, our founder Marcus, like many others, faced significant financial hurdles and<br> realized he required guidance. Back then, firms often utilized aggressive sales methods and deceptive<br> ads to acquire clients. We chose to transform that approach completely.
        </p>

        <p class="aligncenter trust-subtitle">
            <b>Rooted in actual lived experience, Consumer Debt Management Service is our passion project.</b>
        </p>

        <p class="aligncenter trust-subtitle">
            We place transparency, people, and progress at the core of our operations.
        </p>

        <p class="aligncenter trust-subtitle">
            When executed correctly, debt resolution is a strategic move—not a final option. With our support,<br> we believe you can enjoy a positive journey while transforming your financial situation.
        </p>

    </div>

</section>

<section>

    <div class="container">
        <div class="dt-sc-hr-invisible-large"></div>

        <h2 class="dt-sc-hr-title"> We Have Helped Over 1.3 Million People Toward a Brighter Future. </h2>

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
                            <img src="{{ asset('assets/images/leo-t.webp') }}" alt="" title="">
                        </div>
                        <div class="author-meta">
                            <p> Leo T. </p>
                            <span> Coffee enthusiast, <b>graphic designer</b> </span>
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
                            <img src="{{ asset('assets/images/robert-s.webp') }}" alt="" title="">
                        </div>
                        <div class="author-meta">
                            <p> Robert S. </p>
                            <span>Outdoor adventurer, <b>family man</b> </span>
                        </div>
                    </div>
                </div>

                <!--dt-sc-one-third ends-->

                <!--dt-sc-one-third starts-->

                <div class="dt-sc-one-half column">
                    <div class="dt-sc-testimonial">
                        <blockquote><q> “Finding a partner I could trust to manage this process allowed me to refocus my energy on what truly matters—my family and my career.” </q></blockquote>
                        <div class="testimonial-stats">
                            <div class="stat">
                                <span>Total Debt</span>
                                <b>$43,200</b>
                            </div>
                            <div class="stat">
                                <span>Monthly Payment</span>
                                <b>$645</b>
                            </div>
                            <div class="stat">
                                <span>Program Length</span>
                                <b>48 Months</b>
                            </div>
                            <div class="stat">
                                <span>Total Savings</span>
                                <b>$12,528</b>
                            </div>
                        </div>
                        <div class="author">
                            <img src="{{ asset('assets/images/elena-v.webp') }}" alt="" title="">
                        </div>
                        <div class="author-meta">
                            <p> Elena V </p>
                            <span>Specialist surgeon,<b> mother of two </b></span>
                        </div>
                    </div>
                </div>

                <!--dt-sc-one-third ends-->

            </div>
        </div>

        <div class="dt-sc-hr-invisible-large"></div>
    </div>

</section>

<!-- <section>

    <div class="container">

        <h4 class="aligncenter no-transform trust-title mb-3">Our Team</h4>

        <div class="dt-sc-one-half column first">
            <div class="dt-sc-hr-invisible-small"></div>
            <p class="alignleft"> Our skilled and expert debt mediators, strategists, client support staff, and administrative groups have been delivering successful outcomes for over fifteen years. Our specialists are regularly ranked as the top performers in the industry. </p>
            <div class="dt-sc-hr-invisible-small"></div>
        </div>

        <div class="dt-sc-one-half column">
            <a href="#"><img src="{{ asset('assets/images/our_practices_image4.jpg') }}" alt="" title=""></a>
        </div>

        <div class="dt-sc-hr-invisible"></div>

        <div class="dt-sc-one-half column first">
            <a href="#"><img src="{{ asset('assets/images/our_practices_image4.jpg') }}" alt="" title=""></a>
        </div>

        <div class="dt-sc-one-half column">
            <div class="dt-sc-hr-invisible-small"></div>
            <p class="alignleft"> This high standard is only achievable through the collective effort of every staff member collaborating in total alignment, focused on a single objective—assisting you in attaining a life without deb </p>
            <div class="dt-sc-hr-invisible-small"></div>
        </div>

        <div class="dt-sc-hr-invisible"></div>

    </div>

</section> -->

<section class="core-values-section">
    <div class="container">

        <h4 class="aligncenter no-transform trust-title mb-3">Our Foundational Principles</h4>
        <p class="aligncenter subtitle">
            We are committed to enhancing your economic well-being,<br>
            consistently prioritizing our fundamental beliefs:
        </p>

        <div class="dt-sc-one-third column first">
            <div class="core-card">
                <img src="{{ asset('assets/images/about-us/integrity.png') }}" alt="Integrity">
                <h4>Honesty</h4>
                <p>
                    Function with the primary focus on our patrons and staff,
                    maintaining openness and reliability as our main drivers
                </p>
            </div>
        </div>

        <div class="dt-sc-one-third column">
            <div class="core-card">
                <img src="{{ asset('assets/images/about-us/growth.png') }}" alt="Growth">
                <h4>Advancement</h4>
                <p>
                    Offer assistance and direction for personal progress during the complete CDMS experience.
                </p>
            </div>
        </div>

        <div class="dt-sc-one-third column">
            <div class="core-card">
                <img src="{{ asset('assets/images/about-us/connection.png') }}" alt="Connection">
                <h4>Empathy</h4>
                <p>
                    Build relationships based on human dignity, benevolence, and understanding.
                </p>
            </div>
        </div>

        <div class="aligncenter mt-3">
            <a class="dt-sc-bordered-button  dt-sc-bordered-button-secondary" href="{{ route('contact-us') }}"> Enroll Today </a>
        </div>

    </div>
</section>

<section class="philanthropy-section">
    <div class="container">

        <!-- TOP CONTENT -->
        <h4 class="aligncenter no-transform trust-title mb-3">Our Community Impact</h4>
        <p class="aligncenter subtitle">
            Consumer Debt Management Service recognizes the value of a robust local network<br> and provides support by contributing to 4 non-profits each quarter – this<br> involves donations from our staff along with a total corporate match.
        </p>

        <!-- LOGOS -->
        <div class="philanthropy-logos mb-3 mt-3">

            <div class="logo-item">
                <img src="{{ asset('assets/images/about-us/st-jude-children-s-research-hospital.png') }}" alt="St Jude Children's Research Hospital">
            </div>

            <div class="logo-item">
                <img src="{{ asset('assets/images/about-us/wounded-warrior.png') }}" alt="Wounded Warrior">
            </div>

            <div class="logo-item">
                <img src="{{ asset('assets/images/about-us/autism-speaks.png') }}" alt="Autism Speaks">
            </div>

        </div>

        <div class="dt-sc-hr-invisible-small"></div>

        <!-- BOTTOM CONTENT -->
        <div class="scholarship-block">
            <h4 class="aligncenter no-transform trust-title mb-3">CDMS Academic Grant Initiative</h4>
            <p class="aligncenter subtitle">
                We are honored to assist the next generation by aiding their path to financial independence<br> and offering the necessary resources to remain debt-free.
            </p>

            <div class="aligncenter mt-3">
                <a class="dt-sc-bordered-button" href="{{ route('contact-us') }}"> Discover More </a>
            </div>
        </div>

    </div>
</section>

@endsection