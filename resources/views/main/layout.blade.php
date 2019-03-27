<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" >
    <title>@yield('title', 'La Cocina de Doña Luz')</title>
</head>
<body class=@yield('class_name')>

<header>
  <a href="/" class="logo"><img src="img/logo-simple.png"></a>
  <input type="checkbox" id="chk">
  <label for="chk" class="show-menu-btn">
    <i class="fas fa-ellipsis-h"></i>
  </label>

  <ul class="menu-nav">
    <li><a href="/menu">Menu</a></li>
    <li><a href="/chef">Chef</a></li>
    <li><a href="/gallery">Gallery</a></li>
    <li><a href="/testimonials">Testimonials</a></li>        
    <label for="chk" class="hide-menu-btn">
      <i class="fas fa-times"></i>
    </label>
  </ul>
  <div class="clearfix"></div>      
</header>     
<!-- end header -->

@yield('content')

<section class="section section-footer">
    <footer>
        <p>Copyright 2019. Made by Nilda</p>
    </footer>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
