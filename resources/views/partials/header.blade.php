<header class="nieuweland">

    <div class="container-fluid">
        <a href="{{ route('/') }}" class="logo">
            <img src="/img/logo.jpg" alt="Logo">
            <span>Stal Nieuwland</span>
        </a>
        <div class="nav-toggle">
            <div class="nav-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

        <nav>
            <ul class="navbar-nav">
                @foreach ($pages as $item)
                    @include('partials.navigation')
                @endforeach
                <a href="{{ route('signup') }}" class="btn">Inschrijven</a>

            </ul>

        </nav>
    </div>
</header>
