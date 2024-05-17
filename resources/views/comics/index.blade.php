@extends('layout.main')

@section('content')
    <h1>Comics</h1>
    @if (session('delete_message'))
        <div class="alert alert-success" role="alert">
            {{ session('delete_message') }}
        </div>
    @endif
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
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pen"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST"
                            onsubmit="return confirm('Vuoi eliminare? {{ $comic->title }}?')" class="d-inline-block">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-outline-light "><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nessun prodotto trovato</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@section('styles')
    <style>
        .fa-eye,
        .fa-pen,
        .fa-trash {
            color: white;
        }

        .btn-success {
            background-color: green;
        }

        .btn-warning {
            background-color: orange;
        }

        .btn-danger {
            background-color: red;
        }

        .table {
            width: 100%;
        }

        .table tr th {
            background-color: black;
            color: white;
        }

        .table tr td {
            background-color: lightgrey;
        }

        .table tr td a {
            color: white;
        }

        .table tr td a i {
            font-size: 20px;
        }
    </style>
@endsection
