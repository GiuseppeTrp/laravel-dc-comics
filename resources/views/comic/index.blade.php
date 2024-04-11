@extends('layouts/app')
@section('content')
<div class="container py-5">
    
    <div class="container py-5">

        <h1 class="text-danger text-center  p-2"> <span class="border border-danger bg-black p-2 rounded"> Comics List</span></h1>

        {{-- @dump($comics) --}}

        <table class="table mb-5">
            <thead>
              <tr>
                <th scope="col"> <h3>Title</h3></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)

                <tr>
                    <td class="text-uppercase fw-bold text-black   "><p class="custom-shadow p-1 rounded">{{$comic->title}}</p></td>
                    <td><a href="{{route('comic.show', $comic->id)}}" class="text-success">view</a></td>
                </tr>
                    
                @endforeach


            </tbody>
          </table>



    </div>
</div>


    
@endsection
