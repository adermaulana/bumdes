

<nav  style="background-color:black !important;" class="bg-light border-bottom">
    <div id="nav-atas" class="container d-flex flex-wrap justify-content-end">
      <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="fa-brands fa-whatsapp"></i></a></li>
        <li class="nav-item"><a href="mailto:bumdesanepopembaharuan@gmail.com" class="nav-link link-dark px-2"><i class="fa-regular fa-envelope"></i></a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="fa-brands fa-instagram"></i></a></li>
      </ul>
    </div>
  </nav>
<nav class="border-bottom navbar-hidden">
    <div class="container d-flex flex-wrap justify-content-center">
            <div class="row">
              <div class="col-3 col-lg-3">
              <a href="/">
                <img src="/images/nepo.jpg" alt="" width="100">
                </a>
              </div>
              <div class="col-9 col-lg mt-3">
                <h4><span style="color:#137c13;" >BADAN USAHA MILIK DESA</span></h4>
                <h4>NEPO PEMBAHARUAN</h4>
              </div>
            </div>
    </div>
  </nav>
<nav style="font-size:13px;" id="navbar-2" class=" navbar navbar-expand-lg bg-body-tertiary shadow gradient-bg ">
  <div class="container-fluid">
    <button style="border-color:white; color:white !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/profil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PROFIL
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profil/tentang-bumdes">TENTANG BUMDES</a></li>
            <li><a class="dropdown-item" href="/profil/struktur">STRUKTUR</a></li>
            <li><a class="dropdown-item" href="/profil/visi-misi">VISI & MISI</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/nepo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NEPO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/nepo/profil-desa">PROFIL DESA</a></li>
            <li><a class="dropdown-item" href="/nepo/potensi-desa">POTENSI DESA</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/unit-usaha" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            UNIT USAHA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/unit-usaha/unit-tenda-terowongan">UNIT TENDA TEROWONGAN</a></li>
            <li><a class="dropdown-item" href="/unit-usaha/unit-wisata">UNIT WISATA</a></li>
            <li><a class="dropdown-item" href="/unit-usaha/unit-pertanian-dan-peternakan">UNIT PERTANIAN & PETERNAKAN</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/legalitas-badan-usaha" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LEGALITAS BADAN USAHA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/legalitas-badan-usaha/sertifikat">SERTIFIKAT BADAN HUKUM</a></li>
            <li><a class="dropdown-item" href="/legalitas-badan-usaha/sk-kepengurusan">SK KEPENGURUSAN</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/galeri" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GALERI
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/galeri/kemah-literasi">KEMAH LITERASI</a></li>
            <li><a class="dropdown-item" href="/galeri/pesta-adat">PESTA ADAT</a></li>
            <li><a class="dropdown-item" href="/galeri/produk">PRODUK</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/info" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            INFO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/info/ad-art">AD/ART</a></li>
            <li><a class="dropdown-item" href="/info/perjanjian-kerjasama">PERJANJIAN KERJASAMA</a></li>
            <li><a class="dropdown-item" href="/info/laporan-keuangan">LAPORAN KEUANGAN</a></li>
            <li><a class="dropdown-item" href="/info/bmc">BMC</a></li>
            <li><a class="dropdown-item" href="/info/company-profile">COMPANY PROFILE</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/hubungi-kami">HUBUNGI KAMI</a>
        </li>
        @auth
        <li class="nav-item dropdown navbar-nav me-5">
          <a class="nav-link {{ ($title === 'Portal Berita' || $title === 'Booking Pendakian') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul style="margin-left:50px;" class="dropdown-menu mt-4" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard">DASHBOARD</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  LOGOUT
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">LOGIN</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll('.nav-item.dropdown');

    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener('mouseover', function () {
        dropdown.querySelector('.dropdown-menu').classList.add('show');
      });

      dropdown.addEventListener('mouseout', function () {
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
      });
    });
  });
</script>


