<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calendario</title>
</head>
<body>
	<h1 style="text-align: center">Tabla de temporada</h1>
	<table>
		<tr>
			<th>Dia del mes</th>
			<th>Invierno</th>
			<th>Primavera</th>
			<th>Verano</th>
			<th>Otoño</th>
		</tr>
		<tr>
			<td>21 Diciembre - 20 Marzo</td>    
			
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
                   	<td>
						<button type="submit">Recetas de Invierno</button>
						<input type="hidden" name="name" value="Invierno">
					</td>
		
				</form>
		</tr>
		<tr>
			<td>21 Marzo - 21 Junio</td>
			<td></td>
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
                   	<td>
						<button type="submit">Recetas de Primavera</button>
						<input type="hidden" name="name" value="Primavera">
					</td>
          	
				</form>
		
		</tr>
		<tr>
			<td>22 Junio - 23 Septiembre</td>
			<td></td>
			<td>
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
				<td>
				 <button type="submit">Recetas de Verano</button>
				 <input type="hidden" name="name" value="Verano">
				</td>
		    </td>
		 </form>
			<td></td>
		</tr>
		<tr>
			<td>24 Septiembre - 20 Diciembre</td>
			<td></td>
			<td></td>
			<td></td>
			
				<form action="{{route('getSeason',['seasonName'=>'name'])}}" method="GET">
					<td>
					 <button type="submit">Recetas de Otoño</button>
					 <input type="hidden" name="name" value="Otoño">
					</td>
		</tr>
	</table>
</body>
</html>