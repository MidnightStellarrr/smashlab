<link rel="stylesheet" href="{{ asset('css/user/partials/hero.css') }}">

<!-- Hero Content -->
<section class="hero-section">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <h1>{{ $mainHeading ?? 'Main headline' }}</h1>

        <p>
            {{ $subHeading ?? 'Sub headline' }}
        </p>

    </div>

</section>