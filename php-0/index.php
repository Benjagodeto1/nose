<?php
  require 'database.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina principal - PHP</title>
<link rel="stylesheet" href="assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <header class="d-flex flex-wrap  py-3  border-bottom">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active btn btn-primary" aria-current="page">Home</a></li>

      </ul>
    </header>
  </div>
     
<div class="container-flex text-center">
<div class="row">
<div class="col-md-12">
<div class="well well-sm">
	<table class="table">
	  <thead class="table-light">
	    <tr>
	      <th scope="col">Marca</th>
	      <th scope="col">Modelo</th>
	      <th scope="col">Año</th>
	      <th scope="col">Foto</th>
	      <th scope="col">Descripcion</th>
	      <th scope="col">Fecha de publicacion</th>
	      <th scope="col">Opcion</th>
		  <th scope="col"><a class="btn btn-primary" href="insertar.php">+ Añadir nuevo registro</a></th>
	    </tr>
	  </thead>
	<?php
	  include("function.php");
		$sql = "SELECT * FROM datos";
		$result = db_query($sql);
		while($row = mysqli_fetch_object($result)){ ?>
	<tr>
		<td scope="row"><?php echo $row->marca;?></td>
		<td scope="row"><?php echo $row->modelo;?></td>
		<td scope="row"><?php echo $row->año;?></td>
		<td scope="row"><img src="<?php echo $row->foto;?>" alt="" style="max-width:200px;"></td>
		<td scope="row"><?php echo $row->descripcion;?></td>
		<td scope="row"><?php echo $row->fechapublicacion;?></td>

		<td scope="row"><a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>">editar</a>
		<a class="btn btn-primary" href="delete.php?id=<?php echo $row->id; ?>">eliminar</a></td>
		<td scope="row"></td>
	</tr>
	<?php } ?>
</table>
		</div>
		</div>
		</div>
		</div>
    
</body>
</html>