@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Titel',
    'maxlength' => 100
    ])

    @formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Inhoud',
    'toolbarOptions' => [ [ 'header' => [1, 2, 3, false] ], 'list-ordered', 'list-unordered' ],
    'placeholder' => 'Case study text',
    'editSource' => false,
    ])

    @formField('medias', [
    'name' => 'image',
    'label' => 'Slideshow',
    'max' => 30,
    'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop
