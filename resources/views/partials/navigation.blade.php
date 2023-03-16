@if($item->parent_id == null)
    <li>
        @if($item->title == 'Contact')
            <a href="{{ route('contact') }}">{{ $item->title }}</a>
        @elseif($item->title == 'Faciliteiten')
            <a href="{{ route('facilities') }}">{{ $item->title }}</a>
        @elseif($item->title == 'Nieuws')
            <a href="{{ route('news') }}">{{ $item->title }}</a>
        @else
            <a href="{{ route('show', ['name' => $item->title]) }}">{{ $item->title }}</a>
        @endif

    </li>
@endif
