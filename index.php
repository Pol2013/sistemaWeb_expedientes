<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates
and open the template in the editor.
Template Name: Prueba;
-->

<?php
include_once 'config.php';


if (isset($_POST['boton'])) {
  
  $nombre = $_FILES['archivo']['name'];
  
  $tipo = $_FILES['archivo']['type'];
   
 $tamanio = $_FILES['archivo']['size'];
 
   $ruta = $_FILES['archivo']['tmp_name'];
 
   $destino = "archivos/" . $nombre;
   
 if ($nombre != "") {
      
 if (copy($ruta, $destino)) {
          
  $ape= $_POST['ape'];
        
    $nom= $_POST['nom'];
    
    $dni= $_POST['dni'];
    
     $distri= $_POST['distri'];
    
    $date= $_POST['date'];
    
    $serv= $_POST['serv'];
    
    $proyect= $_POST['proyect'];
     
       $db=new Conect_MySql();
      
      $sql = "INSERT INTO wp_registro_proyecto(id,Apellido,Nombre,DNI, Distrito,Fecha,Servicio,archivo, Tipo_Archivo,Tipo,Tamaño) VALUES ('','$ape','$nom','$dni,'$distri','$date','$serv','$nombre','$proyect','$tipo','$tamanio')";
    
        $query = $db->execute($sql);
    
        if($query){
            
    echo "Se guardo correctamente";
      
      }
     
    else {
      
      echo 'Error';
       
 }
    }
   }
}

?>




