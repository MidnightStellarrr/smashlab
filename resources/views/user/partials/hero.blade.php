<!-- navbar -->
@include('user.partials.navbar')

<!-- Hero Content -->
<section class="contact-hero">

    <div class="contact-overlay"></div>

    <div class="contact-hero-content">

        <h1>{{ $mainHeading ?? 'Main headline' }}</h1>

        <p>
            {{ $subHeading ?? 'Sub headline' }}
        </p>

    </div>

</section>