@extends('main.layout')

@section('title', 'gallery')

@section('class_name', 'menu-body')

@section('content')

<!-- section-gallery-->
<main class="main-menu main-gallery">
    <section class="section section-menu">
        <div class="menu-detail">
            <h1>Gallery</h1>
            
            <img id="expandedImg" src="https://preview.ibb.co/gxVppG/img1.jpg" style="width:100%">
            <div id="imgtext"></div>

            <!-- The six columns -->
            @php ($i = 1)
            @foreach($gallery as $image) 
                @if($i == 7) 
                    @php ($i = 1) 
                @endif                         
                @if($i==1)                    
                    <div class="row"> 
                @endif    
                <div class="column">
                    <img src="{{$image->image_link}}" alt="Nature" style="width:100%" onclick="myFunction(this);">
                </div> 
                @if($i == 6)                   
                    </div>
                @endif
                @php ($i++)
            @endforeach            
        </div>
    </section>
</main>
<!-- end section-gallery -->

@endsection

@section('scripts')
    <script>
        var expandImg = document.getElementById("expandedImg");        
        var elements = document.getElementsByClassName('column');
        var requiredElement = elements[0].firstElementChild; 

        // window.onload = function() {
        //   var imgs = requiredElement;  
        //   expandImg.src = imgs.src;          
        // }

        function myFunction(imgs) {  
          expandImg.src = imgs.src;
          imgText.innerHTML = imgs.alt;
          expandImg.parentElement.style.display = "block";
        }

    </script>

@endsection