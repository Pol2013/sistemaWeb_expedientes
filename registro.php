<!--
 Template Name: Proyectos;

-->


<html>
<head>
<script type="text/javascript">
            function cargarSelect2(valor) {
                 var arrayValores=new Array( 
                     new Array(1,1,"Proyecto Arquitectonico"), 
                     new Array(1,2,"Asesoria Legal"), 
                     new Array(1,3,"Saneamiento Fisico"), 
                     
                     new Array(2,1,"del 2000 al 2010"), 
                     new Array(2,2,"del 2011 al 2017"), 
                     
                     
                     new Array(4,1,"Ancon"),
                     new Array(4,2,"Miraflores"), 
                     new Array(4,3,"San Juan de Lurigancho"), 
                     new Array(4,4,"Villa Maria del Triunfo"), 
                     new Array(4,5,"Comas"), 
                     new Array(4,6,"Santa Anita"), 
                     new Array(4,7,"San Borja"), 
                     new Array(4,8,"La Molina"), 
                     new Array(4,9,"Barranco"), 
                     new Array(4,10,"Chorrillos"), 
                     new Array(4,11,"Ate "), 
                     new Array(4,12,"Cercado de Lima"), 
                     new Array(4,13,"Los Olivos"), 
                     new Array(4,14,"San Martin de Porres"), 
                     new Array(4,15,"Breña"), 
                     new Array(4,16,"Surco"), 
                     new Array(4,17,"Surquillo"), 
                     new Array(4,18,"San Miquel"), 
                     new Array(4,19,"Magdalena del Mar"), 
                     new Array(4,20,"Callao") );
                     
                    
                 if(valor==3) {
                      // desactivamos el segundo select 
                     document.getElementById("select2").disabled=true; 
                 }else{
                   // eliminamos todos los posibles valores que contenga el select2 
                  document.getElementById("select2").options.length=0; 
                   // añadimos los nuevos valores al select2 
                  document.getElementById("select2").options[0]=new Option("Selecciona una opcion", "0");
                     for(i=0;i<arrayValores.length;i++) {
                      // unicamente añadimos las opciones que pertenecen al id seleccionado
                      // del primer select 
                     if(arrayValores[i][0]==valor) {    
                         document.getElementById("select2").options[document.getElementById("select2"                        ).options.length]=new Option(arrayValores[i][2], arrayValores[i][1]); 
                         } 
                     }
                      // habilitamos el segundo select 
                     document.getElementById("select2").disabled=false;
                    } 
            } 
            /** * Una vez selecciona una valor del segundo selecte, obtenemos la información * de los dos                 selects y la mostramos */
            function seleccinado_select2(value) {
                var v1 = document.getElementById("select1"); 
                var valor1 = v1.options[v1.selectedIndex].value; 
                var text1 = v1.options[v1.selectedIndex].text; 
                var v2 = document.getElementById("select2"); 
                var valor2 = v2.options[v2.selectedIndex].value; 
                var text2 = v2.options[v2.selectedIndex].text;
                
                alert("Se ha seleccionado el valor "+valor1+" ("+text1+") del primer select y el valor "                  +valor2+" ("+text2+") del segundo select");
            }
            
             function activa(v){ 
         if(v==1)document.formulario.otros.disabled = true; 
           else 
         if(v==3)document.formulario.otros.disabled = false; 
          else 
         if(v==4)document.formulario.otros.disabled = true;
          else 
         if(v==2)document.formulario.otros.disabled = true;
           }
   

</script>
</head>

Busqueda de Historial Proyectual
<form id="formulario" name="formulario"><select id="select1" name="select1" onchange="cargarSelect2(this.value);activa(this.value);">
<option selected="selected" value="0">Selecciona un Servicio</option>
<option value="1">Tipo de Archivo</option>
<option value="2">Año</option>
<option value="3">DNI</option>
<option value="4">Distrito</option>
</select><select id="select2" disabled="disabled" name="select2" onchange="seleccinado_select2();">
<option value="0">Selecciona un filtro</option>
</select>

Ingrese el dni?
<input id="otros" name="otros" type="hide" />
<br>
<hr />

</form>
</html>

 <html>
   
 <head>
   
     <meta charset="UTF-8">
     
   <title></title>
   
 </head>
 
  
   <body>  
   <table>
       
     <tr>
         
       <td>Apellido</td>
       
         <td>Nombre</td>
     
           <td>DNI</td>
        
        <td>Distrito</td>
            
    <td>Fecha</td>
    
      <td>Servicio</td>
      
        <td>Tipo de archivo</td>
        
          <td>Nombre del archivo</td>
    
        </tr>
 
 <?php
      
  include 'config.php';
    
    $db=new Conect_MySql();
       
     $sql = "SELECT id, Apellido, Nombre, DNI, Distrito, Fecha, Servicio, Tipo_archivo
FROM  wp_registro_proyecto ";
    
        $query = $db->execute($sql);
     
       while($datos=$db->fetch_row($query)){?>
      
      <tr>
           <td><?php echo $datos['id']; ?></td>   
          <td><?php echo $datos['Apellido']; ?></td>
          <td><?php echo $datos['Nombre']; ?></td>
          <td><?php echo $datos['DNI']; ?></td>
          <td><?php echo $datos['Distrito']; ?></td>
           <td><?php echo $datos['Fecha']; ?></td>
            <td><?php echo $datos['Servicio']; ?></td>
             <td><?php echo $datos['Tipo_Archivo']; ?></td>
            <td><a href="archivo.php?id=<?php echo $datos['id']?>">

<?php echo $datos['archivo']; ?></a></td>
     
       </tr>
                
          <?php  } ?>
		  </table>
  
  </body>


</html>