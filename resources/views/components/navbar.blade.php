<nav class="navbar navbar-expand-lg position-fixed w-100">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/logo/erlina_logo.png') }}" alt="pokarez logo"
                width="193" height="72"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end w-100" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href='/' class="offcanvas-title" id="offcanvasNavbarLabel"><img
                        src="{{ asset('assets/logo/erlina_logo.png') }}" alt="pokarez logo" width="132"></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mx-auto gap-4">
                    <li class="nav-item fs-5 fw-medium">
                        <a class="nav-link {{ request()->is('konsultasi') ? 'text-white' : '' }}{{ request()->is('/') ? 'active' : '' }}"
                            aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item fs-5 fw-medium">
                        <a class="nav-link {{ request()->is('konsultasi') ? 'text-white' : '' }}{{ request()->is('about') ? 'active' : '' }}"
                            aria-current="page" href="/about">Tentang
                            Pokarez</a>
                    </li>
                    <li class="nav-item fs-5 fw-medium">
                        <a class="nav-link {{ request()->is('konsultasi') ? 'text-white' : '' }}{{ request()->is('articles') ? 'active' : '' }}"
                            aria-current="page" href="/articles">Artikel</a>
                    </li>
                    <li class="nav-item fs-5 fw-medium">
                        <a class="nav-link {{ request()->is('konsultasi') ? 'text-white' : '' }}{{ request()->is('video') ? 'active' : '' }}"
                            aria-current="page" href="/video">Video</a>
                    </li>
                    <li class="nav-item fs-5 fw-medium">
                        <a class="nav-link {{ request()->is('konsultasi') ? 'active' : '' }}" aria-current="page"
                            href="/konsultasi" id="konsultasi-link">Konsultasi Pokarez</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
