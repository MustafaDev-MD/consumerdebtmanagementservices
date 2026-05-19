@extends('website-layouts.app')

@section('content')

<div class="container md-mt-26">

    <div class="column dt-sc-one-fourth first m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('debt-relief-settlement') }}">Debt Settlement Relief</a></h4>
    </div>
    
    <div class="column dt-sc-one-fourth m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('national-debt-relief-top-faqs') }}">FAQs</a></h4>
    </div>
    
    <div class="column dt-sc-one-fourth m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('how-to-eliminate-credit-card-debt') }}">Options</a></h4>
    </div>

    <div class="column dt-sc-one-fourth m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('how-to-eliminate-credit-card-debt') }}">Options</a></h4>
    </div>

</div>

<!-- <div class="breadcrumb-section">
    <div class="container">
        <h1> National Debt Relief Top FAQs </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <a href="{{ route('resources') }}"> Resources </a>
            <a href="{{ route('debt-relief-settlement') }}"> Debt Relief Settlement </a>
            <span class="current"> National Debt Relief Top FAQs </span>
        </div>
    </div>
</div> -->

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">

        <div class="dt-sc-two-third column first">
            <h1 class="dt-sc-simple-hr-title"> Debt Relief Choices and Advantages </h1>
            <p> <b>Summary of Points</b> </p>
            <ul class="dt-sc-fancy-list chocolate check-circle">
                <li><b>Available Relief Strategies:</b> Solutions feature restructuring, mediation, and resolution to lower installments and ease economic pressure.</li>
                <li><b>Professional Guidance:</b> Consumer Debt Management Service provides complimentary evaluations, emphasizing sustainable strategies to resolve liabilities within 30 to 60 months.</li>
                <li><b>Impact on Wellness:</b> High interest and balances take a heavy toll on psychological and physical health; professional intervention offers a clear roadmap to fiscal stability.</li>
                <li><b>Fraud Avoidance:</b> Selecting a verified firm ensures protection against predatory practices; prioritize organizations with high industry ratings and verified client history.</li>
                <li><b>Personalized Advocacy:</b> Consumer Debt Management Service delivers custom support, budget management, and a consolidated monthly payment framework to eliminate your financial load effectively.</li>
            </ul>
            <p>
                Maintaining a financial plan is challenging enough without the added weight of current price hikes and significant interest obligations.
            </p>
            
        </div>

        @include('website-component.inner-form')

    </div>
    <!--container ends-->

</section>
<!--primary ends-->

<div class="dt-sc-hr-invisible-large"></div>

<!-- ============================================================
     STICKY FAQ SECTION 
============================================================ -->

<div class="dt-sc-hr-invisible-large"></div>

<section class="faq-sticky-wrapper">
    <div class="container">

        <!-- LEFT — scrolling content -->
        <div class="dt-sc-two-third column first" id="mainContent">

            <div id="how-debt-affects-your-well-being" class="content-block scroll-section">

                <h2 class="highlight-box">How Debt Affects Your Well-Being</h2>
                <p>Unresolved liabilities don't just compromise your economic security; they can actively erode your psychological and physical wellness. Below are several key indicators that you may be facing a severe financial burden:</p>

                <h3>Debt and Mental Health</h3>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li>You and your significant other experience recurring arguments centered entirely around financial pressure.</li>
                    <li>You deal with persistent emotional exhaustion because a vast portion of your earnings is swallowed up by compounding interest and service fees, leaving you feeling like your balances are completely stagnant.</li>
                    <li>You experience high anxiety and severe sleep disruption due to outstanding liabilities, occasionally forcing you to depend on high-interest cash advances simply to clear standard living costs like utility bills.</li>
                    <li>You find yourself intentionally missing certain bill deadlines in a desperate attempt to keep up with more urgent financial obligations.</li>
                    <li>You have completely depleted your personal financial reserves just to stay afloat from month to month</li>
                    <li>You are carrying the heavy mental strain of dealing with aggressive third-party collection agencies demanding payment on overdue accounts.</li>
                    <li>You experience profound frustration because you have completely exhausted the limits on the majority of your available credit lines</li>
                    <li>You have lost confidence that you will ever find a realistic path toward achieving total financial autonomy.</li>
                </ul>

            </div>

        </div>

        <!-- RIGHT — sticky sidebar -->
        <div class="dt-sc-one-third column faq-sidebar-col">
            <div class="toc-box" id="tocBox">
                <h4><b>In This Guide</b></h4>
                <ul class="toc">

                    <li><a href="#how-debt-affects-your-well-being" class="toc-link">How Debt Affects Your Well-Being</a></li>

                </ul>
                <div class="toc-divider"></div>
                <div class="">
                    <a class="dt-sc-bordered-button" href="tel:(855) 420-1988"> Get Started </a>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="dt-sc-hr-invisible-large"></div>

