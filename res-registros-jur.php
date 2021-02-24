
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <link rel="stylesheet" href="stilo.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
			echo'Error  al  conectarse  a  la  base  de  datos';
			mysqli_connect_error();
			exit;
}

// Consultar a base de datos
$CED = $_GET['xi'];

$sql = "SELECT nombre, telefono, correo, cedula FROM reg_pers_juridico WHERE cedula='$CED';
";


 
$result = mysqli_query($conexion, $sql);

 $row = mysqli_fetch_assoc($result);


echo "<br>","<hr>", "<div class='container '>",


"<div class='flotante'> ","<h2>" ,"nombre ♠ " ,$row["nombre"],"<br>", "telefono ♠ ",$row["telefono"],"<br>", "correo ♠ ",$row["correo"],"<br>", "cedula ♠", $row["cedula"], "</h2>","</div>","</div>", "<br>","<br>","<br>","<br>","<br>","<br>","<br>","<br>","<hr>";





// Free result set
mysqli_free_result($result);



mysqli_close($conexion);


?>


<?php
   $conexion=  mysqli_connect('localhost','root',  '',  'control_asis');
   if(!$conexion){
    echo'Error  al  conectarse  a  la  base  de  datos';
    mysqli_connect_error();
    exit;
}

$CED = $_GET['xi'];
$result = mysqli_query($conexion, $sql);
 $row = mysqli_fetch_assoc($result);

 echo "<div class=' container '>",
 "<div class='col-md-center flotante'>",
 "<div class='card'>",
 "<form action='borrar-j.php' class='card-body' method='GET' >  ",
 "<div class='form-group'>",
 "<button type='submit' name='ddis' value='$CED' class='btn btn-danger' > ","Borrar Registro" ,"<i class='material-icons '  style='display: ; font-size:20px; color:white; '>   delete</i>", "</button>",
 "</div>",
 "</form>",
 "</div>",
 "</div>",
 "</div>";
 
 // Free result set
mysqli_free_result($result);



mysqli_close($conexion);
 
 



?>



 <!-- Boton agregar: redirige a una pagina nueva para crear nuevos registros -->
<div class=" container ">
<div class="col-md-center flotante">
<div class="card">
<form action="" class="card-body" method="get">
<div class="form-group">
<button type="button" id="add" class="btn btn-secondary"  ondblclick="document.getElementById('1').style.display='block' "  >  <a href="FormAgregar-j.php" style="color:white">Nuevo Registro</a> </button>
</div>
</form>
</div>
</div>
</div> 

<!-- Boton actualizar: Al presionar abre un formulario para actualizar registros existentes -->
<div class=" container ">
<div class="col-md-center flotante">
<div class="card">
<form action="" class="card-body">
<div class="form-group">
<button type="button" id="add" class="btn btn-success"   onclick="document.getElementById('1').style.display='block'; " >Actualizar Registro <i class="material-icons "  style="display: ; font-size:21px; color:white; ">   cached</i></button>
</div>
</form>
</div>
</div>
</div>









<br><br><br><br><br>
<!-- Formulario para actualizar datos -->

<div id="1" style="display:none" class="container ">
  <div class="row mt-1 justify-content-md-center ">
  <div class="col-lg-auto">
   <div class="card border-primary">

   <div class="card card-header">
   <h3 >Actualizar datos: juridico</h3>
   </div>
   <form action="actualizar-j.php" class="card-body" method="GET">
   <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>Escriba la cedula <i class="material-icons " id="act1" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
   <div class="form-group">
       <input type="text" class="form-control" placeholder="ESCRIBA la cedula de la persona juridica"  oninput="document.getElementById('act1').style.display='';" name="cedulaj" >
       </div>
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>nombre <i class="material-icons " id="act2" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
       <input type="text" class="form-control" placeholder="ESCRIBA el nombre"  oninput="document.getElementById('act2').style.display='';" name="nombre">
       </div>
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>correo <i class="material-icons " id="act3" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
       <input type="text" class="form-control" placeholder="ESCRIBA el correo"  oninput="document.getElementById('act3').style.display='';" name="email" >
       </div>
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>telefono <i class="material-icons " id="act4" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
<input type="text" class="form-control" placeholder="ESCRIBA el telefono"  oninput="document.getElementById('act4').style.display='';" name="telf" >
       </div>


    
       <div class="form-group">
  
       <input type="submit" value="Enviar" id="sub2" class="form-control btn btn-primary btn-block boton" onclick="document.getElementById('sub').style.display='';" > <i class="material-icons " id="sub" style="display:none ; font-size:19px; color:blue; ">   done_all</i> 
       </div>
   
   </form>
 
 

  

   
 


 



   </div>

   </div>
   </div>
   </div>
   </div>

   </div>
   </div>

   </div>
   </div>

<br><br><br><br><br>



