<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Añadir usuario - PHP</title>
<link rel="stylesheet" href="assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php 
include("function.php");
?>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap  py-3 mb-4 border-bottom">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active btn btn-primary" aria-current="page">Home</a></li>
      </ul>
    </header>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header" style="font-size: 1.8rem;">Añadir usuario</legend>
                        <div style="padding:10px;"></div> 
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Marca" name="marca" type="text" placeholder="Marca" class="form-control">
                            </div>
                        </div>
                         <div style="padding:10px;"></div>   

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Modelo" name="modelo" type="text" placeholder="Modelo" class="form-control">
                            </div>
                        </div>
                        <div style="padding:10px;"></div> 
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Precio" name="precio" type="number" placeholder="Precio" class="form-control">
                            </div>
                        </div>
                        <div style="padding:10px;"></div>   
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Año" name="año" type="date" placeholder="Año" class="form-control">
                            </div>
                        </div>
                         <div style="padding:10px;"></div>
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Foto" name="foto" type="text" placeholder="URL de la foto" class="form-control">
                            </div>
                        </div>
                         <div style="padding:10px;"></div>
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Descripcion" name="descripcion" type="text" placeholder="Descripcion" class="form-control">
                            </div>
                        </div>
                        <div style="padding:10px;"></div>
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Fecha de publicacion" name="fechapublicacion" type="date" placeholder="Fecha de publicacion" class="form-control">
                            </div>
                        </div>
                         <div style="padding:10px;"></div>
                        <div style="padding:10px;"> </div> 
                        <div class="form-group">
                            <div class="col-md-12 text-center" >
                                <button type="submit" name="submit" class="btn btn-primary btn-lg col-md-4 col-md-offset-4 text-center" >Enviar</button>
                            </div>
                        </div>
                        <div style="padding:10px;"></div> 
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];
        $año = $_POST['año'];
        $foto = $_POST['foto'];
        $descripcion = $_POST['descripcion'];
        $fecha_de_publicacion = $_POST['fechapublicacion'];
        $sql = "INSERT INTO `datos`(`marca`, `modelo`, `precio`, `año`, `foto`, `descripcion`, `fecha de publicacion`) VALUES ($marca,$modelo,$precio,$año,$foto,$descripcion,$fecha_de_publicacion)";
        $result = db_query($sql);
        if($result){
        header("location:index.php");}   
}
?>