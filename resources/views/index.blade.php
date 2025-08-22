@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="home-hero" class="home-hero">
    <div class="home-hero-content">
        <h1>Welcome to <span>Syntax Squad</span></h1>
        <p>We are a passionate team of developers building creative solutions.</p>
        <a href="#home-about" class="btn-primary">Learn More</a>
    </div>
</section>

<!-- About Section -->
<!-- About Section -->
<section id="home-about" class="home-about">
    <div class="container home-about-container">
        <h2 class="text-center mb-4">About Us</h2>
        <div class="home-about-row">
            <p>
                Syntax Squad is a passionate team of students and aspiring developers dedicated to learning, building, and innovating with technology.
            </p>

            <!-- Mission -->
            <div class="about-card">
                <button class="about-header">
                    <div class="about-icon"><i class="fas fa-bullseye"></i></div>
                    <span>Our Mission</span>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="about-content">
                    <p>
                        To create impactful and creative digital solutions while continuously growing our skills in web development, design, and collaboration.
                    </p>
                </div>
            </div>

            <!-- Vision -->
            <div class="about-card">
                <button class="about-header">
                    <div class="about-icon"><i class="fas fa-eye"></i></div>
                    <span>Our Vision</span>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="about-content">
                    <p>
                        We aim to be a well-recognized team known for creativity, teamwork, and dedication. We want to inspire others to collaborate and bring ideas to life.
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="about-card">
                <button class="about-header">
                    <div class="about-icon"><i class="fas fa-heart"></i></div>
                    <span>Our Values</span>
                    <i class="fas fa-chevron-down toggle-icon"></i>
                </button>
                <div class="about-content">
                    <ul>
                        <li><strong>Teamwork</strong> – We grow better together.</li>
                        <li><strong>Creativity</strong> – We think outside the box.</li>
                        <li><strong>Commitment</strong> – We finish what we start.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Team Section -->
<section id="home-team" class="home-team py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Meet Our Team</h2>
        <div class="home-team-grid">
            @foreach ($members as $slug => $member)
                <div class="home-team-card">
                    <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}">
                    <h3>{{ $member['name'] }}</h3>
                    <p>{{ $member['role'] }}</p>
                    <a href="{{ route('member.show', $slug) }}" class="btn-secondary">View Profile</a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="home-services" class="home-services py-5">
    <div class="container">
        <h2 class="text-center">What We Do</h2>
        <div class="home-services-grid">
            <div class="home-service-box">
                <i class="fas fa-code"></i>
                <h4>Web Development</h4>
                <p>Building simple yet effective websites with clean design.</p>
            </div>
            <div class="home-service-box">
                <i class="fas fa-lightbulb"></i>
                <h4>Creative Design</h4>
                <p>Turning ideas into interactive and engaging projects.</p>
            </div>
            <div class="home-service-box">
                <i class="fas fa-users"></i>
                <h4>Collaboration</h4>
                <p>Working as a team to deliver the best solutions.</p>
            </div>
        </div>
    </div>
</section>

@endsection
