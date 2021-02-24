<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="stilo.css">
   
</head>
<body >




  
    <?php

$conexion=  mysqli_connect('localhost','root',  '',  'control_asis');
echo "<div class='alert alert-success' role='alert'>",
"Conexion establecida con la base de datos",
"</div>";

if(!$conexion){
    echo'Error  al  conectarse  a  la  base  de  datos';
    mysqli_connect_error();
    exit;
}

// Insertar a base de datos

$sql = "SELECT cedula FROM reg_pers_juridico  ";
$result = mysqli_query($conexion, $sql);





// Free result set
mysqli_free_result($result);

mysqli_close($conexion);

    ?>
<br><br>
 <div class="container ">
  <div class="row mt-1 justify-content-md-center ">
  <div class="col-lg-auto">
   <div class="card border-primary">
   <div class="card card-header">
   <h3>Registros personas juridicas</h3>
   </div>
   <form action="res-registros-jur.php" class="card-body" method="get">
   <div class="form-group">
       <input type="text" class="form-control" placeholder="Escriba cedula de persona juridica" name="xi">
       </div>
       <input type="submit" class="btn btn-success btn-block boton" value="buscar">
   </form>
 
 

   <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>Registros personas naturales</h3>
   </div>
   <form action="res-registros_nat.php" class="card-body" method="get">
   <div class="form-group">
       <input type="text" class="form-control" placeholder="Escriba cedula de persona natural" name="cedn">
       </div>
       <input type="submit" class="btn btn-success btn-block boton" value="buscar">
   </form>

   
 






   </div>

   </div>
   </div>
   </div>
   </div>

   

   

</body>
</html>