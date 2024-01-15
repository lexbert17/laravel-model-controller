@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-5">Movies</h1>
    <div class="container d-flex my_container d-flex">
        <div class="row row-cols-4 my_row">
            @foreach ($movies as $movie)
              
            <div class="col my_col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $movie->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie->title }}</h5>
                      <p>{{$movie->date}}</p>
                      <p>{{$movie->vote}}</p>
                
                    </div>
                  </div>
            </div>

            @endforeach
            
        </div>
    </div>
@endsection