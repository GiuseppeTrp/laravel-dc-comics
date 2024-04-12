@extends('layouts/app')
@section('content')
<div class="container py-5">
    
    <div class="container py-5">

        <h1 class="text-danger text-center  p-2"> <span class="border  bg-black p-2 rounded"> Comics List</span></h1>

        {{-- @dump($comics) --}}

        <table class="table mb-5">
            <thead>
              <tr>
                <th scope="col text-uppercase "> <h2 class="text-success py-4">Title</h2></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)

                <tr>
                    <td class="text-uppercase fw-bold text-light  "><p class="custom-shadow p-1 rounded"><a class=" text-light text-decoration-none" href="{{route('comic.show', $comic->id)}}">{{$comic->title}}</a></p></td>
                    <td><a href="{{route('comic.show', $comic->id)}}" class="text-success">view</a></td>
                </tr>
                    
                @endforeach


            </tbody>
          </table>

          <a href="{{route('comic.create', $comic->id)}}" class="btn btn-outline-info"> Add Comics</a>



    </div>
</div>


    
@endsection
