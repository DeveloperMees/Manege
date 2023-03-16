@extends('mails.master')

@section('content')
    <h2>Het inschrijf formulier is ingevuld</h2>
    <p>
        <strong>Naam:</strong><br/>
        {{ $request->name }}
    </p>
    <p>
        <strong>Straat</strong><br/>
        {{ $request->street }}
    </p>
    <p>
        <strong>Postcode:</strong><br/>
        {{ $request->zipcode }}
    </p>
    <p>
        <strong>Plaats:</strong><br/>
        {{ $request->place }}
    </p>
    <p>
        <strong>Telefoonnummer:</strong><br/>
        {{ $request->phone }}
    </p>
    <p>
        <strong>E-mailadres:</strong><br/>
        {{ $request->email }}
    </p>

{{--    <strong>Paard(en)</strong>--}}
{{--    @foreach($request->horses as $horses)--}}
{{--        <p>--}}
{{--            <strong>Naam:</strong>--}}
{{--            {{ $horses[0] }}--}}
{{--        </p>--}}

{{--        <p>--}}
{{--            <strong>Geboren:</strong>--}}
{{--            {{ $horses[1] }}--}}
{{--        </p>--}}

{{--        <p>--}}
{{--            <strong>Geslacht:</strong>--}}
{{--            {{ $horses[2] }}--}}
{{--        </p>--}}
{{--    @endforeach--}}

@stop
