
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar recetas</title>
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
                                <h4 class="pb-1 mt-1 mb-5 titulo">Agregar Receta</h4>
                              </div>
                              
                              <div class="mb-4 form-outline">
                                <label class="form-label">Nombre de la receta</label>
                              <input type="text" name="title_name" class="form-control"
                                placeholder="Titulo de la receta" required />                            
                            </div> 
                                <div class="mb-4 form-outline">
                                    <label class="form-label">Ingrediente Principal: </label>
                                        <select name="ingredient_ids[]" id="" class="form-select">
                                            <option value="">Ingrediente</option>
                                            @foreach($ingredients as $ingredient)
                                              <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label">Ingredientes Secundarios:
                                        <select name="ingredient_ids[]" id="" class="form-select">
                                            <option value="">Ingrediente</option>
                                            @foreach($ingredients as $ingredient)
                                              <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <select name="ingredient_ids[]" id="" class="form-select">
                                          <option value="">Ingrediente</option>
                                          @foreach($ingredients as $ingredient)
                                            <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                                          @endforeach
                                      </select>
                                      <br>
                                      <select name="ingredient_ids[]" id="" class="form-select">
                                        <option value="">Ingrediente</option>
                                        @foreach($ingredients as $ingredient)
                                          <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                        <select name="ingredient_ids[]" id="" class="form-select">
                                            <option value="">Ingrediente</option>
                                            @foreach($ingredients as $ingredient)
                                              <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>

                                <div class="mb4 form-outline">
                                    <label class="form-label" >Elaboracion
                                        <textarea class="form-control"name="elaboration" id="" cols="45"></textarea>
                                    </label>
                                </div>

                                <div class="mb4 form-outline">
                                    <label>Tiempo de Elaboracion
                                        <input class="form-control"type="number" name="time_elaboration">
                                    </label>
                                </div>
                                <div class="mb4 form-outline">
                                    <label>Comer o Cenar?
                                        <select class="form-select"name="type_aliment" id="">
                                            <option type="hidden" name="type_aliment" value="">Elige un tipo</option>
                                            @foreach($typeAliment as $typeAliments)
                                            <option type="hidden" name="type_aliment" value="{{$typeAliments->id}}">{{$typeAliments->type}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="pt-1 pb-1 mb-5 text-center">
                                  <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2" type="submit">Añadir Receta</button>
                                </div>    
                              </form>
                            </div>
                          </div>
                          <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                              <h4 class="mb-4">Qué cocino esta semana?</h4>
                              <p class="mb-0 small">En este apartado, el usuario puede agregar su receta favorita así
                                como una breve descripción de como realizarla
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