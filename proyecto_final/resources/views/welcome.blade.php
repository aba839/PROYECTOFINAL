<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PROYECTO FINAL</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
.container {
    margin-top: 50px;
}

.img-fluid {
    height: auto;
    max-width: 100%;
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0b5ed7;
}

/* .slider {
    width: 100%;
    height: 500px; /* ajustar según la altura deseada */
    
   */
  /* .slick-slide {
    width: 100%;
    height: 500px; /* ajustar según la altura deseada */
   
   */
    .slider img {
    object-fit: cover;
    height: 500px; /* ajustar según la altura deseada */
    }


          </style>
    </head>
    <body class="antialiased">
   
    <div class="slider">
  <div><img src="img/carniceria.png" style="width: 100%; height: 700px; object-fit: cover;"></div>
  <div><img src="img/carniceria5.png" style="width: 100%; height: 700px; object-fit: cover;"></div>
  <div><img src="img/carniceria3.png" style="width: 100%; height: 700px; object-fit: cover;"></div>
  <div><img src="img/carniceria4.png" style="width: 100%; height: 700px; object-fit: cover;"></div>
</div>


    <div class="container">
    <div class="row">
        <!-- <div class="col-md-6">
            <img src="img/carniceria.png" alt="Imagen de inicio" class="img-fluid">
        </div> -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg btn-block">Ver productos</a>
                </div>
                <div class="col-md-12 mb-4">
                    <a href="{{ route('customers.index') }}" class="btn btn-primary btn-lg btn-block">Ver clientes</a>
                
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){
    $('.slider').slick();
  });
</script>
    </body>
</html>
