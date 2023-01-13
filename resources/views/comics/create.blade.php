@extends('layouts.main')

@section('content')
    <main>
        <div class="container py-4 w-50">
            <h1 class="text-center my-2">New Comic Creation</h1>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action={{ route('comic.store') }} method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title *</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="title" placeholder="Comic Title" value="{{ old('title') }}">
                    @error('title')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Comic Image Url"
                        value="{{ old('thumb') }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price *</label>
                    <div class="d-flex align-items-start">
                        <span class="input-group-text" id="basic-addon1">$</span>
                        <div class="w-100">
                            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                                name="price" id="price" placeholder="Comic Price" value="{{ old('price') }}">
                            @error('price')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Sale Date" class="form-label">Sale Date *</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="sale_date"
                        id="sale_date" placeholder="Comic Sale Date" value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series *</label>
                    <input type="text" class="form-control  @error('series') is-invalid @enderror" name="series"
                        id="series" placeholder="Comic Series" value="{{ old('series') }}">
                    @error('series')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type *</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                        id="type" placeholder="Comic Type" value="{{ old('type') }}">
                    @error('type')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Comic Description"rows="3">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('home') }}" class="btn btn-success">Go To Comics List</a>
            </form>
        </div>

    </main>
@endsection
