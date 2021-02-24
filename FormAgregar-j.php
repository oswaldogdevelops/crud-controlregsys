<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <link rel="stylesheet" href="stilo.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="head.css">
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

    <br><br><br>

<div id="1" style="display:" class="container ">
  <div class="row mt-1 justify-content-md-center ">
  <div class="col-lg-auto">
   <div class="card border-primary">

   <div class="card card-header">
   <h3 >Agregar nuevo registro: juridica</h3>
   </div>
   <form action="InsertarDat-j.php" class="card-body" method="GET">
   
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>Cedula <i class="material-icons " id="act2" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
       <input type="text" class="form-control" placeholder="ESCRIBA la cedula"  oninput="document.getElementById('act2').style.display='';" name="cdd">
       </div>
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>nombre <i class="material-icons " id="act3" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
       <input type="text" class="form-control" placeholder="ESCRIBA el nombre"  oninput="document.getElementById('act3').style.display='';" name="nm" >
       </div>
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>correo <i class="material-icons " id="act4" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
<input type="text" class="form-control" placeholder="ESCRIBA el correo"  oninput="document.getElementById('act4').style.display='';" name="eml" >
       </div>
       <div class="col-md-90 card ">
   <div class="card card-header">
   <h3>Telefono <i class="material-icons " id="act5" style="display:none ; font-size:23px; color:blue; ">   done</i></h3>
   </div>
       <div class="form-group">
       <input type="text" class="form-control" placeholder="ESCRIBA el telefono"   oninput="document.getElementById('act5').style.display='';" name="tel" >
       </div>
     <!-- Here -->

      
      
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








</body>
</html>