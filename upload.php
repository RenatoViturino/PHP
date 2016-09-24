<?php

include 'config_upload.inc';
foreach ($_FILES["arquivos"]["error"] as $key => $error) {
   
       $destino = "../fotos/".$_FILES["arquivos"]["name"][$i];
   
  
    move_uploaded_file( $_FILES["arquivos"]["tmp_name"][$i], $destino );
 
    #Próximo arquivo a ser analisado
    $i++;
}
?>