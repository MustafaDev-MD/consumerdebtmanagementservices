@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <h1> Our People </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <span class="current"> Our People </span>
        </div>
    </div>
</div>

<!--container starts-->
<div class="container">
    <!--primary starts-->

    <div class="dt-sc-hr-invisible-large"></div>

    <section>

        <h2 class="dt-sc-hr-title mb-2"> Their Journeys Conclude Happily </h2>
        <!-- <p class="aligncenter mb-3">“Connect with Consumer Debt Management Service to discover our debt-relief pathways. Armed with the proper resources and industry knowledge, we stand prepared to assist you in reaching your milestones immediately.”</p>
        <div class="flex gap-20 mb-2">
            <div class="author">
                <img src="{{ asset('assets/images/marcus-t.webp') }}" alt="" title="">
            </div>
            <div class="author-meta">
                <p> Marcus T. </p>
            </div>
        </div> -->

    </section>

    <section id="primary" class="content-full-width">

        <!-- Attorney List -->
        <div class="attorney_list">

            @foreach ($clients as $client)

            <div class="attorney_content local_asset_management">

                <div class="image">
                    <a href="{{ route('client-stories-detail', $client['slug']) }}">
                        <img src="{{ asset($client['image']) }}" alt="{{ $client['name'] }}">
                    </a>
                </div>

                <div class="attorney_details">

                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6>
                                <a href="{{ route('client-stories-detail', $client['slug']) }}">
                                    {{ $client['name'] }}
                                </a>
                            </h6>
                        </div>
                    </div>

                    <p>{{ $client['description'] }}</p>

                    <a href="{{ route('client-stories-detail', $client['slug']) }}"
                        class="dt-sc-button dt-sc-button-secondary alignright">
                        <span class="fa fa-user"></span>
                        Read Biography
                    </a>

                </div>

            </div>

            @endforeach

        </div>
        <!-- Attorney List Ends -->

    </section>

    <!--primary ends-->
    <div class="dt-sc-hr-invisible-large"></div>

    <!-- Reviews -->

    @include('website-component.how-it-works')

    <div class="dt-sc-hr-invisible-large"></div>

    <section id="primary" class="content-full-width">
        <!--container starts-->
        <div class="container">

            <div class="dt-sc-one-half column first">
                <h1 class="dt-sc-simple-hr-title"> A Remarkable Transformation Occurs<br><br> Following Your Initial Strategy Session<br><br> With Consumer Debt Management<br><br> Service. </h1>
                <p>Clients immediately experience the confidence that comes with regaining complete authority over both their individual and career trajectories.</p>
                <div class="alignleft mt-2">
                    <a class="dt-sc-bordered-button" href="{{ route('contact-us') }}"> Get Started </a>
                </div>
            </div>

            <div class="dt-sc-one-half column">
                <img src="{{ asset('assets/images/a-remarkable-transformation.webp') }}" alt="A Remarkable Transformation" title="A Remarkable Transformation">
            </div>

        </div>
        <!--container ends-->

    </section>

    <div class="dt-sc-hr-invisible-large"></div>

    <section>

        <h2 class="dt-sc-hr-title mb-2"> Empowering Over 1.5 Million Individuals to Reach Financial Freedom. </h2>
        <p class="aligncenter mb-3">“The goal of Consumer Debt Management Service is to return your autonomy, allowing you to live life on your own terms. Alongside our professional team, we work relentlessly to provide impactful and permanent solutions for your debt resolution journey.”</p>

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

</div>
<!--container ends-->

@endsection