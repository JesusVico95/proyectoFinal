<!doctype html>
<html lang="en">
    <head>
        <title>Inicia Sesión</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

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
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="text-black card rounded-3">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="{{asset('assets/logo.jpg')}}"
                              style="width: 185px;" alt="logo">
                            <h4 class="pb-1 mt-1 mb-5">Iniciar Sesión</h4>
                          </div>
          
                          <form action="{{route('login')}}" method="POST">
                            @csrf
                            <p>Ingresa tu correo y contraseña</p>
          
                            <div class="mb-4 form-outline">
                                <label class="form-label" for="form2Example11">Correo electrónico</label>
                              <input type="email" name="email" id="form2Example11" class="form-control"
                                placeholder="Ingresa el correo" required />                            
                            </div>
          
                            <div class="mb-4 form-outline">
                                <label class="form-label" for="form2Example22">Contraseña</label>
                              <input type="password" name="password" id="form2Example22" class="form-control" required/>
                            </div>
                            
                            <div class="pt-1 pb-1 mb-5 text-center">
                              <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-2" type="submit">Iniciar sesión</button>
                            </div>
          
                            <div class="pb-4 d-flex align-items-center justify-content-center">
                              <p class="mb-0 me-2">Aún no tienes cuenta?</p>
                              <a href="{{route('register')}}" class="btn btn-outline-danger">Crear Cuenta</a>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                          <h4 class="mb-4">Qué cocino esta semana?</h4>
                          <p class="mb-0 small">Bienvenido a la primera web donde decidirás en qué estación
                            del año estás para visualizar un menú semanal a base de productos de temporada.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
