<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frutas y Verduras</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Menú de navegación</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('calendar')}}">Volver al calendario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('random')}}">Receta al azar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lista de ingredientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><img src="" alt="">Verduras y Frutas de temporada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('season', ['seasonName' => $back->name])}}">Volver al menú de recetas</a>
              </li>           
            </ul>
          </div>
        </div>
      </nav>
    <h1>Calendario de frutas y verduras</h1>
    <img src="{{asset('assets/frutasyverduras.jpg')}}" alt="imagen de temporada de frutas y verduras"
    width="1300" height="1300">

</body>
</html>