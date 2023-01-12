@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <form action={{route('comic.store')}} method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Comic Title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Comic Image Url">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="Comic Price">
            </div>
            <div class="mb-3">
                <label for="Sale Date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Comic Sale Date">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Comic Sale Date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Comic Type">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</main>
@endsection
