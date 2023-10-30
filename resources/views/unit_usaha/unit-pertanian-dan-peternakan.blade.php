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
            <h2>Unit Pertanian dan Peternakan</h2>
            <hr>
            <p style="font-size:25px;">
            <b>Unit Pertanian dan Peternakan</b> Dalam pengelolaan usaha tani dan ternak BUMDES memfokuskan pada pengelolaan hasil tanaman padi, jagung, bebek, dan sapi
            </p>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
