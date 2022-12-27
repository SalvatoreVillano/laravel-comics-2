@extends('layouts.app')
@section('content')
    <section class="container mt-4">
        <h1 class="text-center">Modifica {{ $comic->title }}</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description"> {{ old('description', $comic->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>

    </section>
@endsection
