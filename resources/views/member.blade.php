@extends('layouts.app')

@section('content')

<!-- About Section -->
<section id="about" class="py-5">
  <div class="about-container">
    <div class="about-img">
      <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}">
    </div>
    <div class="about-details">
      <h1>{{ $member['name'] }}</h1>
      <h3>{{ $member['role'] }}</h3>
      <p>{{ $member['description'] }}</p>

      <ul>
        <li><strong>Birthdate:</strong> {{ $member['birthdate'] }}</li>
        <li><strong>Birthplace:</strong> {{ $member['birthplace'] }}</li>
        <li><strong>Current Address:</strong> {{ $member['address'] }}</li>
        <li><strong>Email:</strong> {{ $member['email'] }}</li>
      </ul>
    </div>
  </div>
</section>

<!-- Timeline Section -->
<section id="education" class="py-5">
  <h2 class="text-center">My Educational Journey</h2>
  <div class="timeline">
    @foreach($member['education'] as $index => $edu)
      <div class="timeline-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
        <div class="content-box">
          <img src="{{ asset($edu['logo']) }}" alt="{{ $edu['school'] }}" class="school-logo">
          <h5>{{ $edu['level'] }}</h5>
          <p><strong>{{ $edu['school'] }}</strong></p>
          <p>{{ $edu['desc'] }}</p>
        </div>
      </div>
    @endforeach
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Skills & Hobbies</h2>
    <div class="skills-grid">
      @foreach($member['skills'] as $skill)
        <div class="skill-card">
          <img src="{{ asset($skill['icon']) }}" alt="{{ $skill['name'] }}">
          <p>{{ $skill['name'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">Recent Projects</h2>
    <div class="projects-grid">
      @foreach($member['projects'] as $project)
        <div class="project-card">
          <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
          <div class="project-info p-3">
            <h5>{{ $project['title'] }}</h5>
            <p>{{ $project['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
