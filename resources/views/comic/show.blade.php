@extends('layouts/app')
@section('content')
<div class="container py-5"></div>


<div class="container py-5 ">
    <div class="container text-center">
        <h2 class="card-title p-3" >Title: {{$comic->title}}</h2>
       <img src="{{$comic->thumb}}" alt="">

       <p class="card-text">ID: {{$comic->id}}</p>
       <p class="card-tex d-flex flex-column ">
        <span class>Description : {{$comic->description}}</span>
        <span>Series: {{$comic->series}}</span>
        <span>Sale Date: {{$comic->sale_date}}</span>
        <span>Type: {{$comic->type}}</span>
        <span>Artists.: {{$comic->artists}}</span>
        <span>Writers: {{$comic->writers}}</span>
        <span>Price: {{$comic->price}}</span>
    </p>


    </div>
    
    
 </div>
            
        


    
@endsection