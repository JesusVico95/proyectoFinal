<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de ingredientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/liststyle.css')}}">
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
            <a class="nav-link" href="{{route('getAllList')}}">Lista de ingredientes</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('takeStatus')}}">Verduras y Frutas de temporada</a>
          </li>
          <li class="px-lg-2 nav-item">
            <a class="nav-link" href="{{route('addRecipe')}}">Agregar Receta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <h1 class="titulo">Lista de la compra de {{$user_name}}</h1>
    <div class="container text-center">
        <div class="row align-items-center">
          <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="cabecera">Categoria</th>
                    <th scope="col" class="cabecera">Producto</th>
                    <th scope="col" class="cabecera">Cantidad</th>
                  </tr>
                </thead>
                <tbody class="contenido">
                    
                  @foreach($lista as $item) 
                  <tr>     
                    <td class="table-{{$ingredient_type_colors[$item->type_ingredient]}}">{{$item->type_ingredient}}</td>
                    <td class="table-{{$ingredient_type_colors[$item->type_ingredient]}}">{{$item->name}}</td>
                    <div class="form-check cantidad">
                      <td class="table-{{$ingredient_type_colors[$item->type_ingredient]}}">
                        <label class="form-check-label"> {{$item->quantity}}</label>
                      </td> 
                    </div>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            <form action="{{route('seeRemoveList')}}" method="GET">  
              <div class="d-grid">
                <input type="submit" class="btn btn-success" value="Compra realizada">
              </div>
            </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
