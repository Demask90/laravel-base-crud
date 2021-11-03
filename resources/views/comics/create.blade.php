@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="was-validated" action="{{ route('comics.store') }}" method="post">

            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="title" class="form-label">Enter a Title</label>
                <input type="text" name="title" class="form-control is-valid" id="title" placeholder="Required a Title" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Enter a Series</label>
                <input type="text" name="series" class="form-control is-valid" id="series" placeholder="Required a Series" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Enter a Type</label>
                <input type="text" name="type" class="form-control is-valid" id="type" placeholder="Required a Type" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Enter a Date</label>
                <input type="text" name="sale_date" class="form-control is-valid" id="sale_date" placeholder="Required DD/MM/YYYY" required>
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Enter a Url image</label>
                <input type="text" name="thumb" class="form-control is-valid" id="thumb" placeholder="Required a Url" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control is-invalid" name="description" id="description" placeholder="Required a Description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Enter a price</label>
                <input type="number" class="form-control is-valid" name="price" id="price" placeholder="Required a price" required>
            </div>

            <button class="btn btn-primary mb-3" type="submit">Submit comic</button>
        
        </form>
    </div>
@endsection