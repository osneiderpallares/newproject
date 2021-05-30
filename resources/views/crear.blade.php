<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <form id="form" action="{{ url("/cliente") }}" method="POST" enctype="multipart/form-data">  
    {{ csrf_field() }}
    <div class="form-group">
      <label for="identificacion">Identificación: </label>
      <input type="text" class="form-control" id="id" name="id" placeholder="Identificación">
    </div>

    <div class="form-group">
      <label for="nombre">Nombre: </label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre">
    </div>

    <div class="form-group">
      <label for="nombre">Apellido: </label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email:</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">   
    </div>    
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  <script type="js/bootstrap.min.js"></script>
  <script type="js/docs.min.js"></script>
</body>
</html>