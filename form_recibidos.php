<?php
$tipo_form = $_POST["tipo_form"];
if( $tipo_form == 1 ){

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$estado = $_POST["estado"];
	@$telefono = $_POST["telefono"];
	@$empresa = $_POST["empresa"];
	$comentario = $_POST["comentario"];

	$html = '<div align="center">Datos Contacto</div><br>';
	$html.= 'Nombre : '.$nombre.'<br>';
	$html.= 'Email : '.$email.'<br>';
	
	
	if( !empty( $telefono ) ){

		$html.= 'Telefono : '.@$telefono.'<br>';
	}
	if( !empty( $empresa ) ){

		$html.= 'Empresa : '.@$empresa.'<br>';
	}
	$html.= 'Estado : '.$estado.'<br>';
	$html.= 'Comentario : '.$comentario.'<br>';

	$adireccion = 'contacto@tmkresearch.com';
	$comentario = "Registro de Comentario";//comentario
	$asunto = "Registro de Comentario";//asunto
}
else{

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$edad = $_POST["edad"];
	$estado = $_POST["estado"];

	$html = '<div align="center">Curriculum</div><br>';
	$html.= 'Nombre : '.$nombre.'<br>';
	$html.= 'Email : '.$email.'<br>';
	$html.= 'Telefono : '.$telefono.'<br>';
	$html.= 'Edad : '.$edad.'<br>';
	
	$html.= 'Estado : '.$estado.'<br>';

	$adireccion = 'juanframart2011@hotmail.com';
	$comentario = "Reclutamiento de Personal";//comentario
	$asunto = "Reclutamiento de Personal";//asunto

	include( 'clase_curriculum.php' );

	
	$carga_imagen = new curriculum;
	
	$ruta_actual = 'Curriculum';
	
	$curriculum = $carga_imagen->carga_imagenes( 'curriculum', $ruta_actual, $nombre, 'curriculum_' );
}

$nombre = $nombre;//quien envia el correo
$demail = "Test Marketing SC";//asunto
$cabeceras = "Content-type: text/html";//tipo de texto en el correo 

$dedireccion = $email;
$comentario = trim($comentario);


if( mail( $adireccion, $asunto, $html, $cabeceras ) ){

	echo 'Felicidades sus datos ya quedaron registrados en el sistema';
}
else{

	echo 'Disculpe ocurrio un error vuelva a intentarlo por favor';
}

?>