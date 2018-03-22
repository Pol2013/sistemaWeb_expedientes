<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'config.php';
        $db=new Conect_MySql();
            $sql = "select*from documentos where id=".$_GET['Cod_documento'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['Nombre del archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="archivos/<?php echo $datos['Nombre del archivo']; ?>"></iframe>
                  <?php } } ?>
    </body>
</html>
 