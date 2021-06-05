@extends('common.master')

@section('content')
    <section class="hero is-warning">
        <div class="hero-body" >
            <p class="title">
                Pictures
            </p>
            <p class="subtitle">
                Funny pictures
            </p>
        </div>
    </section>

    @foreach($pictures as $picture)
        <img class = "images" src="{{asset("images/$picture->fileName")}}" alt="{{$picture->Alt}}" width="200"
             height="80">
    @endforeach
@endsection
