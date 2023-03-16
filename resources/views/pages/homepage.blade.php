@extends('master')

@section('content')
    <section id="homepage" class="nieuwland">
        <section id="hero">
            <div class="swiper" style="z-index: unset !important;">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($headers as $header)
                        @if($header->medias->first() != null)
                            <div class="swiper-slide">
                                <img src="/storage/uploads/{{ $header->medias->first()->uuid }}" alt="Header.jpg">
                            </div>
                        @endif
                    @endforeach
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="container-fluid">
                <div class="text-content">
                    <h1>Stal Nieuwland</h1>
                    <a href="{{ route('contact') }}" class="btn">Contact</a>
                </div>
            </div>

            <div class="overlay"></div>
            <a href="#content" class="scroll smooth-scroll">
                        <span class="button-scroll">
                        <i class="icon-scroll"></i>
                        </span>
                <span class="dotted-line">

                        </span>
            </a>
        </section>

        <section id="content">
            <div class="container-fluid">
                <div class="text-content">
                    <h2 class="mb-3">Welkom bij Stal Nieuwland</h2>
                    <div class="line-main"></div>
                    {!! $page->description !!}

                </div>

                <div class="image-wrapper">
                    <img src="/img/content-img.jpg" alt="content-img">
                </div>
            </div>
        </section>

        @if(count($facilities))
            <section id="restoration" class="light_grey-wrapper">
                <div class="container-fluid">

                    <div class="top">
                        <div class="arrow prev">
                            <i class="icon icon-chevron-left"></i>
                        </div>
                        <h2>Faciliteiten</h2>
                        <div class="arrow next">
                            <i class="icon icon-chevron-right"></i>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($facilities as $facility)
                                <div class="swiper-slide">
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
                    <div class="btn-wrapper">
                        <a href="{{ route('facilities') }}" class="btn">BEKIJK ALLE FACILITEITEN</a>
                    </div>
                </div>
            </section>
        @endif
    </section>

@stop
