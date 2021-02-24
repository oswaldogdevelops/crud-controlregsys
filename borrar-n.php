<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="head.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<header class="header2">
    <div class="wrapper">
    <div class="logo">
    <img src="logo2.png" alt="" class="title">
    <nav>
    <a href="inicio-principal.php">consultar por cedula</a>
    <a href="FormAgregar-j.php">Registrar persona juridica</a>
    <a href="FormAgregar-n.php">Registrar persona natural</a>
    
    </nav>


    <!-- </div> -->
    </div>
    </header>


<?php



$conexion=  mysqli_connect('localhost','root',  '',  'control_asis');
echo"<div class='alert alert-success' role='alert'>",
"Conexion establecida con la base de datos",
"</div>";
if(!$conexion){
	echo'Error  al  conectarse  a  la  base  de  datos';
	mysqli_connect_error();
	exit;
}

// Borrar a base de datos
 $era = $_GET['ddis'];

$sql = "DELETE FROM reg_pers_naturales WHERE cedula = '$era' ";
$result = mysqli_query($conexion, $sql);


if (mysqli_query($conexion, $sql)) {
  echo "Registro eliminado con exito";
} else {
  echo "Error deleting record: " . mysqli_error($conexion);
}

mysqli_close($conexion);






?>
</body>
</html>