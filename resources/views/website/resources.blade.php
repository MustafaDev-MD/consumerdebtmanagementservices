@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <h1> Resources </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <span class="current"> Resources </span>
        </div>
    </div>
</div>

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">
        <section>

            <div class="dt-sc-one-half column first">
                <h1 class="dt-sc-simple-hr-title"> Every Vital Detail </h1>
                <p class="alignleft"> We have gathered each primary asset in a single location. Everything starting with liability settlement to mastering your economic prospects. Require a discussion? Our specialists are available to assist. Contact us whenever you wish for a complimentary, zero-pressure discussion. </p>
                <div class="dt-sc-hr-invisible-small"></div>
                <div class="alignleft">
                    <a class="dt-sc-bordered-button" href="tel:(855) 420-1988"> (855) 420-1988 </a>
                </div>
            </div>

            <div class="dt-sc-one-half column">
                <img src="{{ asset('assets/images/every-vital-detail.webp') }}" alt="Every Vital Detail" title="">
            </div>

        </section>

        <div class="dt-sc-hr-invisible-large"></div>

        <p class="aligncenter mb-3">"Don't hesitate to contact us, because the route toward financial independence<br> is merely a ring away. Armed with the required instruments and proficiency,<br> we stand prepared to aid your target attainment immediately."</p>
        <div class="flex gap-20 mb-2">
            <div class="author">
                <img src="{{ asset('assets/images/julian-m.webp') }}" alt="" title="">
            </div>
            <div class="author-meta">
                <p> Julian M. </p>
            </div>
        </div>

    </div>
    <!--container ends-->

</section>
<!--primary ends-->

@include('website-component.services')

<div class="dt-sc-hr-invisible-large"></div>

<section>

    <div class="container">

        <h4 class="aligncenter no-transform"> How Debt Resolution Works in 5 Transformative Stages </h4>
        <div class="dt-sc-hr-invisible-very-small"></div>
        <p class="aligncenter">We have guided over 1.4 Million individuals toward a more promising path. Our team bargains with leading financial institutions and lenders to lower balances and address various uncollateralized liabilities. For those struggling under the weight of credit card balances, signature loans, private educational lending, past-due accounts, or corporate obligations, the journey begins with a brief discussion and concludes with you regaining your life, free from debt!</p>

        <div class="aligncenter mt-3">
            <a class="dt-sc-bordered-button" href="tel:(855) 420-1988"> (855) 420-1988 </a>
        </div>

    </div>

</section>

<div class="dt-sc-hr-invisible-large"></div>

<section class="faq">

    <div class="container aligncenter flex flex-direction-column">
        <div class="column dt-sc-two-third first">

            <h2 class="dt-sc-hr-icon-title mb-2"> <img src="{{ asset('assets/images/help.png') }}" alt="Question" class="question"> Common Inquiries </h2>
            <p class="aligncenter">All the information required regarding debt resolution</p>
            <!--dt-sc-toggle-frame-set starts-->
            <div class="dt-sc-toggle-frame-set faq alignLeft">
                <h5 class="dt-sc-toggle-accordion"><a href="#"> Could this initiative influence my credit rating? </a></h5>
                <div class="dt-sc-toggle-content">
                    <div class="dt-sc-block">
                        Based on your individual circumstances and if you've previously bypassed installments to your lenders, resolution strategies might adversely affect your credit standing. Since this is an independently governed assistance, we refrain from performing credit restoration or suggesting methods for boosting your scores.
                    </div>
                </div>
                <h5 class="dt-sc-toggle-accordion"><a href="#"> How much are the fees for your assistance? </a></h5>
                <div class="dt-sc-toggle-content">
                    <div class="dt-sc-block">
                        With Consumer Debt Management Service, we only receive payment upon achieving successful outcomes for you. Specifically, 4 milestones are required before a charge is applied. Primarily, a negotiation proposal must be secured from the lender, we require your formal consent for the deal, and lastly, a minimum of 2 resolution installments must be transferred to the lender. Just then is our commission finalized and deducted from your Reserve Fund. After accounts are cleared, typical participants generally provide a commission of around 20% of the aggregate enrolled balance. However, until these 4 criteria are met, no charges are applied for our work.
                    </div>
                </div>
                <h5 class="dt-sc-toggle-accordion"><a href="#"> In what ways do Debt Settlement and Debt Consolidation differ? </a></h5>
                <div class="dt-sc-toggle-content">
                    <div class="dt-sc-block">
                        Debt settlement lowers the total principal. Your obligations are bargained lower, allowing you to satisfy accounts for a fraction of the original amount. The lender pardons the leftover sum through a formal agreement. Debt consolidation merges every liability into a solitary financing plan with one recurring bill, frequently featuring a diminished percentage for borrowing. This usually demands a superior rating to qualify.
                    </div>
                </div>
                <h5 class="dt-sc-toggle-accordion"><a href="#"> Which path is the ideal fit for my situation? </a></h5>
                <div class="dt-sc-toggle-content">
                    <div class="dt-sc-block">
                        A helpful, assigned financial consultant shall present every available choice along with the pros and cons of each—enabling you to determine the most suitable course of action.
                    </div>
                </div>
                <h5 class="dt-sc-toggle-accordion"><a href="#"> How is your history of performance? </a></h5>
                <div class="dt-sc-toggle-content">
                    <div class="dt-sc-block">
                        Starting in 2008, we have effectively assisted numerous individuals in reaching a more stable economic outlook. We stand as a premier provider in the industry and find value in our credentials, such as:<br>
                        <ul class="dt-sc-fancy-list ocean angle-double-right mt-1">
                            <li><span>Top-tier status via the Better Business Bureau</span></li>
                            <li><span>Reliable for more than 175,000 clients — Ranked 4.7+ stars* Based on reviews from Google, Trustpilot, and BBB.</span></li>
                            <li><span>A group of liability negotiators licensed by the IAPDA (International Association of Professional Debt Arbitrators)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--dt-sc-toggle-frame-set ends-->
        </div>
    </div>

</section>

<div class="dt-sc-hr-invisible-large"></div>

@endsection