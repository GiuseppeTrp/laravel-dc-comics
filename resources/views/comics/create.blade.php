@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Add comic</h1>


    <form action="{{route('comic.store')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="Title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="Description" class="form-label">description</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" required>

        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control" id="artists" name="artists" required>
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control" id="writers" name="writers" required>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection