<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title->title_name}}</title>

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
                <form action="{{route('calendar')}}" method="POST">
                  @csrf
                  <button class="nav-link active" aria-current="page" type="submit">Volver al calendario</button>
                </form>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('random')}}">Receta al azar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('vista')}}">Lista de ingredientes</a>
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
    <h1 style="text-align: center">{{$title->title_name}}</h1>
    
    <br><br>
    <p>
        <strong>Ingredientes:</strong>
          <ol>
            @foreach ($ingredients as $ingredient)
           <li>
              <form action="{{route('addIngredient')}}" method="post">  
                @csrf
                {{$ingredient->name}}
                <input type="hidden" name="ingredient_id" value="{{$ingredient->id}}"/>
                <button type="submit" class="btn btn-success">Añadir</button>      
              </form>
            </li>
            @endforeach            
          </ol>
    </p>
    <p><strong>Elaboración:</strong>
        <ul>
            <li>{{$plate->elaboration}}</li>
        </ul>
    </p>
    <br>
    <p>
        <img src="{{$photo->photo}}" alt="{{$title->title_name}}" width="500" height="300">
    </p>
    
</body>
</html>