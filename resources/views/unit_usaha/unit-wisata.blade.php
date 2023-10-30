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
            <h2>Unit Wisata</h2>
            <hr>
            <p style="font-size:25px;">
            <b>Unit Wisata</b> Upaya yang dilakukan BUMDES Nepo Pembaharuan yakni pengembangan beberapa destinasi wisata yang memiliki potensi yang unggul dan juga berupaya melakukan branding media, apalagi Desa Nepo termasuk bagian daripada Desa Wisata Nusantara dengan Nama Wisata Kampung Halaman Habibie Kecil
            </p>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
