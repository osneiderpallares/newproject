<!DOCTYPE html>
<html>
<head>
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">  
  <H2><p class="p-2 bg-primary text-white" align="center">
    Editar clientes
  </p></H2>
  <form id="form" action="{{ url("/cliente/mod/$cli->id") }}" method="POST" enctype="multipart/form-data">  
  {{ csrf_field() }}

  @if (Session('status'))
<div class='{{ Session('clase') }}' role="alert">
  {{ Session('status') }}
</div>
@endif
      
  <div class="form-group">
    <label for="identificacion">Identificación: </label>
    <input type="text" class="form-control" id="id" name="id" value="{{ $cli->id }}" placeholder="Identificación" readonly="readonly" required>    
  </div>

  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $cli->first_name }}" placeholder="Nombre" minlength="1" maxlength="50" autofocus required>
  </div>

  <div class="form-group">
    <label for="nombre">Apellido: </label>
    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $cli->last_name }}" minlength="1" maxlength="50" placeholder="Apellido" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $cli->email }}"aria-describedby="emailHelp" placeholder="Enter email" required>   
  </div>    
  <br>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <a href="{{ url("/cliente") }}" class="btn btn-primary">Cancelar</a>    
</form>
<script type="js/bootstrap.min.js"></script>
<script type="js/docs.min.js"></script>
</div>
</body>
</html>