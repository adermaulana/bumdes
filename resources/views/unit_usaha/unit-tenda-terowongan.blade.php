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
            <h2>Unit Tenda Terowongan</h2>
            <hr>
            <p style="font-size:25px;">
            <b>Tenda Terowongan</b> Salah satu potensi yang dilihat oleh BUMDES adalah banyaknya acara pernikahan masyarakat lokal sehingga BUMDES menghadirkan tenda terowongan sebagai aset investasi jangka panjang, karena tenda terowongan menjadi bagian terpenting dalam melakukan sebuah acara pernikahan, Aqiqah, dll.
            </p>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
