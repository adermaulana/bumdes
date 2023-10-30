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
            <h2>Hubungi Kami</h2>
            <hr>
            <img class="img-fluid mx-auto d-block" src="/images/nepo.jpg" alt="nepo-pembaharuan">
                <ul class="list-group mt-2">
                    <li class="list-group-item">Alamat : Poros Pattanrongge - Topporeng, Desa Nepo, Kecamatan Mallusetasi, Kabupaten Barru, Provinsi Sulawesi Selatan.</li>
                    <li class="list-group-item">Email : bumdesanepopembaharuan@gmail.com</li>
                    <li class="list-group-item">Telepon : 082188337739</li>
                    <li class="list-group-item">Website : <a target="_blank" href="https://nepo-pembaharuan.my.id">nepo-pembaharuan.my.id</a></li>
                </ul>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
