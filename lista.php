<!DOCTYPE html>

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
                <tr>                      <td>Apellido</td>   
                <td>Nombre</td>
                <td>DNI</td>
                <td>Distrito</td>                           <td>Fecha</td>
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
                     <td><?php echo $datos['Apellido']; ?></td>                     <td><?php echo $datos['Nombre']; ?></td>                     <td><?php echo $datos['Dni']; ?></td>                     <td><?php echo $datos['Distrito']; ?></td>                     <td><?php echo $datos['Fecha Emitida']; ?></td>                     <td><?php echo $datos['Tipo de Servicio']; ?></td>                     <td><?php echo $datos['Tipo de proyecto']; ?></td>                     <td><?php echo $datos['Tipo']; ?></td>                     <td><?php echo $datos['Tamaño']; ?></td>                     <td><a href="archivo.php?id=<?php echo $datos['Cod_documento']?>">                      <?php echo $datos['Nombre del archivo']; ?></a></td>              </tr>
                          <?php  } ?>              </table>
   </body></html>

