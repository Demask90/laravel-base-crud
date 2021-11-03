@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="was-validated" action="{{ route('comics.update', $comic['id']) }}" method="post">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value={{ $comic['title'] }} type="text" name="title" class="form-control is-valid" id="title" placeholder="Required a Title" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input value={{ $comic['series'] }} type="text" name="series" class="form-control is-valid" id="series" placeholder="Required a Series" required>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                {{-- <input value={{ $comic['type'] }} type="text" name="type" class="form-control is-valid" id="type" placeholder="Required a Type" required> --}}
                <select class="form-control" name="type" id="type" required>
                    <option value=""><--Selected--></option>
                    <option value="Comic Book" {{$comic['type'] == "comic book" ? 'selected' : NULL}}>comic book</option>
                    <option value="graphic novel" {{$comic['type'] == "graphic novel" ? 'selected' : NULL}}>graphic novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Date</label>
                <input value={{ $comic['sale_date'] }} type="text" name="sale_date" class="form-control is-valid" id="sale_date" placeholder="Required DD/MM/YYYY" required>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Url image</label>
                <input value={{ $comic['thumb'] }} type="text" name="thumb" class="form-control is-valid" id="thumb" placeholder="Required a Url" required>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea value={{ $comic['description'] }} class="form-control is-invalid" name="description" id="description" placeholder="Required a Description" required>{{ $comic['description'] }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value={{ $comic['price'] }} type="number" class="form-control is-valid" name="price" id="price" placeholder="Required a price" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary mb-3" type="submit">Submit comic</button>
        
        </form>
    </div>
@endsection