@extends('layouts.app')

@section('main_content')

    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic->title }}</h2>
            <div>Tipo: {{ $comic->type }}</div>
        </div>
    @endforeach
@endsection