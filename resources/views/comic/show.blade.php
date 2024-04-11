@extends('layouts/app')


@section('content')


<div class="container py-5 text-center ">
    <div class="card p-2">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="Comic Image">
        <div class="card-body fw-bold">
          <h5 class="card-title text-decoration-underline">{{$comic->title}}</h5>
          <p class="card-text text-warning">ID: #{{$comic->id}}</p>
          <p class="card-text">Series: <small>{{$comic->series}}</small></p>
          <p class="card-text">Type: <small>{{$comic->type}}</small></p>
          <p class="card-text">Price: <small class="text-success"> {{$comic->price}}</small></p>



          <div class="details hidden  text-white px-5  py-5 border rounded text-start text-wrap ">
            <p class="card-text"> <span class="text-uppercase text-warning">Description:</span> {{$comic->description}}</p>
            <p class="card-text"><span class="text-uppercase text-warning">Type:</span> {{$comic->type}}</p>
            <p class="card-text"><span class="text-uppercase text-warning">Artists:</span> {{$comic->artists}}</p>
            <p class="card-text"><span class="text-uppercase text-warning">Writers:</span> {{$comic->writers}}</p>
            <p class="card-text"><span class="text-uppercase text-warning">Sale Date:</span> {{$comic->sale_date}}</p>

          </div>
          <a href="#" class="btn btn-outline-success text-uppercase fw-bold text-warning">Buy</a>
        </div>
    </div>

   
      
      
    
    
 </div>
            
        


    
@endsection
            
        


    
