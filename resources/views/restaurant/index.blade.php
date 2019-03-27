@extends('../main.layout')

@section('title', 'La Cocina de Doña Luz')

@section('content')

    <section class="section section-carousel">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/pexels-photo-262978.jpeg" width="100%" background="#777" color="#777" alt=" " />
            <div class="container">
              <div class="carousel-caption">
                <h1>Peruvian Cuisine.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/menu-restaurant-vintage-table.jpg" width="100%" background="#777" color="#777" alt=" " />
            <div class="container">
              <div class="carousel-caption">
                <h1>The Best Menu.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/pexels-photo-776538.jpeg" width="100%" background="#777" color="#777" alt=" " />
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>               
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section> 
    <!-- End Section Carousel -->
     
    <!-- section-about-->
    <section class="section section-about">
        <div class="section-about-title">
            <div class="about-title">
                <h2>{{$restaurant[0]->title}}</h2>
                <img src="img/1237789_668236089870553_1599852906_n.jpg">
                <p>{{$restaurant[0]->description}}</p>
            </div>
        </div>
        <div class="section-about-content clearfix">
            <div class="menu-content">
                <div class="menu-block float-sm-left">
                    <img class="menu-img" src="{{ asset('img/pexels-photo-313700.jpeg') }}">
                    <div class="menu-description">
                        <a href="menu.html">View Our Menu</a>
                    </div>
                </div>
            </div>
            <div class="menu-content menu-child">
                <div class="menu-block float-sm-left">
                    <img class="menu-img" src="img/pexels-photo-1062269.jpeg">
                    <div class="menu-description">
                        <a href="chef.html">View Our Chef</a>
                    </div>
                </div>
            </div>
            <div class="menu-content menu-child">
                <div class="menu-block float-sm-left">
                    <img class="menu-img" src="img/pexels-photo-67468.jpeg">
                    <div class="menu-description">
                        <a href="testimonies.html">View Our Testimonies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section-about -->

    <section class="section section-location clearfix">
        <div class="address-title">
            <h2>Location</h2>
        </div>
        <div class="location-container">
            <div class="donaluz-address float-sm-left container">
                <div class="donaluz-title">
                    <h3>{{$restaurant[0]->name}}</h3>
                    <p><img src="img/logo.jpg"/></p>
                    <address>
                        Visit us at:<br>
                        {{$restaurant[0]->address}}<br>
                        {{$restaurant[0]->city}}, {{$restaurant[0]->province}}<br>
                        {{$restaurant[0]->postal_code}} <br>
                        {{$restaurant[0]->country}}
                    </address>
                </div>
            </div>
            <div class="iframe-container float-sm-left">
                <a href="https://www.google.com/maps/place/807+St+Clair+Ave+W,+Toronto,+ON+M6C+1B9/@43.680497,-79.430542,17z/data=!4m5!3m4!1s0x882b347f31a6a94f:0x41331f0356080173!8m2!3d43.6804967!4d-79.430542?hl=en-GB" target="_blank"><img src="img/map.png"/>
                    <div class="view-direction">
                        <button class="btn btn-success">View Direction</button>
                    </div>
                </a>
            </div>            
        </div>
    </section>
    <!-- End Section Location -->

    <section class="section section-hours clearfix" >
        <h2>Opening Hours</h2>
        <div class="donaluz-hours">
            @foreach($restaurant[0]->times as $time)
            <p>
                <strong>{{$time->weekday}}:</strong> {{$time->from_hours}} to {{$time->to_hours}}
            </p>
            @endforeach
        </div>
    </section>
    <!--End Section Hours -->

    <section class="section section-socials">
        <div>
            <h2>Social Media</h2>
            <div class="social-media">
                <a href="https://www.facebook.com/Do%C3%B1a-Luz-201437436550423/" target="_blank">
                    <img src="img/facebook.png">
                </a>
                <a href="https://www.youtube.com/watch?v=FaIKJTTes3c" target="_blank">
                    <img src="img/youtube.png">
                </a>
            </div>
        </div>
    </section>
    <!-- End Section Socials -->

@endsection

@section('scripts')

@endsection
