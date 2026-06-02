@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">

        <h1>
            {{ $client['name'] ?? 'Our People' }}
        </h1>

        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a>

            <a href="{{ route('client-stories') }}">
                Client Stories
            </a>

            <span class="current">
                {{ $client['name'] ?? 'Detail' }}
            </span>
        </div>

    </div>
</div>

<!--container starts-->
<div class="container">
    <!--primary starts-->
    <section id="primary" class="content-full-width">

        <div class="our-people-detail">

            <div class="image">
                <img src="{{ asset($client['image'] ?? 'assets/images/our-people-detail-img.jpg') }}"
                    alt="{{ $client['name'] ?? 'Client' }}">
            </div>

            <div class="our-people-detail-info">

                <h4>{{ $client['name'] ?? 'No Name' }}</h4>

                <span>{{ $client['description'] ?? 'Associate' }}</span>

                <br>

                <div class="dt-sc-hr-invisible-very-small"></div>

            </div>

        </div>

        <div class="dt-sc-hr-invisible-medium"></div>
        <div class="dt-sc-hr-invisible-very-small"></div>

        <!--dt-sc-tabs-container starts-->
        @php
        $tabs = $client['tabs'] ?? [];
        @endphp

        <div class="dt-sc-tabs-container">

            {{-- Tabs Header --}}
            <ul class="dt-sc-tabs-frame">
                @foreach($tabs as $tab)
                <li><a href="javascript:void(0);">{{ $tab['title'] ?? '' }}</a></li>
                @endforeach
            </ul>

            {{-- Tabs Content --}}
            @foreach($tabs as $tab)

            {{-- TAB 1: Savings --}}
            @if(($tab['title'] ?? '') === 'Savings')
            <div class="dt-sc-tabs-frame-content">
                <h2>{{ $tab['heading'] ?? '' }}</h2>

                <div class="flex gap-20 flex-wrap">
                    @foreach($tab['cards'] ?? [] as $card)
                    <div class="dt-sc-one-fourth column">
                        <div class="service-card">
                            <img src="{{ asset($card['image'] ?? 'assets/images/resources/credit-card-debt-relief.svg') }}" alt="">
                            <p>{{ $card['label'] }}</p>
                            <h2>{{ $card['amount'] }}</h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- TAB 2: Testimonial --}}
            @if(($tab['title'] ?? '') === 'Testimonial')
            <div class="dt-sc-tabs-frame-content">
                <div class="flex flex-direction-column gap-20">

                    {{-- First Image --}}
                    @if(!empty($tab['images'][0]))
                    <img src="{{ asset($tab['images'][0]) }}" alt="">
                    @endif

                    {{-- Text --}}
                    <h3 class="mt-1 mb-1 aligncenter">
                        {!! $tab['text'] ?? '' !!}
                    </h3>

                    {{-- Second Image --}}
                    @if(!empty($tab['images'][1]))
                    <img src="{{ asset($tab['images'][1]) }}" alt="">
                    @endif

                </div>
            </div>
            @endif

            {{-- TAB 3: Comparison --}}
            @if(($tab['title'] ?? '') === 'Comparison')
            <div class="dt-sc-tabs-frame-content">

                <div class="container">

                    <h4 class="aligncenter no-transform">
                        {{ $tab['content']['heading'] ?? '' }}
                    </h4>

                    <div class="dt-sc-hr-invisible-very-small"></div>

                    <div class="flex gap-20">

                        {{-- LEFT SIDE (Profile Card) --}}
                        <div class="column dt-sc-one-fourth first">

                            <div class="dt-sc-team">

                                <div class="dt-sc-team-thumb">
                                    <img src="{{ asset($tab['content']['image'] ?? 'assets/images/attorney1.jpg') }}" alt="">
                                </div>

                                <div class="dt-sc-team-content">

                                    <h5>
                                        {{ $tab['content']['name'] ?? 'Client Name' }}
                                    </h5>

                                    <span>
                                        <b>{{ $tab['content']['starting_debt_label'] ?? '' }}</b>
                                        {{ $tab['content']['starting_debt'] ?? '' }}
                                    </span>

                                    <p class="dt-sc-team-phone-no">
                                        <b>{{ $tab['content']['savings_label'] ?? '' }}</b>
                                        {{ $tab['content']['savings'] ?? '' }} With Consumer Debt Management Service
                                    </p>

                                </div>

                            </div>

                        </div>

                        {{-- RIGHT SIDE (Progress Bars) --}}
                        <div class="column dt-sc-one-half first">

                            @foreach($tab['content']['programs'] ?? [] as $p)

                            <div class="dt-sc-bar-text">
                                {{ $p['name'] }} - {{ $p['value'] }}
                            </div>

                            <div class="dt-sc-progress dt-sc-progress-standard">
                                @php
                                $color = $p['color'] ?? '#000';
                                @endphp
                                <div class="dt-sc-bar color-{{ $p['color_key'] ?? 'default' }}"
                                    data-value="{{ $p['percent'] }}">
                                </div>
                            </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>
            @endif

            @endforeach

        </div>

        <!--dt-sc-tabs-container ends-->

        <div class="dt-sc-hr-invisible-medium"></div>
        <div class="dt-sc-clear"></div>

        <section>

    <h5>Related Attorneys</h5>

    <div class="dt-sc-hr-invisible-medium"></div>

    <div class="dt-sc-attorney-carousel-wrapper">
        <ul class="dt-sc-attorney-carousel">

            @foreach($related as $item)

            <li>
                <div class="dt-sc-team type2">

                    <div class="dt-sc-team-thumb">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                    </div>

                    <div class="dt-sc-team-content">

                        <h5>{{ $item['name'] }}</h5>

                        <span>{{ $item['description'] }}</span>

                        <a href="{{ route('client-stories-detail', $item['slug']) }}" class="dt-sc-button">
                            <span class="fa fa-user"></span>  Read Biography </a>

                    </div>

                </div>
            </li>

            @endforeach

        </ul>

        <div class="carousel-arrows">
            <a class="attorney-prev" href="#"><span class="fa fa-angle-left"></span></a>
            <a class="attorney-next" href="#"><span class="fa fa-angle-right"></span></a>
        </div>

    </div>

</section>

    </section>

</div>
<!--container ends-->

@endsection