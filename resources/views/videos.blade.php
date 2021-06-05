@extends('common.master')

@section('content')
    <section class="hero is-warning">
        <div class="hero-body">
            <p class="title">
                Videos
            </p>
            <p class="subtitle">
                Funny YouTube videos
            </p>
        </div>
    </section>
    @foreach($videos as $video)
        <div class="videos">
            <iframe class="video-border" width="560" height="315" src="{{$video->URL}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    @endforeach
@endsection
