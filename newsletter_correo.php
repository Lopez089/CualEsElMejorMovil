<?php	
	$destino='aragonlopezjuan87@gmail.com';
        $asunto= $_POST['correo'];
        
        
        $comentario="email:\r"  .$asunto  ;
           
        
        $headers = 'From: '.$destino."\r\n".
            'Reply-To: '.$destino."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($destino, $asunto, $comentario, $headers);
        echo "su informacion se registro";

?>


