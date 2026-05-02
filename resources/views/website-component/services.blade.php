<div class="services-grid">
    <div class="container">

    @foreach($services as $service)
        <div class="dt-sc-one-fourth column">
            
            <div class="service-card">
                <img src="{{ asset($service['icon']) }}" alt="">
                <h4>{{ $service['title'] }}</h4>
                <p>{{ $service['description'] }}</p>
                <a href="{{ $service['link'] }}" class="learn-more">Learn More →</a>
            </div>

        </div>
    @endforeach

    </div>

</div>