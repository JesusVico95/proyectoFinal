<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú {{$name}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/seasonsstyle.css')}}">
    
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



  <div class="container py-5">
    
    <h1 class="titulo">Estación de {{$name}}</h1>
    <br>
    <p class="subtitulo">{{$descriptions->description}}</p>
    <br>
    
    <table class="table table-responsive text-center ">
        <tr class="table-info">
            <th>Dia</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr> 

            <tr class="mb-2"> 
                <td class="mb-2">Comer</td>
                @foreach ($eat as $eats)
                {{-- <td><a href="{{route('plate', ['id' => $eats->id])}}">{{$eats->title_name}}</a></td> --}}
                <td>
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h6 class="card-title">{{$eats->title_name}}</h6>
                    <a href="{{route('plate', ['id' => $eats->id])}}" class="btn btn-success card-text" >Receta</a>
                  </div>
                </div>
              </td>
                @endforeach
            </tr>   
            <br>
            <tr>
                <td>Cenar</td>
                @foreach ($dinner as $dinners)
                
                {{-- <td><a href="{{route('plate',$dinners->id)}}">{{$dinners->title_name}}</a></td>
                 --}}
                 <td>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h6 class="card-title">{{$dinners->title_name}}</h6>
                      <a href="{{route('plate', ['id' => $dinners->id])}}"><button class="btn btn-outline-info ">Receta</button></a>
                    </div>
                  </div>
                </td>
                
                @endforeach
            </tr> 
            
        <tr>  
        </tr>
    </table>
  
  </div>
</body>
</html>