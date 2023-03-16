@extends('master')

@section('content')
    <div id="show" class="facilities">
        <div id="hero">
            <figure>

                <img src="/img/horse-fog-meadow-1.jpg" alt="background">
                <div class="overlay"></div>
                <figcaption>
                    <div class="container-fluid">
                        <h1>Nieuws</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        <section id="restoration">

            <div class="container-fluid">
                <div class="row">
                    @foreach($news as $article)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <a href="{{ route('news.show', ['name' => $article->getSlug()]) }}"
                               class="object">
                                <img
                                    src="/storage/uploads/{{ $article->medias->first() ? $article->medias->first()->uuid : '' }}"
                                    alt="{{ $article->medias->first() ? $article->medias->first()->alt_text : ''}}">
                                <div class="details">
                                    <div class="text">
                                        <p class="mb-3">{{ $article->title }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach()
                </div>
            </div>
        </section>
    </div>
@stop
