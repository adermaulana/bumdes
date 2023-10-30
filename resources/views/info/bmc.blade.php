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
            <h2>Business Model Canvas</h2>
            <hr>
            <h4>BMC Pertanian Jagung</h4>
            <div class="pdf-container">
                <embed src="/pdf/BMC Pertanian Jagung.pdf" type="application/pdf" width="100%" height="100%">
            </div>
            <h4 class="mt-3" >BMC Wisata Mattimbo'e</h4>
            <div class="pdf-container">
                <embed src="/pdf/BMC Wisata Mattimboe.pdf" type="application/pdf" width="100%" height="100%">
            </div>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
