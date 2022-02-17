@extends('layouts.app')

@section('main_content')
    @foreach ($comics as $comic)
    <div>
        <h2>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a>
        </h2>
        <div>Tipo: {{ $comic->type }}</div>
    </div>
    @endforeach
@endsection