@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <h1> How It Works </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <span class="current"> How It Works </span>
        </div>
    </div>
</div>

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">
        <section>
            <div class="flex">
                <div class="dt-sc-one-half column first">
                    <a href="#"><img src="{{ asset('assets/images/how-it-works.webp') }}" alt="" title=""></a>
                </div>

                <div class="dt-sc-one-half column">
                    <!-- <div class="dt-sc-hr-invisible-small"></div> -->
                    <h1 class="dt-sc-simple-hr-title"> Settle Your Debt for Less,<br><br> Sooner Than You Imagined. </h1>
                </div>
            </div>
        </section>

        <div class="dt-sc-hr-invisible-large"></div>

        @include('website-component.how-it-works')

    </div>
    <!--container ends-->

    <section>

        <div class="container">

            <div class="dt-sc-hr-invisible-large"></div>

            <h2 class="dt-sc-hr-title mb-1"> Debts We Are Equipped to Resolve </h2>
            <p class="aligncenter"> We provide comprehensive coverage for the majority of unsecured debt. Our team actively negotiates with leading banks and credit card issuers on a daily basis to significantly lower outstanding balances. </p>
            <div class="dt-sc-hr-invisible-small"></div>
            <div class="flex">
                <div class="column dt-sc-one-fourth aligncenter text-alignleft">
                    <ul class="dt-sc-fancy-list chocolate check-circle">
                        <li><span>Credit Card Balances</span></li>
                        <li><span>Personal Loan Obligations</span></li>
                        <li><span>Outstanding Lines of Credit</span></li>
                        <li><span>Unpaid Medical Bills</span></li>
                    </ul>
                </div>
                <div class="column dt-sc-one-fourth aligncenter text-alignleft">
                    <ul class="dt-sc-fancy-list chocolate check-circle">
                        <li><span>Accounts in Collections</span></li>
                        <li><span>Repossession Deficiencies</span></li>
                        <li><span>Commercial & Business Debts</span></li>
                        <li><span>Select Student Loan Debts</span></li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

    <div class="dt-sc-hr-invisible-large"></div>

    <section>
        <h2 class="dt-sc-hr-icon-title aligncenter"> <span class="fa fa-question-circle"></span> Reclaim Your Future </h2>
    </section>

    <div class="dt-sc-hr-invisible-large"></div>

    <section>

        <div class="container">
            <h4 class="aligncenter no-transform"> James achieved a significant reduction in<br> his total obligations in a fraction of the time. </h4>
            <div class="dt-sc-hr-invisible-very-small"></div>
            <p class="aligncenter"> We provide extensive coverage for most unsecured debt and maintain daily negotiations with<br> major financial institutions and credit card issuers to drive down what you owe. </p>
            <div class="dt-sc-hr-invisible-very-small"></div>
            <!--dt-sc-one-fourth starts-->
            <div class="flex gap-20">
                <div class="column dt-sc-one-fourth first">
                    <div class="dt-sc-team">
                        <div class="dt-sc-team-thumb">
                            <img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title="">
                        </div>
                        <div class="dt-sc-team-content">
                            <h5> James </h5>
                            <span> <b>Starting Debt Balance:</b> $36,883 </span>
                            <!-- <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p> -->
                            <p class="dt-sc-team-phone-no"> <b>Total Savings:</b> 38% through the <b>Consumer Debt Management Service</b> program </p>
                        </div>
                    </div>
                </div>
                <div class="column dt-sc-one-half first">
                    <div class="dt-sc-bar-text"> Consumer Debt Management Service - $21,480 </div>
                    <div class="dt-sc-progress dt-sc-progress-standard">
                        <div data-value="95" class="dt-sc-bar" data-bg-color="#8d1812"> </div>
                    </div>
                    <div class="dt-sc-bar-text"> Debt Consolidation Loan - $41,650 </div>
                    <div class="dt-sc-progress dt-sc-progress-standard">
                        <div data-value="60" class="dt-sc-bar" data-bg-color="#ffd200"> </div>
                    </div>
                    <div class="dt-sc-bar-text"> Credit Counseling Program - $42,925 </div>
                    <div class="dt-sc-progress dt-sc-progress-standard">
                        <div data-value="70" class="dt-sc-bar" data-bg-color="#76a84b"> </div>
                    </div>
                    <div class="dt-sc-bar-text"> Minimum Payment Schedules -$124,300 </div>
                    <div class="dt-sc-progress dt-sc-progress-standard">
                        <div data-value="90" class="dt-sc-bar" data-bg-color="#f65339"> </div>
                    </div>
                </div>
            </div>
            <!--dt-sc-one-fourth ends-->

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
                                <span> Outdoor adventurer, <b>family man</b> </span>
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

    <section class="faq">

        <div class="container aligncenter flex flex-direction-column">
            <div class="column dt-sc-one-half first">

                <h2 class="dt-sc-hr-icon-title"> <img src="{{ asset('assets/images/help.png') }}" alt="Question" class="question"> Faq's </h2>
                <!--dt-sc-toggle-frame-set starts-->
                <div class="dt-sc-toggle-frame-set faq alignLeft">
                    <h5 class="dt-sc-toggle-accordion"><a href="#"> How will your program influence my credit rating? </a></h5>
                    <div class="dt-sc-toggle-content">
                        <div class="dt-sc-block">
                            The effect on your credit profile depends on your individual history and whether you have already fallen behind on payments to your creditors. While debt resolution strategies can lead to a temporary decrease in credit scores, we focus on the long-term goal of total debt elimination. Please note that <b>Consumer Debt Management Service</b> is a debt negotiation entity and does not provide credit repair or legal advice on credit improvement.
                        </div>
                    </div>
                    <h5 class="dt-sc-toggle-accordion"><a href="#"> What is the specific criteria for your service fees? </a></h5>
                    <div class="dt-sc-toggle-content">
                        <div class="dt-sc-block">
                            Our commitment to transparency means we only earn our fee once three specific milestones are achieved:
                            <ul class="dt-sc-fancy-list ocean angle-double-right mt-1">
                                <li><span><b>Successful Negotiation:</b> We secure a formal settlement offer from your creditor.</span></li>
                                <li><span><b> Authorization:</b> You personally review and approve the negotiated amount</span></li>
                                <li><span><b>Initial Payment:</b> At least one payment is successfully made toward that settlement.</span></li>
                            </ul>
                            Only after these requirements are met is our performance fee—typically averaging up to 25% of the enrolled debt—applied to your account. If we don't deliver a settlement you approve, you owe us nothing.
                        </div>
                    </div>
                    <h5 class="dt-sc-toggle-accordion"><a href="#"> How does Debt Resolution differ from Debt Consolidation? </a></h5>
                    <div class="dt-sc-toggle-content">
                        <div class="dt-sc-block">
                            While both aim to manage debt, they function very differently:
                            <ul class="dt-sc-fancy-list ocean angle-double-right mt-1">
                                <li><span><b>Debt Resolution:</b> This process focuses on reducing the actual principal you owe. We negotiate with creditors to forgive a portion of the balance, allowing you to pay less than the original total in a final settlement.</span></li>
                                <li><span><b> Debt Consolidation:</b> This involves taking out a new loan to pay off multiple existing debts. While it simplifies your bills into a single monthly payment, it often requires a high credit score for approval and you still remain responsible for the full principal amount plus interest.</span></li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="dt-sc-toggle-accordion"><a href="#"> How will I know which strategy is right for me? </a></h5>
                    <div class="dt-sc-toggle-content">
                        <div class="dt-sc-block">
                            A friendly, dedicated debt specialist will walk you through all available paths. They will clearly explain the advantages and disadvantages of each option, helping you decide on the most effective route for your unique financial situation.
                        </div>
                    </div>
                    <h5 class="dt-sc-toggle-accordion"><a href="#"> What is your track record? </a></h5>
                    <div class="dt-sc-toggle-content">
                        <div class="dt-sc-block">
                            Since our establishment in 2009, we have successfully guided hundreds of thousands of individuals toward a debt-free life. We are recognized as one of the nation's premier debt relief organizations and take immense pride in our professional credentials, which include:
                                <ul class="dt-sc-fancy-list ocean angle-double-right mt-1">
                                <li><span>A+ Rating with the Better Business Bureau (BBB).</span></li>
                                <li><span>Highly Trusted by more than 121,980 clients.</span></li>
                                <li><span>4.79+ Star Rating compiled from verified reviews on Google, Trustpilot, and the BBB.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--dt-sc-toggle-frame-set ends-->
            </div>
        </div>

    </section>
    <div class="dt-sc-hr-invisible-large"></div>

</section>
<!--primary ends-->

@endsection