@extends('layout.main')

@section('content')
    <h1>Comics</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Series</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}</td>
                </tr>
            @empty
                <h2>Nessun prodotto trovato</h2>
            @endforelse
        </tbody>
    @endsection

    <style></style>
