
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrega tu receta</title>
</head>
<body>
    <form action="{{route('save')}}" method="POST"> 
        @csrf
        <h1>Aquí puedes crear tu propia receta</h1>
    
        <label>Título de la receta:
            <input type="text" name="title_name"  value="">
        </label>
        <br>
        <br>
        <label>Añade el ingrediente
            <input type="text" name="name" >
        </label>
        <br>
        <br>
        <label>Escoge su categoria
            <select name="category_id" id="">
                <option type="hidden" name="category_id" value="">Elegir una categoria</option>
                @foreach($categoryName as $categoryNames)
                <option type="hidden" name="category_id" value="{{$categoryNames->id}}">{{$categoryNames->type_ingredient}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <br>
        <label>Escoge un ingrediente
            <select name="ingredient_id" id="">
                <option type="hidden" name="ingredient_id" value="">Elegir un ingrediente</option>
                @foreach($ingredients as $ingredient)
                <option type="hidden" name="ingredient_id" value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                @endforeach
            </select>
        </label>
        <br>
    
        <br>
        <label>Elaboración <br>
            <textarea name="elaboration" rows="5"></textarea>
        </label>
        <br>

        <label>Tiempo de elaboración
            <input type="number" name="time_elaboration">
        </label>
        <br>
        
        <br>
        <label>Comer o Cenar?
            <select name="type_aliment" id="">
                <option type="hidden" name="type_aliment" value="">Elige un tipo</option>
                @foreach($typeAliment as $typeAliments)
                <option type="hidden" name="type_aliment" value="{{$typeAliments->id}}">{{$typeAliments->type}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <br>
        <input type="submit" value="Enviar Receta">
        <!--Si acaso buscar como poder agregar la opción de
        añadir una foto.-->
    </form>
</body>
</html>