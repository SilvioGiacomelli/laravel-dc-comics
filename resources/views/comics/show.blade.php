@extends('layout.main')
@section('content')
    <div class="card">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
        <img src="{{ $comic->thumb }}" alt="Comic Thumbnail">
        <p>{{ $comic->slug }}</p>
        <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    </div>
@endsection
<style>
    .card {
        width: 30%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid black;
        border-radius: 5px;
    }

    img {
        width: 100%;
    }

    a {
        display: block;
        margin-top: 20px;
        text-align: center;
    }

    a:hover {
        text-decoration: none;
    }

    a:visited {
        color: black;
    }

    a:link {
        color: black;
    }

    a:active {
        color: black;
    }

    a:focus {
        color: black;
    }

    a:active {
        color: black;
    }

    a:visited:hover {
        color: black;
    }

    a:link:hover {
        color: black;
    }
</style>
