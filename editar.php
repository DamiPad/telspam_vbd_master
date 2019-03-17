<?php
include "clases/conexion.php";
$basedatos=new conexion();

if(isset($_POST["entidad"]))
{
    $tipo=0;
    $sql= ("INSERT INTO tbl_directorio (numero, entidad) VALUES (?,?)");
    $params=["tipo"=>"ss","dato1"=>$_POST["noTelefono"],"dato2"=>$_POST["entidad"]];
    $resultado_Consulta=$basedatos->agregar($sql,$params,$tipo=1);
    //print_r($resultado_Consulta);
    header("location:consulta.php");
}
elseif ($_POST["indice"]) {
    $tipo=0;
  
    $sql= ("UPDATE tbl_directorio SET numero=?, entidad=? WHERE indice=?");
    $params=["tipo"=>"ssi","dato0"=>$_POST["numero"],"dato1"=>$_POST["entidad"],"dato2"=>$_POST["indice"]];
    $resultado_Consulta=$basedatos->agregar($sql,$params,$tipo=2);
    print_r($resultado_Consulta);
    //header("location:admon.php");
    
}
else{
    header("location:registrar.php");
}

