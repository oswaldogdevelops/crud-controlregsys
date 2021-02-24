<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="head.css">
    <title>Document</title>
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
    echo"<div class='alert alert-success' id='close' style='display:' role='alert'>",
    "Conexion establecida con la base de datos",
    "<button style='float:right' class=' btn-danger' onclick='document.getElementById(`close`).style.display=`none`;' > X </button>",
    "</div>";
    if(!$conexion){
    mysqli_connect_error();
    exit;
}


$TTL = $_GET['cdd'];
$IINT = $_GET['nm'];
$DT = $_GET['eml'];
$TPP = $_GET['tel'];

$sql = "INSERT INTO reg_pers_naturales (nombre,correo, cedula ,telefono ) Values ('$IINT','$DT','$TTL','$TPP')  ; ";
$result = mysqli_query($conexion, $sql);

echo "Registro agregado con exito";
// Free result set
 //mysqli_free_result($result);

mysqli_close($conexion);
 
?>


</body>
</html>