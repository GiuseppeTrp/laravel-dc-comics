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
           
          <div class="d-flex justify-content-around py-3">
            <a href="{{route('comic.index', $comic->id)}}" class="btn btn-outline-light text-uppercase fw-bold text-black">Back</a>
            <a href="#" class="btn btn-outline-success text-uppercase fw-bold text-warning">Buy</a>
            <a href="{{route('comic.edit', $comic->id)}}" class="btn btn-outline-warning text-uppercase fw-bold text-success">Edit</a>
            <button type="button" class="btn btn-outline-danger text-warning text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Delete
           </button>
  
          </div>
         
    
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
              <div class="modal-content">

                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Delete comic</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  Are you sure? Deleting "{{$comic->title}}"
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{route('comic.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        
                       
                        <button class="btn btn-danger">Elimina</button>
                    </form>

                </div>

              </div>
            </div>


                </div>




              </div>
          </div>

   
      
      
    
    
 </div>
 
            
        


    
@endsection
            
        


    
