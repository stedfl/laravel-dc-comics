@extends('layouts.main')

@section('content')
    <main>
        <div class="container py-5">
            <div class="title d-flex justify-content-between align-items-baseline mb-4">
                <h1>Comics List</h1>
                <a class="btn btn-info" href="{{ route('comic.create') }}"><i class="fa-solid fa-plus"></i> New Comic</a>
            </div>
            <span class="fst-italic">Results: {{ $comics->total() }}</span>
            <table class="table table-striped table-primary mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>$ {{ $comic->price }}</td>
                            <td>
                                <a class="btn btn-primary" title="show" href="{{ route('comic.show', $comic) }}"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-warning" title="edit" href="{{route('comic.edit', $comic)}}"><i
                                        class="fa-solid fa-pen"></i></i></a>
                                <a class="btn btn-danger" title="delete" href=""><i
                                        class="fa-solid fa-trash-can"></i></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $comics->links() }}
        </div>
    </main>
@endsection
