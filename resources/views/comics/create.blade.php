@extends('layout.main')
@section('content')
    <div class="container">
        <h1>Crea un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group
@endsection
