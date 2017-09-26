<?php
include ("conexion.php");

$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
$query= "INSERT INTO foto(nombre,foto) VALUES ('$nom','$destino')";
$resultado= $conexion->query($query);

if($resultado){
    header("location:fotos.php");
}
else{
echo"No se subio";
}