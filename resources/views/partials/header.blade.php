@php
    $menu = [
        [
            'title' => 'Home',
            'link' => 'home',
        ],
        [
            'title' => 'Comics',
            'link' => 'comics',
        ],
        [
            'title' => 'Credits',
            'link' => 'credits',
        ],
    ];
@endphp

<div class="bg-light">

    <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-between mx-5">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </a>

        <div class="">
            <ul class="navbar-nav mr-auto ">
                @foreach ($menu as $item)
                    <li class="nav-item active">
                        <a class="nav-link {{ Route::currentRouteName() === $item['link'] ? 'active' : '' }}" href="{{ route($item['link']) }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach


            </ul>
        </div>
    </nav>
</div>

<div class="jumbotron-container">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
</div>
