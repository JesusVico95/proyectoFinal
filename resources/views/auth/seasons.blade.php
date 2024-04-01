<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú {{$name}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    
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
                <a class="nav-link" href="">Lista de ingredientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('takeStatus')}}">Verduras y Frutas de temporada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('addRecipe')}}">Agregar Receta</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
    <h1>Bienvenido a la estación de {{$name}}</h1>
    <p>{{$descriptions->description}}</p>
    <table>
        <tr>
            <th>Dia</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr> 

            <tr> 
                <td>Comer</td>
                @foreach ($eat as $eats)
                {{-- <td><a href="{{route('plate', ['id' => $eats->id])}}">{{$eats->title_name}}</a></td> --}}
                <td>
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h6 class="card-title">{{$eats->title_name}}</h6>
                    <a href="{{route('plate', ['id' => $eats->id])}}" class="btn btn-primary">Ir a la receta</a>
                  </div>
                </div>
              </td>
                @endforeach
            </tr>   
            <tr> 
                <td>Cenar</td>
                @foreach ($dinner as $dinners)
                
                {{-- <td><a href="{{route('plate',$dinners->id)}}">{{$dinners->title_name}}</a></td>
                 --}}
                 <td>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h6 class="card-title">{{$dinners->title_name}}</h6>
                      <a href="{{route('plate', ['id' => $dinners->id])}}" class="btn btn-primary">Ir a la receta</a>
                    </div>
                  </div>
                </td>
                
                @endforeach
            </tr> 
            
        <tr>  
        </tr>
    </table>
</body>
</html>