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
            <h2>Kemah Literasi</h2>
            <hr>
            <img class="img-fluid" src="/images/kemah3.jpg" alt="Kemah" width="1200">
            <img class="img-fluid mt-3" src="/images/kemah1.jpg" alt="Kemah" width="365">
            <img class="img-fluid mt-3" src="/images/kemah2.jpg" alt="Kemah" width="365">
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
