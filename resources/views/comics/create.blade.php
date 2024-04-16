@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Add comic</h1>


    <form action="{{route('comic.store')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="Title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" >
          @error('title')
          <div class="invalid-input text-danger">
            {{$message}}


          </div>
           @enderror
        </div>

        <div class="mb-3">
            <label for="Description" class="form-label">description</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                {{old('description')}}
            </textarea>
            @error('title')
            <div class="invalid-input text-danger">
              {{$message}}
  
  
            </div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
          <div class="invalid-input text-danger">
            {{$message}}


          </div>
           @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" >
            @error('price')
            <div class="invalid-input text-danger">
              {{$message}}
  
  
            </div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}">
            @error('series')
          <div class="invalid-input text-danger">
            {{$message}}


          </div>
           @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}" >
            @error('sale_date')
            <div class="invalid-input text-danger">
              {{$message}}
  
  
            </div>
             @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"  value="{{old('type')}}" >
            @error('type')
          <div class="invalid-input text-danger">
            {{$message}}


          </div>
           @enderror
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists"  value="{{old('artists')}}">
            @error('artists')
            <div class="invalid-input text-danger">
              {{$message}}
  
  
            </div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{old('writers')}}">
            @error('writers')
          <div class="invalid-input text-danger">
            {{$message}}


          </div>
           @enderror
        </div>

        

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

@endsection