@extends('master')

@section('content')
    <div id="show" class="facilities">
        <div id="hero">
            <figure>

                <img src="/img/horse-fog-meadow-1.jpg" alt="background">
                <div class="overlay"></div>
                <figcaption>
                    <div class="container-fluid">
                        <h1>Alle faciliteiten</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        <section id="restoration">

            <div class="container-fluid">
                <div class="row">
                    @foreach($facilities as $facility)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <a href="{{ route('facility.show', ['name' => $facility->getSlug()]) }}"
                               class="object">
                                <img
                                    src="/storage/uploads/{{ $facility->medias->first() ? $facility->medias->first()->uuid : '' }}"
                                    alt="{{ $facility->medias->first() ? $facility->medias->first()->alt_text : ''}}">
                                <div class="details">
                                    <i style="color: #FFFFFF" class="icon-strategy"></i>
                                    <div class="text">
                                        <p class="mb-3">{{ $facility->title }}</p>
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
