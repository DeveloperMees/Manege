@extends('mails.master')

@section('content')
<h2>We hebben je bericht ontvangen!</h2>
<p>Beste {{ $request->name }},</p>
<p>We hebben je bericht ontvangen! Wij zullen zo spoedig mogelijk contact met je opnemen.</p>
<p>
    Met vriendelijke groet,<br />
    Stalnieuwland
</p>
@stop
