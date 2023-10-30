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
            <h2>Visi & Misi BUMDES Nepo Pembaharuan</h2>
            <hr>
            <h5>Visi</h5>
            <p style="font-size:20px;">
            “Mendorong tumbuhnya usaha ekonomi yang berkemajuan secara transparan dan akuntabel demi berkelanjutan kehidupan masyarakat Desa Nepo”
            </p>
            <h5>Misi</h5>
            <ol style="font-size:20px;">
                <li>Memanfaatkan potensi sumber daya manusia yang ada di Desa Nepo sebagai aset pertumbuhan ekonomi lokal.</li>
                <li>Pengembangan usaha dalam bidan pertanian dan peternakan melalui masyarakat Desa</li>
                <li>Pengembangan UMKM melalui pengembangan Potensi Wisata</li>
                <li>Mengembangkan jaringan kerja sama ekonomi dengan berbagai pihak</li>
            </ol>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
