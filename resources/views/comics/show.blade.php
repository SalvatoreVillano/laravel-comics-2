@extends('layouts.app')
@section('content')
    <section class="container bg-white mt-4">
        <h1 class="text-center">{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </section>
@endsection
