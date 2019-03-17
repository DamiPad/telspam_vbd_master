<?php
//include---busca el archivo lo que estoy buscando 
//include_once
//require
//require once
include "clases/conexion.php";


$basedatos=new conexion();
$sql= (" SELECT * FROM tbl_directorio");
               $params=0;
                //print_r($query);
                $resultado_Consulta=$basedatos->mostrar($sql);
                //print_r($resultado_Consulta);
                $arrResult=array();

                if ($resultado_Consulta->num_rows > 0) {
                    $resultado_Consulta->bind_result($indice,$numero,$entidad);
                    while ($resultado_Consulta->fetch()) 
                    {
                        $arrResult[]=array ("indice"=>$indice,"entidad"=>$entidad,"numero"=>$numero);
                    }
                }

if (isset($_POST["indice"])){
    //Se almacena en una variable el id del registro a eliminar
    $id = $_POST["indice"];

    //Preparar la consulta
    $sql= (" DELETE FROM tbl_directorio WHERE indice=?");
               $params=["tipo"=>'i',"dato"=>$id];
                //print_r($query);
                //Ejecutar la consulta
                $resultado_Consulta=$basedatos->consulta($sql,$params);
                //print_r($resultado_Consulta);
                
   
    
    //redirigir nuevamente a la página para ver el resultado
    header("location:admon.php");
}


  

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include "principal.php"?>
<center>
<h3>Tel-SPAM</h3>

<table>
    <tr>
        <th>ID</th>
        <th>Número</th>
        <th>Entidad</th>
        <th></th>
        <th></th>
    </tr>
    <?php

    for($i=0; $i<count($arrResult); $i++) 
    {
            
        
            echo '<tr>
            
                    <td>'.$arrResult[$i]["indice"].'</td>
                    <td>'.$arrResult[$i]["entidad"].'</td>
                    <td>'.$arrResult[$i]["numero"].'</td>
                    
                    
                    <td> <form method="POST" action=""> 
                    <input type="hidden" name="indice" value="'.$arrResult[$i]["indice"].'">
                    <input type="submit" value="Editar">
                    </form></td>
                    <td><form method="POST" action=""> 
                    <input type="hidden" name="indice" value="'.$arrResult[$i]["indice"].'">
                    <input type="submit" value="Eliminar">
                    </form></td>
            
            </tr>';
        
    }
    ?>
</table>

</body>
</html>





