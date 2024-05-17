@extends('layout.main')
@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="title" class="form-control" id="title" placeholder="insert Title"
                    value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" value="{{ $comic->description }}"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Insert Img"
                    value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Insert price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input name="series" type="text" class="form-control" id="series" placeholder="Insert series"
                    value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input name="sale_date" type="date" class="form-control" id="sale_date" placeholder="Choose a Date"
                    value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input name="type" type="text" class="form-control" id="type" placeholder="Insert a type"
                    value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input name="artists" type="text" class="form-control" id="artists" placeholder="Insert Artists"
                    value="{{ $comic->artists }}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input name="writers" type="text" class="form-control" id="writers" placeholder="Insert Writers"
                    value="{{ $comic->writers }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit your comic</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
@endsection
