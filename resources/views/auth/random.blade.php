<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$receta->title_name}}</title>
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
              <form action="{{route('calendar')}}" method="POST">
                @csrf
                <button class="nav-link active" aria-current="page" type="submit">Volver al calendario</button>
              </form>
              <li class="nav-item">
                <a class="nav-link" href="{{route('random')}}">Receta al azar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lista de ingredientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('takeStatus')}}"><img src="" alt="">Verduras y Frutas de temporada</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{route('addRecipe')}}">Agregar Receta</a>
              </li>              
            </ul>
          </div>  
        </div>
      </nav>
   
    <h1 style="text-align: center">{{$receta->title_name}}</h1>
    <p><strong>Ingredientes:</strong>
        <ol>
           @foreach ($result as $result)
           <li>{{$result->name}}</li>
           @endforeach
        {{-- {{$ingredient->category->type_ingredient}}</li> 
        Este trozo de código nos pone que ademas el Pollo pertenece a la categoria de la carne.--}}
        </ol>
    </p>

    <p><strong>Elaboración:</strong>
        <ul>
            {{$receta->elaboration}}
        </ul>
    </p>

    <p><strong>Aquí pondremos la foto cuando la tengamos en la BD <br></strong>
        <img src="{{$receta->photo}}" alt="" width="500" height="300">
    </p>
    
</body>
</html>