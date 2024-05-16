@extends('layout.main')
@section('content')
    <div class="container">

        <h1>{{ $comic->title }}</h1>

        <div class="row">
            <div class="col left">
                <img src="{{ $comic->thumb }}" alt="Comic Thumbnail">
            </div>
            <div class="col right">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->price }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->sale_date }}</p>
                <p>{{ $comic->type }}</p>
                <p>{{ $comic->slug }}</p>
                <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
            </div>
        </div>
    </div>
@endsection
<style>
    img {
        width: 75%;
    }

    h2 {
        color: red;
    }

    p {
        color: blue;
    }

    a {
        color: green;
    }

    a:hover {
        color: red;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }

    .left {
        width: 50%;
    }

    .right {
        width: 50%;
    }

    .container {
        margin-top: 50px;
    }

    .container h1 {
        color: red;
    }

    .container p {
        color: blue;
    }

    .container a {
        color: green;
    }

    .container a:hover {
        color: red;
    }

    .container img {
        width: 75%;
    }

    .container .row {
        display: flex;
        justify-content: space-between;
    }
</style>
