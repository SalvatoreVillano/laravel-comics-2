<?php
$links = config('bluezone.linksImage');
?>

@extends('layouts.app')
@section('content')
    <div class="container-fluid comics">
        <span>Current Series</span>
        <div class="cardList">
            @foreach ($comics as $comic)
                <div class="cards">
                    <div class="mycard">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <p class="text-white text">{{ $comic['title'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
    <div class="bluezone container-fluid justify-content-around pt-4">
        <ul>
            @foreach ($links as $item)
                <li>
                    <div class="list-item">
                        <img src="{{ Vite::asset('resources/img/' . $item['img']) }}">
                        <p class="ms-4">
                            {{ $item['text'] }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="subFooter container-fluid justify-content-between">
        <a href=#>Sign-Up Now!</a>
        <div>
            <h3>Follow us</h3>
            <ul>
                <li v-for="(item, index) in list">
                    <img :src="item.url" class="gap-2">
                </li>
            </ul>
        </div>
    </div>
@endsection
