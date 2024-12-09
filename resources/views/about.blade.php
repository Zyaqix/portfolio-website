@extends('layout')

@section('title', 'About')

@section('content')

<div class="about-hero">
    <h1>About Me</h1>
</div>

<div class="about-description">
    <p>I am currently studying at Eötvös Loránd University, majoring in computer programming.
            During my studies I was introduced to C# and Java programming.
            I have worked on projects based on .NET, ASP.NET Core, Laravel and React.
        </p>
    <p>I have experience in managing MSSQL databases and I have used Github for teamwork.
        </p>
    <p>I would like to further develop my programming and and web development skills,
        while maintaining a quiet, but active and supportive presence to contribute to the work environment.
    </p>
</div>

<div class="personal-info">
    <h3>Personal Information</h3>
</div>

<div class="info-description">
    <ul class="info-list">
        @foreach ($information as $info)
            <li><strong>First Name:</strong> {{ $info['firstname'] }} </li>
            <li><strong>Last Name:</strong> {{ $info['lastname'] }}</li>
            <li><strong>Age:</strong> {{ $info['age'] }}</li>
            <li><strong>Nationality:</strong> {{ $info['nationality'] }}</li>
            <li><strong>Address:</strong> {{ $info['address'] }}</li>
            <li><strong>Phone:</strong> {{ $info['phone'] }}</li>
            <li><strong>Email:</strong> {{ $info['email'] }}</li>
            <li><strong>Languages:</strong> {{ $info['languages'] }}</li>
        @endforeach
    </ul>
</div>
@endsection
