@extends('layouts.main')

@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="dc-card d-flex">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body p-4">
                <h5 class="card-title fw-bold text-center">{{$comic->title}}</h5>
                <h6 class="mt-3 fw-semibold">Description:</h6>
                <p class="card-text">{{$comic->description}}</p>
                <ul>
                    <li><span class="fw-semibold">Series:</span>  {{$comic->series}}</li>
                    <li><span class="fw-semibold">Price:</span> {{$comic->price}}</li>
                    <li><span class="fw-semibold">Date of Sale:</span> {{$comic->sale_date}}</li>
                    <li><span class="fw-semibold">Type:</span> {{$comic->type}}</li>
                </ul>
            </div>
        </div>
          <a href="{{route('home')}}" class="btn btn-primary m-4">Go To Comics List</a>
    </div>
@endsection
