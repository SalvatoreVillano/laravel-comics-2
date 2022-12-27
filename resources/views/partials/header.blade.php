<?php
$navbar = config('navbar');
?>
<header>
    <div class="container justify-content-between">
        <a href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics logo">
        </a>
        <nav>
            <ul class="myNavbar">
                @foreach ($navbar as $item)
                    <li class="{{ Route::currentRouteName() == $item['text'] ? 'active' : '' }}">
                        <a class="myLinks" :href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                    </li>
                @endforeach

            </ul>
        </nav>
    </div>
</header>
<section class="jumbo">

</section>
