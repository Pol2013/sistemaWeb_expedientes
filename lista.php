﻿<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates
and open the template in the editor.
Template Name: Lista;
-->

<html>
   
 <head>
        <meta charset="UTF-8">
        <title></title>
 </head>
   <body>
             <table>
                <tr>
                <td>Nombre</td>
                <td>DNI</td>
                <td>Distrito</td>
               <td>Servicio</td>
               <td>Tipo de archivo</td>
                  <td>Tipo</td>
                  <td>Tamaño</td>
                   <td>Nombre del archivo</td>
                 </tr>
       

 <?php
      
  include 'config.php';
        $db=new Conect_MySql();
         $sql = "select*from documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                     <td><?php echo $datos['Apellido']; ?></td>
                          <?php  } ?>
   </body>
