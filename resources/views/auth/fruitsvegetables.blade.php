<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frutas y Verduras</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fruitsvegetables.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">
        <img src="{{asset('assets/logo.jpg')}}" alt="Logo de la página">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('calendar')}}">Volver al calendario</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('random')}}">Receta al azar</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('getAllList')}}">Lista de la compra</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('takeStatus')}}">Verduras y Frutas de temporada</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('addRecipe')}}">Agregar Receta</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('createIngredient')}}">Agregar Ingrediente</a>
          </li>
    <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('logout')}}">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   
      <h1 class="titulo">Frutas y Verduras de temporada</h1>
      <div class="fotografia">
        <img src="{{asset('assets/frutas.jpg')}}" alt="calendario de frutas de temporada">
        <img src="{{asset('assets/verduras.jpg')}}" alt="calendario de verduras de temporada">
      </div>

    

</body>
</html>