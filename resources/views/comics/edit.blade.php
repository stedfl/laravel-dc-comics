@extends('layouts.main')

@section('content')
    <main>
        <div class="container py-4 w-50">
            <form action={{ route('comic.update', $comic) }} method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" value="{{ $comic->title }}" name="title" id="title"
                        placeholder="Comic Title">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" value="{{ $comic->thumb }}" name="thumb" id="thumb"
                        placeholder="Comic Image Url">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div class="d-flex">
                        <span class="input-group-text" id="basic-addon1">$</span>
                        <input type="number" step="0.01" class="form-control" value="{{ $comic->price }}" name="price"
                            id="price" placeholder="Comic Price">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Sale Date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" value="{{ $comic->sale_date }}" name="sale_date"
                        id="sale_date" placeholder="Comic Sale Date">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" value="{{ $comic->series }}" name="series" id="series"
                        placeholder="Comic Series">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" value="{{ $comic->type }}"" name="type" id="type"
                        placeholder="Comic Type">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Comic Description"rows="3">{{ $comic->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </main>
@endsection
