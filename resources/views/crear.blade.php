<!DOCTYPE html>
<html>
<head>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <H2><p class="p-2 bg-primary text-white" align="center">
    Crear clientes
  </p></H2>
  <form id="form" action="{{ url("/cliente") }}" method="POST" enctype="multipart/form-data">  
    {{ csrf_field() }}

@if (Session('status'))
<div class='{{ Session('clase') }}' role="alert">
  {{ Session('status') }}
</div>
@endif

    <div class="form-group">
      <label for="identificacion">Identificación<font color="red"><b>*</b></font>: </label>
      <input type="number" class="form-control" id="id" name="id" placeholder="Identificación" autofocus min="1" max="9999999999" step="1" required>
    </div>

    <div class="form-group">
      <label for="nombre">Nombre<font color="red"><b>*</b></font>: </label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre" minlength="1" maxlength="50" required>
    </div>

    <div class="form-group">
      <label for="nombre">Apellido<font color="red"><b>*</b></font>: </label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" minlength="1" maxlength="50" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email<font color="red"><b>*</b></font>:</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>   
    </div>    
    <br>
    <button type="submit" class="btn btn-primary">Guardar</button>    
    <a href="{{ url("/cliente") }}" class="btn btn-primary">Cancelar</a>    
  </form>
  <script type="js/bootstrap.min.js"></script>
  <script type="js/docs.min.js"></script>
</body>
</html>