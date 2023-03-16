@extends('twill::layouts.free')

@section('customPageContent')
    @foreach($members as $member)
        <div class="row" style="display: flex; max-width: 400px; justify-content: space-between">
            <p class="" style="user-select: none;">{{ $member->name }}</p>
            <p style="margin-bottom: 8px; width: 500px; display: flex; justify-content: flex-end">{{ $member->email }}</p>
        </div>
    @endforeach
@stop
