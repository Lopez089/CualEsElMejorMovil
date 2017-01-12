<?php	
	$destino='aragonlopezjuan87@gmail.com';
		$marca1= $_POST['marca1'];
        $modelo1= $_POST['modelo1'];

        $marca2= $_POST['marca2'];
        $modelo2= $_POST['modelo2'];

        $marca3= $_POST['marca3'];
        $modelo3= $_POST['modelo3'];

        $marca4= $_POST['marca4'];
        $modelo4= $_POST['modelo4'];

    	$Review=$_POST['Review'];
    	$Diseño=$_POST['Diseño'];
    	$potencia=$_POST['potencia'];
    	$camara=$_POST['camara'];
    	$conectividad=$_POST['conectividad'];
    	$bateria=$_POST['bateria'];
    	$software=$_POST['software'];

    	$No=$_POST['No'];
    	$markt=$_POST['markt'];
    	$ebay=$_POST['ebay'];
    	$amazon=$_POST['amazon'];
    	$Redcoon=$_POST['Redcoon'];
    	$rakuten=$_POST['rakuten'];

        $comentario="Marca 1:".$marca1."\r\n".
        			"modelo 1:".$modelo1."\r\r".
        			"Marca 2:".$marca2."\r\n".
        			"modelo 2:".$modelo2."\r\r".
        			"Marca 3:".$marca3."\r\n".
        			"modelo 3:".$modelo3."\r\r".
        			"Marca 4:".$marca4."\r\n".
        			"modelo 4:".$modelo4."\r\r".
        			"caracteristicas:"."\r\n".$Review."\r\n".$Diseño."\r\n".$potencia."\r\n".$camara."\r\n".$conectividad."\r\n".$bateria."\r\n".$software."\r\r".
      				"compras:"."\r\n".$No."\r\n".$markt."\r\n".$ebay."\r\n".$amazon."\r\n".$Redcoon."\r\n".$rakuten."\r\r".

        $headers = 'From: '.$destino."\r\n".
            'Reply-To: '.$destino."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($destino, $asunto, $comentario, $headers);
        echo "El comparador no esta disponible en su país, estamos ultimando los últimos detalles para poder dar un buen servicio";

?>