<?php header("Content-type: text/css"); 

$color[0]= '#ff0000';
$color[1]= '#00ff00';
$color[2]= '#0000ff';


$i= rand(0,2);

$url= 'imagen.jpeg';

?>
body{

background-image: url('<?php echo $url ?>'); 


	}
	

