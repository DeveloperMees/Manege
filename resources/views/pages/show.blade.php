
@extends('master')

@section('content')
    <div id="show">
        @include('partials.hero')
        <section id="content" class="last-item">
            <div class="container-fluid">
                <div class="content-blok">
                    <h2>{{ $page->title }}</h2>
                    <p>{!! $page->description !!}</p>
                </div>
            </div>
        </section>
    </div>
@stop
