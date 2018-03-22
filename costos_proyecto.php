<!--

Template Name: Costos;

-->

<html>

<head>

<title>Cotizar Proyectos</title>

<meta charset="utf-8">

</head>

<body>



<form name="formulario" method="post" action="">

<p> Calcular el Coste de su Proyecto </p>

<br/>

Área del Terreno: <input type="text" name="area" > m<sup>2</sup>

<br/> <br/>

Número de Pisos: <input type="text" name="pisos" > pisos

<br/> <br/>

<input value="COTIZAR" type="submit" name="enviar" />





</form>





</body>

</html>

 <?php 

if(isset($_POST['enviar'])){

	 $area = $_POST['area'];

$pisos = $_POST['pisos'];

	 

	 $resultado = 0.3 * $area * $pisos * 500;

	 echo " En esta sección te ayudamos a hacerte una idea de cuánto costará construir tu proyecto,<br/>

            basándonos en valores unitarios vigentes.<br/>

            Aplíquese para edificaciones nuevas.<br/> ";

      echo "Costo  : S/." . $resultado  . " soles aproximadamente";

	

}

	

 

?>