@include('website-component.services')

<div class="dt-sc-hr-invisible-large"></div>

<section>

    <h2 class="dt-sc-hr-title">Resolve your credit card debt</h2>
    <div class="column aligncenter text-alignleft">
        <ul class="dt-sc-fancy-list chocolate check-circle">
            <li><span>Acquire A Complimentary Economy Appraisal Immediately</span></li>
            <li><span>Observe The Velocity In Which You Can Be debt Unshackled</span></li>
            <li><span>Zero Levies Pending Your Registers Are Concluded</span></li>
        </ul>
    </div>

    @include('website-component.step-form')

</section>

<section>

    <div class="container">

        <h2 class="dt-sc-hr-title mb-2"> Our team has changed the paths of over 620,000 individuals </h2>

        <!-- Slider Viewport -->
        <div class="custom-slider-viewport">
            <div class="custom-slider-track">

                <!--dt-sc-one-third starts-->
                <div class="dt-sc-one-half column first">
                    <div class="dt-sc-testimonial">
                        <blockquote><q> “Currently, I arise aware that I'm settling my debt, it resembles a burden removed from my shoulders and I can inhale much easier.” </q></blockquote>
                        <div class="testimonial-stats">
                            <div class="stat">
                                <span>Total Debt</span>
                                <b>$16,842</b>
                            </div>
                            <div class="stat">
                                <span>Monthly Payment</span>
                                <b>$312</b>
                            </div>
                            <div class="stat">
                                <span>Program Length</span>
                                <b>32 Months</b>
                            </div>
                            <div class="stat">
                                <span>Total Savings</span>
                                <b>$6,120</b>
                            </div>
                        </div>
                        <div class="author">
                            <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="" title="">
                        </div>
                        <div class="author-meta">
                            <p> Marcus G </p>
                            <span>Parent and devoted Chicago baseball enthusiast</span>
                        </div>
                    </div>
                </div>
                <!--dt-sc-one-third ends-->

                <!--dt-sc-one-third starts-->

                <div class="dt-sc-one-half column">
                    <div class="dt-sc-testimonial">
                        <h3 class="flex">Elena preserved 26% on her debt</h3>
                        <blockquote><q> "That worry is vanished, I am credit card debt-liberated. And that specific point, I never imagined I'd be capable of uttering those phrases, and it merely perceives as wonderful." </q></blockquote>
                        <div class="testimonial-stats">
                            <div class="stat">
                                <span>Total Debt</span>
                                <b>$9,214</b>
                            </div>
                            <div class="stat">
                                <span>Monthly Payment</span>
                                <b>$421</b>
                            </div>
                            <div class="stat">
                                <span>Program Length</span>
                                <b>41 Months</b>
                            </div>
                            <div class="stat">
                                <span>Total Savings</span>
                                <b>$5,280</b>
                            </div>
                        </div>
                        <div class="author">
                            <img src="{{ asset('assets/images/testimonial2.jpg') }}" alt="" title="">
                        </div>
                        <div class="author-meta">
                            <p> Elena S </p>
                            <span>Aviation technical instructor, solo parent of 3</span>
                        </div>
                    </div>
                </div>

                <!--dt-sc-one-third ends-->

                <!--dt-sc-one-third starts-->
                <div class="dt-sc-one-half column">
                    <div class="dt-sc-testimonial">
                        <blockquote><q> “Currently I'm capable of departing on holiday for the initial occasion in a lengthy span— I could travel and unwind. I was unable to perform that previously.” </q></blockquote>
                        <div class="testimonial-stats">
                            <div class="stat">
                                <span>Total Debt</span>
                                <b>$24,650</b>
                            </div>
                            <div class="stat">
                                <span>Monthly Payment</span>
                                <b>$515</b>
                            </div>
                            <div class="stat">
                                <span>Program Length</span>
                                <b>44 Months</b>
                            </div>
                            <div class="stat">
                                <span>Total Savings</span>
                                <b>$5,940</b>
                            </div>
                        </div>
                        <div class="author">
                            <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="" title="">
                        </div>
                        <div class="author-meta">
                            <p> Omar K </p>
                            <span>Devoted spouse</span>
                        </div>
                    </div>
                </div>
                <!--dt-sc-one-third ends-->

            </div>
        </div>

    </div>

</section>

<div class="dt-sc-hr-invisible-large"></div>

<div class="dt-sc-hr-invisible-large"></div>

@endsection