@extends('layouts.main')

@section('content')
    <main>
        <div class="container py-5">
            <table class="table table-striped table-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic )
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->price}}</td>
                            <td>
                                <a class="btn btn-primary" href=""><i class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-warning" href=""><i class="fa-solid fa-pen"></i></i></a>
                                <a class="btn btn-danger" href=""><i class="fa-solid fa-trash-can"></i></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </main>
@endsection
