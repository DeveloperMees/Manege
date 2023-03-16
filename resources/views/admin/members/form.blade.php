@extends('twill::layouts.form')

@section('contentFields')
    <h1 style="margin: 20px 0 -5px 0; font-weight: bold">Persoonsgegevens</h1>
    @formField('input', [
    'name' => 'name',
    'label' => 'Naam',
    'maxlength' => 250
    ])

    @formField('input', [
    'name' => 'street',
    'label' => 'Straat',
    'maxlength' => 250
    ])

{{--    @formField('checkbox', [--}}
{{--    'name' => 'queue',--}}
{{--    'label' => 'Wachtrij',--}}
{{--    'default' => true,--}}
{{--    'border' => true--}}
{{--    ])--}}

    @formField('input', [
    'name' => 'zipcode',
    'label' => 'Postcode',
    'maxlength' => 250
    ])

    @formField('input', [
    'name' => 'place',
    'label' => 'Plaats',
    'maxlength' => 250
    ])

    @formField('input', [
    'name' => 'phone',
    'label' => 'Telefoon',
    'maxlength' => 250
    ])

    @formField('input', [
    'name' => 'email',
    'label' => 'Email',
    'maxlength' => 250
    ])
@stop

@section('fieldsets')
    @formField('repeater', ['type' => 'horse' , 'reorder' => true])
    @formField('repeater', ['type' => 'vet' , 'reorder' => false])
    @formField('repeater', ['type' => 'farrier' , 'reorder' => false])
@endsection


