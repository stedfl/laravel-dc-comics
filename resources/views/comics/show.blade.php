@extends('layouts.main')

@section('content')
    <div class="show container d-flex justify-content-center align-items-center flex-column">
        <div class="dc-card d-flex align-items-center">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body p-4">
                <h5 class="card-title fw-bold text-center text-uppercase text-primary">{{ $comic->title }}</h5>
                <h6 class="mt-3 fw-semibold">Description:</h6>
                <p class="card-text">{!! $comic->description !!}</p>
                <ul class="ps-0">
                    <li class="text-capitalize"><span class="fw-semibold">Series:</span> {{ $comic->series }}</li>
                    <li><span class="fw-semibold">Price: </span>${{ $comic->price }}</li>
                    <li><span class="fw-semibold">Date of Sale:</span> {{ $comic->sale_date }}</li>
                    <li class="text-capitalize"><span class="fw-semibold">Type:</span> {{ $comic->type }}</li>
                </ul>
            </div>
        </div>
        <div class="actions my-4">
            <a href="{{ route('home') }}" class="btn btn-primary">Go To Comics List</a>
            <a class="btn btn-warning" title="edit" href="{{ route('comic.edit', $comic) }}"><i
                class="fa-solid fa-pen"></i></i></a>
             @include('partials.delete-form', $comic)
        </div>

    </div>
@endsection
