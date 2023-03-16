@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Titel',
        'maxlength' => 100
    ])

    @formField('medias', [
    'name' => 'image',
    'label' => 'Slideshow',
    'max' => 1,
    'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop
