<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates
and open the template in the editor.
Template Name: Registros;
-->

<?php

include_once 'config.php';
if (isset($_POST['boton'])) {
  $tipo = $_FILES['archivo']['type'];
  $tamanio = $_FILES['archivo']['size'];
  $ruta = $_FILES['archivo']['tmp_name'];
  $destino = "archivos/" . $nombre;
      if( $nombre != ""){
   }
   ?>  
Registrar Cliente Nuevo   
<form action="" enctype="multipart/form-data" method="post">

<br><br>Apellidos: <input name="ape" type="text" />
<br><br>Nombres: <input name="nom" type="text" />
<br><br>DNI: <input name="dni" type="text" />
<br><br>Selecciona Distrito: <select name="distri" id="distri">
<option value="">Ancon</option>
<option value="">Puente Piedra</option>
<option value="">Carabayllo</option>
<option value="">Comas</option>
<option value="">Los Olivos</option>
<option value="">San Martin de Porres</option>
<option value="">Breña</option>
<option value="">Lince</option>
<option value="">Javier Prado</option>
<option value="">Magdalena del Mar</option>
<option value="">San Miguel</option>
<option value="">La Molina</option>
<option value="">Miraflores</option>
<option value="">San Isidro</option>
<option value="">San Borja</option>
<option value="">Ate</option>
<option value="">Cercado de Lima</option>
<option value="">Chorrillos</option>
</select>

<br><br>Adjuntar Archivo:: <input name="archivo" type="file" />

<br><br>Fecha de Registro: <input name="date" type="date" />

<br><br>Tipo de Servicio:

<select name="serv">
<option value="">Seleccione una opcion</option>
<option value="">Proyecto Arquitectonico</option>
<option value="">Asesoria Legal</option>
<option value="">Saneamiento Fisico</option>
<option value="">Gerencia General</option>
</select>

<br><br>Tipo de Archivo:

<select name="proyect">
<option value="">Seleccione una opcion</option>
<option value="">Declaratoria de Fabricao</option>
<option value="">Minuta</option>
<option value="">Carta Notarial</option>
<option value="">Independización</option>
</select>

<br><br><input id="boton" name="boton" type="submit" value="Enviar" />
<br><br><a href="http://polkada.ml/mostrar-lista">LISTAR</a>

</form>