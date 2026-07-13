<link rel="stylesheet" href="{{ asset('css/user/partials/class_hero.css') }}">

<section class="hero-section">

    <div class="hero-overlay"></div>

    <!-- White Diagonal Shape -->
    <div class="hero-shape"></div>

    <div class="hero-container">

        <!-- Left Content -->

        <div class="hero-content">

            <h1>{{ $mainHeading ?? 'Main headline' }}</h1>

            <p>
                {{ $subHeading ?? 'Sub headline' }}
            </p>

            <!-- Reusable Button -->
            @if(isset($buttonText))
                <a href="{{ $buttonLink ?? '#' }}" class="hero-btn">
                    {{ $buttonText }} <i class="fa-solid fa-arrow-right"></i>
                </a>
            @endif

        </div>

        <!-- Right Image -->

        <div class="hero-image">

            <img
                src="{{ asset('images/hero_side_image.png') }}"
                alt="Badminton Player">

        </div>

    </div>

</section>