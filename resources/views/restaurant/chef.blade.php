@extends('main.layout')

@section('title', 'gallery')

@section('class_name', 'menu-body')

@section('content')
	<main class="main-chef">
      <section class="section section-chef">
        <div class="chef-detail">          
          <h1>{{$chef[0]->name}}</h1> 
          <div class="chef-photo">               
            <img src="img/chef-coffee-cook-887827.jpg"/>
          </div> 
          <p>{{$chef[0]->description}}</p>               
        </div>
      </section>
    </main>
@endsection