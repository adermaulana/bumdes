@extends('layouts.main')

@section('container')

<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-12 col-lg-8">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ $breadcrumb }} </li>
                </ol>
            </nav>
            <h2>Profil BUMDES Nepo Pembaharuan</h2>
            <hr>
            <img class="img-fluid mx-auto d-block" src="/images/nepo.jpg" alt="nepo-pembaharuan">
            <p style="font-size:20px;">
            Badan Usaha Milik Desa (BUMDes) Kadjen menjadi bagian penting dalam upaya penguatan ekonomi pedesaan. Sesuai pengertiannya, BUMDes merupakan lembaga yang dikelola oleh masyarakat dan pemerintahan desa dalam usaha memperkuat perekonomian desa dan dibentuk berdasarkan kebutuhan dan potensi desa. BUMDes juga dibentuk untuk menghasilkan Pendapatan Asli Desa (PAD). BUMDes yang maju tentu dapat meningkatkan kesejahteraan masyarakat desa dengan memanfaatkan segala potensi yang dimilikinya. Sehingga dalam upaya itu BUMDes Nepo Pembaharuan senantiasa melaksanakan kerja yang memanfaatkan potensi desa dalam upaya peningkatan kesejahteran ekonomi masyarakat Desa Nepo dan Peningkatan Pendapatan Asli Desa (PAD) melalui beberapa Unit Usaha yakni Pertanian, Ekowisata, serta Penyewaan Tenda Terowongan.
            </p>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
