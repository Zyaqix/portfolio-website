@extends('layout')

@section('title', 'Portfolio')

@section('content')

<div class="portfolio-hero">
    <h1>My Projects</h1>
</div>

<div class="portfolio-section">
    <div class="portfolio-row">
        @foreach($projects as $project)
            <div class="portfolio-card">
                <img src="{{ $project['image'] }}" class="portfolio-card-image" alt="{{ $project['title'] }}">
                <div class="portfolio-card-body">
                    <h3 class="portfolio-card-title">{{ $project['title'] }}</h3>
                    <p class="portfolio-card-description">{{ $project['description'] }}</p>
                    <a href="{{ $project['link'] }}" class="portfolio-card-button">View Project</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
