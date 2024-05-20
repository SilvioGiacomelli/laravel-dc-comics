@extends('layout.main')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h1>Nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="title" class="form-control" id="title" placeholder="insert Title"
                    value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" value="{{ old('description') }}"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Insert Img"
                    value="{{ old('thumb') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Insert price" value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input name="series" type="text" class="form-control" id="series" placeholder="Insert series"
                    value="{{ old('series') }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input name="sale_date" type="date" class="form-control" id="sale_date" placeholder="Choose a Date"
                    value="{{ old('sale_date') }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input name="type" type="text" class="form-control" id="type" placeholder="Insert a type"
                    value="{{ old('type') }}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input name="artists" type="text" class="form-control" id="artists" placeholder="Insert Artists"
                    value="{{ old('artists') }}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input name="writers" type="text" class="form-control" id="writers" placeholder="Insert Writers"
                    value="{{ old('writers') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit your comic</button>
            <button type="reset" class="btn btn-warning">Reset</button>
            @method('POST')
        </form>
    </div>
@endsection
