@extends('tpl-page')

@include('welcome.header')

@section('content')
    <div class="welcome-container">
        <div class="welcome-center-container">
            <div class="outer-circle">
                <div class="inner-circle">
                    <img class="outer-circle" src="{{asset('image/Background.png')}}" style="width: 180px;height: 180px" alt="">
                </div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="welcome-profile-container">
                @php
                    $userSlogin = config('user_slogin','Coding For Fun，程序员');
                @endphp
                <p class="user-profile-slogin">{{$userSlogin}}</p>
            </div>

            @isset($homeMenu)
                <div class="welcome-nav-menu-container">
                    @foreach($homeMenu as $menu)
                        <a class="welcome-nav-menu" href="{{url("/".$menu->path)}}">{{$menu->name}}</a>
                    @endforeach
                </div>
            @endisset
        </div>

    </div>

@endsection
