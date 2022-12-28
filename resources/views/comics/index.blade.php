@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center py-5">Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                    <div class="card">

                        <div class="card-body text-center">
                            <h5 class="card-title py-3 text-capitalize">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn">Scopri!</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn">Modifica!</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
