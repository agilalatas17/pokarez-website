<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo/erlina_logo.png') }}" alt="pokarez logo"
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
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Erlina</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Artikel
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Panduan Penulisan Artikel Ilmiah Populer
                                </a></li>
                            <li><a class="dropdown-item" href="#">Form Pengiriman Artikel</a></li>
                            <li><a class="dropdown-item" href="#">Panduan Pembuatan Infografis</a></li>
                            <li><a class="dropdown-item" href="#">Form Pengiriman Infografis Erlina</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Video
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Panduan Pembuatan Video Edukasi</a></li>
                            <li><a class="dropdown-item" href="#">Form Pengiriman Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            E-Modul
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Panduan Pembuatan E-Modul</a></li>
                            <li><a class="dropdown-item" href="#">Form Pengiriman E-Modul Erlina</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Course</a></li>
                            <li><a class="dropdown-item" href="#">Webinar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Konsultasi Erlina</a>
                    </li>
                </ul>
                <div class="navbar-cta">
                    <button type="button" class="btn btn-primary navbar-cta">Take Free Course</button>
                </div>
            </div>

        </div>
    </div>
</nav>
