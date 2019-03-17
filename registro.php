<?php
include "clases/conexion.php";
$basedatos=new conexion();


if(isset($_GET["encontrado"])){

    $encontradoEnConsulta=$_GET['encontrado'];
    $tel=$_GET['tel'];
    $tel=(filter_var($tel, FILTER_SANITIZE_NUMBER_INT));
    //echo $encontradoEnConsulta;
    //echo $tel;
    if($encontradoEnConsulta=='true'){
        //Mostramos el telefono  y descripción
        $mensaje_al_usuario="El número de télefono es SPAM";
        //$mostrarpantallaresgistro="false";
        $mostrar="none";
        
        

    }
    else{
        //Mostramos otra caja para que puedar guardar el registro
        $mensaje_al_usuario="No existe en nuestra base de datos, Si gusta puede registrar el número telefonico";
        // $mostrarpantallaresgistro="true";
        $mostrar="inline";
        
      
      
       
    }

                                                                                                                                                 
}
else{
    header("location:consulta.php");
	exit;
}

 

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<h3>Tel-SPAM</h3>

<div>
<form method="POST" action="editar.php">
<span><?php echo $mensaje_al_usuario?> </span>
 <input type="text" size="15" name="noTelefono"  id="noTelefono" value="<?php echo $tel;?>" required readonly>
 <br>
 <input type="text" style="display: <?php echo $mostrar;?>;" size="15" name="entidad" id="entidad" placeholder="Escribe quien te llamo" required>
 <br>
 <input type="submit" style="display: <?php echo $mostrar;?>;" size="10" value="Registrar" onclick="">
</form>

</center>
</div>

</body>
</html>






