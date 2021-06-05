@extends('common.master')

@section('content')
    <section class="hero is-warning">
        <div class="hero-body" >
            <p class="title">
                Home
            </p>
            <p class="subtitle">
                About us
            </p>
        </div>
    </section>

    <div class="content" >
        <h1>Welcome to the website of Bogomil</h1>
        <p>This is the example website of me for the fourth quartile. There are a lot of improvements that can be done in future but it is created only for the assignments during the quartile.</p>
        <h1>What can you find here?</h1>
        <p>Here is the place where you can find funny youtube videos:</p>
        <iframe class="video-border" width="560" height="315" src="https://www.youtube.com/embed/VB4CCHHYOqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="welcomePageText">and funny pictures:</p>
        <img class = "welcomeImage"  src="{{asset("images/elena-cordery-RLlcbkemwnw-unsplash.jpg")}}" alt="Pineapple with sunglasses" width="200"
             height="80">
    </div>

@endsection
