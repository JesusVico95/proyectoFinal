<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calendario</title>
	
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/calendarstyle.css')}}">

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
<div class="container py-5">

	<div class="mx-auto p-2">
		<h1 class="titulo">ESTACIONES DEL AÑO</h1>
	</div>
	<table class="table table  table-responsive text-center">
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		
		<tr>	
				<td class="seccion">21 Diciembre - 20 Marzo</td>
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
					<div class="image-inv">
						<div class="image-text-inv">
							<td>									
								<button type="submit" class="image-text-inv invierno">Recetas de Invierno</button>
								<img class="img-personalizada" src="{{asset('assets/invierno/invierno.jpg')}}" alt="">
								<input type="hidden" name="name" value="Invierno">
							</td>
						</div>
					</div>
				</form>
				<td></td>
				<td></td>
				<td></td>
		</tr>
		<tr>
			<td class="seccion">20 Marzo - 21 Junio</td>
			<td></td>
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
					<div class="image-inv">
						<div class="image-text-inv">
							<td>
								<button type="submit" class="image-text-inv primavera">Recetas de Primavera</button>
								<img class="img-primavera" src="{{asset('assets/primavera/cerezo.jpg')}}" alt="">
								<input type="hidden" name="name" value="Primavera">
							</td>
						</div>
					</div>
				</form>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td class="seccion">21 Junio - 23 Septiembre</td>
			<td></td>
			<td>
					<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
						<div class="image-inv">
							<div class="image-text-inv">
								<td>
									<button type="submit" class="image-text-inv verano">Recetas de Verano</button>
									<img class="img-verano" src="{{asset('assets/verano/verano.jpg')}}" alt="">
									<input type="hidden" name="name" value="Verano">
								   </td>
							</div>
						</div>
					
		    </td>
		 </form>
			<td></td>
		</tr>
		<tr>
			<td class="seccion">23 Septiembre - 21 Diciembre</td>
			<td></td>
			<td></td>
			<td></td>
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
					<div class="image-inv">
						<div class="image-text-inv">
							<td>
								<button type="submit" class="image-text-inv otoño">Recetas de Otoño</button>
								<img class="img-otoño" src="{{asset('assets/otoño/otoño.jpg')}}" alt="">
								<input type="hidden" name="name" value="Otoño">
							   </td>
						</div>
					</div>
					
		</tr>
	</table>
	
</div>

	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous">
	</script>

	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
		integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
		crossorigin="anonymous">
	</script>

</body>
</html>

