<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title->title_name}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/fichastyle.css')}}">
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
      <section class="h-100 gradient-form" style="background-color: #eee;">
        <form action="{{route('save')}}" method="POST">
            @csrf
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="text-black card rounded-3">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <h6 class="pb-1 mt-1 mb-5 titulo">{{$title->title_name}}</h6>
                      </div>
                      <strong class="subtitulo">Ingredientes:</strong>
                      <div class="mb-4 form-outline">
                        <ol class="list-unstyled">
                          @foreach ($ingredients as $ingredient)
                         <li>
                            <form action="{{route('addIngredient')}}" method="post">  
                              @csrf
                              <br>
                             <p class="contenido">{{$ingredient->name}}</p> 
                              <input type="hidden" name="ingredient_id" value="{{$ingredient->id}}"/>
                              <div class="contenido">
                                <div class="boton">
                                  <button type="submit" class="btn btn-success  color">Añadir</button>
                                </div>
                                
                              </div>
                                    
                            </form>
                          </li>
                          @endforeach            
                        </ol>                           
                    </div> 
                    <strong class="subtitulo">Elaboración:</strong>
                        <div class="mb-4 form-outline">
                          <ul class="list-unstyled">
                            <li class="contenido">{{$plate->elaboration}}</li>
                          </ul>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="px-3 py-4 text-black p-md-5 mx-md-4">
                      <h4 class="pb-1 mt-1 mb-5 subtitulo">Foto</h4>
                      <div class="mb4 form-outline">
                        <img src="{{$photo->photo}}" alt="{{$title->title_name}}" width="450" height="300">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
</body>
</html>