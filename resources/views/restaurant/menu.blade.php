@extends('main.layout')

@section('title', 'menu')

@section('class_name', 'menu-body')

@section('content')

<!-- section-menu-->
<main class="main-menu">
    <section class="section section-menu">
        <div class="menu-detail">
            <h1>Menu</h1>
            <div class="menu-block">
                @foreach($menus as $menu)
                    <img height=120px src="{{$menu->path}}">
                    <h3>{{$menu->name}}</h3>
                     @foreach($menu->menus as $dish)
                        <p>{{$dish->name}} ..... {{$dish->price}}</p>
                    @endforeach
                @endforeach
            <div>
        </div>
    </section>
</main>
<!-- end section-menu -->

@endsection