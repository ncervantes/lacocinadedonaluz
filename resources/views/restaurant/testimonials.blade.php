@extends('main.layout')

@section('title', 'Testimonials')

@section('class_name', 'menu-body')

@section('content')

<main class="main-menu">
  <section class="section section-menu">
    <div class="menu-detail testimonies-detail">          
      <h1>Testimonies</h1>
      @foreach($testimonials as $testimonial)
        <h4>{{$testimonial->title}}</h4>                     
        <p class="text-testimonies">{{$testimonial->body}} </p>
        <p class="text-right">-{{$testimonial->name}}, {{$testimonial->location}}-</p> 
      @endforeach              
    </div>
  </section>
</main>

@endsection