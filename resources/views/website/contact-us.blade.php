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

        <h1 class="aligncenter no-transform"> We Are Ready To Support You </h1>
        <div class="dt-sc-hr-invisible-very-small"></div>
        <p class="aligncenter">Overwhelmed by debt? Consumer Debt Management Service can help. We negotiate with lenders<br> to slash your liabilities. As a trusted agency with thousands of top reviews, we offer a free assessment<br> to show your savings and build a fast, insolvency-free path to financial freedom.</p>

        <div class="aligncenter mt-3">
            <a class="dt-sc-bordered-button dt-sc-bordered-button-secondary" href="#"> (800) 453-9120 </a>
        </div>

    </div>

</section>

<!-- Schedule Your Complimentary Debt Relief Review -->

<div class="dt-sc-hr-invisible-large"></div>

<section class="philanthropy-section">

    <div class="container">

        <h2 class="dt-sc-hr-title mb-2">Receive Your Complimentary, Risk-Free Financial Consultation</h2>
        <ul class="dt-sc-fancy-list chocolate check-circle flex flex-direction-column aligncenter">
            <li><span>Acquire A Custom Savings Projection Immediately</span></li>
            <li><span>Discover Your Accelerated Path To Total Recovery</span></li>
            <li><span>Zero Upfront Costs Until Resolution Is Reached</span></li>
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

@include('website-component.rating')

<div class="dt-sc-hr-invisible-large"></div>


@endsection