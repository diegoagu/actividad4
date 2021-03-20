<?php 
    $asunto = $_POST['asunto'];
    $asunto.= ".txt";
    $contenido = $_POST['contenido'];
    $accion= $_POST['accion'];
    if($accion=="Crear Archivo"){
  
    $file= fopen($asunto, 'a+' ) or die("error al intentar crear archivo");
    fwrite($file, $contenido);

echo "su archivo fue creado satisfactoriamente";

fclose($file);}
    
    
   if($accion=="Crear Directorio"){
        
        if(isset($_POST['nomdirec'])){
            if(!empty($_POST['nomdirec'])){
                $ndire=$_POST['nomdirec'];
                if(!file_exists($ndire)){
                    mkdir($ndire);
                    echo "su directorio fue creado satisfactoriamente";
                }
            }
        }
    }
   

?>
 <!DOCTYPE html>
    <html lang="en">
    <a href="Archivo.html"><button type="button">VOLVER</button></a>
    </html>