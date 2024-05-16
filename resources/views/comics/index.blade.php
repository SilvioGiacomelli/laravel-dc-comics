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
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success "><i
                                class="fa-solid fa-eye"></i></a>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @empty
                <h2>Nessun prodotto trovato</h2>
            @endforelse
        </tbody>
    @endsection

    <style>
        .fa-eye {
            color: white;
        }

        .fa-pen {
            color: white;
        }

        .fa-trash {
            color: white;
        }
    </style>
