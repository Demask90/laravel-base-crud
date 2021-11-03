@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>LIST COMICS </h1>
        <a href="{{ route('comics.create') }}" class="btn btn-success my-2 ">create a new comic</a> 
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
        
                <div class="card m-3 bg-dark" style="width: 14rem; color:white">
                    <img src={{ $comic['thumb'] }} class="card-img-top" alt={{ $comic['title'] }}>
                    <div class="card-body">
                        <h3>{{ $comic['title'] }}</h3>
                        <div>{{ $comic['series'] }}</div>
                        <div class="d-flex justify-content-center align-items-end mt-3">
                            <span class="m-1"><a href="{{ route('comics.show',$comic['id']) }}" class="btn btn-info">Details</a></span>
                            <span class="m-1"><a href="{{ route('comics.edit',$comic['id']) }}"" class="btn btn-warning">Modify</a></span>
                            <span class="m-1">
                                <form method="post" action="{{ route('comics.destroy',$comic['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection