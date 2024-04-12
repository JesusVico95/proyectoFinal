<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Agregar Ingrediente</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/addrecipestyles.css')}}">
        <!-- Bootstrap CSS v5.2.1 -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
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
            </ul>
          </div>
        </div>
      </nav>
            <section class="h-100 gradient-form" style="background-color: #eee;">
                <form action="{{route('successIngredient')}}" method="POST">
                    @csrf
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                      <div class="text-black card rounded-3">
                        <div class="row g-0">
                          <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                <h4 class="pb-1 mt-1 mb-5 titulo">Agregar Ingredientes</h4>
                              </div>

                                <div class="mb-4 form-outline">
                                    <label class="form-label">Agregar Ingrediente</label>
                                        <input type="text" name="name" class="form-control"
                                        placeholder="Agrega ingrediente" required />                            
                                </div> 

                                <div class="mb-4 form-outline">
                                    <label class="form-label">Categoria
                                        <select name="category_id" id="" class="form-select">
                                            <option name="category_id" value="">Elegir categoria</option>
                                            @foreach($categoryName as $categoryNames)
                                            <option name="category_id" value="{{$categoryNames->id}}">{{$categoryNames->type_ingredient}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div> 

                                <div class="mb-4 form-outline">
                                    <label class="form-label">Estacion
                                        <select name="season_id" id="" class="form-select">
                                            <option name="season_id" value="">Elegir Estacion</option>
                                            @foreach($season as $seasons)
                                            <option name="season_id" value="{{$seasons->id}}">{{$seasons->name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div> 


                                <div class="pt-1 pb-1 mb-5 text-center">
                                  <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2" type="submit">Añadir Ingrediente</button>
                                </div>    
                              </form>
                            </div>
                          </div>
                          <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                              <h4 class="mb-4">Qué cocino esta semana?</h4>
                              <p class="mb-0 small">No encuentras los ingredientes en nuestra web? Aquí podras agregar todos
                                los ingredientes necesarios para después poder agregarlos en tus recetas!
                              </p>
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
                crossorigin="anonymous"
            ></script>
    
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"
            ></script>

</body>
</html>