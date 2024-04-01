<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de ingredientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de la compra</h1>
    <br><br>
    <div class="container text-center">
        <div class="row align-items-center">
          <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                  </tr>
                </thead>
                <tbody>
                    
                  @foreach($lista as $item) 
                  <tr>                  
                    <td>{{$item->type_ingredient}}</td>
                    <td>{{$item->name}}</td>{{--Boton en fomra icono.<a href="" type="button" class="btn btn-danger">Editar</a> --}}
                    <td>{{$item->quantity}}</td> 
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
