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

            @can('upload-video')
                <a href="/videos/create" class="button is-link">
                                    Add video
                                </a><br><br>
            @endcan

{{--            @if(Auth::user())--}}
{{--                <a href="/videos/create" class="button is-link">--}}
{{--                    Add video--}}
{{--                </a><br><br>--}}
{{--            @endif--}}

        </div>
    </section>
    @foreach($videos as $video)
        <div class="videos">
            <iframe class="video-border" width="560" height="315" src="https://www.youtube.com/embed/{{ explode('=', $video->URL)[1] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @can('delete-videos')
                <form class = "form" method="POST" action="/videos/{{ $video->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button is-danger">Delete</button>
                </form>
            @endcan
        </div>
    @endforeach
@endsection
