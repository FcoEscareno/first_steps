@extends('...layout')

@section('content')
        <h2>Notes</h2>
        <p>
        <a href="{{ url ('notes/create') }}">Add a note</a>
        </p>
        <ul>
            @foreach($notes as $note)
                <li>
                    @if($note -> long)
                        {{$note -> summary}}...
                    @else
                        {{ $note -> note }}
                    @endif
                </li>
            @endforeach
        </ul>

@endsection