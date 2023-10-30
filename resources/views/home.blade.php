@extends('layouts.main')

@section('container')

<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-12 col-lg-8">
            @if ($posts->count())
                @if ($posts[0]->image)
                <div>
                    <a href="/galeri/pesta-adat">
                        <img style="max-height:400px; overflow:hidden;" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" width="1200" class="img-fluid">
                        <span class="badge rounded-pill text-bg-dark mt-3 mb-2"><i class="fa-solid fa-newspaper"></i> GALERI</span>
                        <h3> {{ $posts[0]->title }}  </h3>
                    </a>
                        <p class="text-muted" style="font-size:13px !important;"> {{ $posts[0]->excerpt }} </p>
                </div>
                @endif
            @else
            <p style="margin-bottom:377px;" class="text-center fs-4">No Posts Found.</p>
            @endif
            <nav style="background-color:#f3f3f3;" class="py-1">
                <div class="container d-flex flex-wrap">
                    POSTS
                </div>
            </nav>
            <div class="row mt-3">
                @foreach($posts as $post)
                    <div class="col-12 col-lg">
                        <a href="/galeri/pesta-adat">
                            <img class="img-fluid" style="max-height:200px;" id="gambar-postingan"  src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->nama }}">
                        </a>
                    </div>
                    <div class="col-12 col-lg-7">
                        <a href="">
                            <h4> {{ $post->title }} </h4>
                        </a>
                            <p class="text-secondary time"> {{ $post->created_at }} </p>
                            <p style="font-size:13px;" class="card-text text-muted">{{ $post->excerpt }}</p>
                            <p>
                                <a style="background-color:black;" href="/posts/{{ $post -> slug  }}" class="badge">Read More</a>
                            </p>
                    </div>
                @endforeach
            </div>
        </div>





        @include('partials.sidebar')
    </div>
</div>

@endsection
