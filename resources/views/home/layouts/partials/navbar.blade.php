<div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">BAGOPS - KOTA SAMARINDA</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('sailor') }}/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="/" class="{{ request()->segment(1) == '' ? 'active' : '' }}">Beranda</a></li>

            <li class="dropdown"><a href=""><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="team.html">Visi & Misi</a></li>
                    <li><a href="testimonials.html">Pejabat Kepolisian</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href=""><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="about.html" class="">Pengaduan Masyarakat</a></li>
                    <li><a href="team.html" class="">Pelayanan Lantas</a></li>
                    <li><a href="testimonials.html" class="">Pelayanan Reskrim</a></li>
                </ul>
            </li>
            <li><a href="{{ route('home.berita.index') }}"
                    class="{{ request()->segment(1) == 'berita' ? 'active' : '' }}">Berita</a></li>

            <li><a href="/contact" class="{{ request()->segment(1) == 'contact' ? 'active' : '' }}">Contact</a></li>
            {{-- <li><a href="index.html" class="getstarted">Get Started</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
