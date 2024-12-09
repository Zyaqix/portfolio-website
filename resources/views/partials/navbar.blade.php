<header>
    <nav class="navbar">
        <button class="menu-toggle" aria-label="Toggle menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="nav-links">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
            <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        </ul>
    </nav>
</header>
