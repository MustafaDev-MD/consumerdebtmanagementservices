@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <h1> Contact Us </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <span class="current"> Contact Us </span>
        </div>
    </div>
</div>

<div class="dt-sc-hr-invisible-large"></div>

<section class="core-values-section">

    <div class="container">

        <h1 class="aligncenter no-transform"> Reach Out. We’re Ready to Assist. </h1>
        <div class="dt-sc-hr-invisible-very-small"></div>
        <p class="aligncenter">A sense of renewed hope often follows a client's very first consultation with us.<br> Regardless of your current financial landscape, Consumer Debt Management Service is here to provide the support you need.</p>
        <p class="aligncenter">Our Company Profile</p>

        <div class="aligncenter mt-3">
            <a class="dt-sc-bordered-button dt-sc-bordered-button-secondary" href="#"> (877) 796-7686 </a>
        </div>

    </div>

</section>

<!-- Schedule Your Complimentary Debt Relief Review -->

<div class="dt-sc-hr-invisible-large"></div>

<section class="philanthropy-section">

    <div class="container">

        <h2 class="dt-sc-hr-title mb-2">Schedule Your Complimentary Debt Relief Review</h2>
        <ul class="dt-sc-fancy-list chocolate check-circle flex flex-direction-column aligncenter">
            <li><span>Receive a customized savings forecast</span></li>
            <li><span>Review your timeline to financial freedom.</span></li>
            <li class="ml-25"><span>Pay zero service costs until settlements are finalized.</span></li>
        </ul>

        <div class="width-100">
            <div class="custom-consultation-form bg-grey">
                <h3>Free Consultation with a <br>Certified Debt Specialist</h3>

                <form action="#" method="post">
                    <div class="form-row">
                        <select name="debt-amount" class="full-width">
                            <option value="">Debt Amount</option>
                            <option value="5k-10k">$5,000 - $10,000</option>
                            <option value="10k-20k">$10,000 - $20,000</option>
                            <option value="20k+">$20,000+</option>
                        </select>
                    </div>

                    <div class="form-row flex-row">
                        <input type="text" placeholder="First Name *" required>
                        <input type="text" placeholder="Last Name *" required>
                    </div>

                    <div class="form-row">
                        <input type="tel" placeholder="Phone Number *" class="full-width" required>
                    </div>

                    <div class="form-row">
                        <input type="email" placeholder="Email Address *" class="full-width" required>
                    </div>

                    <div class="form-row">
                        <button type="submit" class="dt-sc-button">Get Your Free Consultation Today</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</section>

<div class="dt-sc-hr-invisible-large"></div>

<!-- Reviews -->

<section class="nx-reviews-sec">

    <div class="container">

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

    </div>

</section>

<div class="dt-sc-hr-invisible-large"></div>


@endsection