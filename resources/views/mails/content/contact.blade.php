@extends('mails.master')

@section('content')
    <h2>Het contactformulier is ingevuld</h2>
    <p>
        <strong>Naam:</strong><br />
        {{ $request->name }}
    </p>
    <p>
        <strong>E-mailadres:</strong><br />
        {{ $request->email }}
    </p>
    @if ($request->phone)
        <p>
            <strong>Telefoonnummer:</strong><br />
            {{ $request->phone }}
        </p>
    @endif
    <p>
        <strong>Bericht:</strong><br />
        {!! nl2br($request->msg) !!}
    </p>
@stop
