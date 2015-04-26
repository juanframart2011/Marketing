<?php
class curriculum{

	public function carga_imagenes( $imagen, $ruta, $titulo, $palabra_inicial ) {
		
		$imagen_nombre = $_FILES[$imagen]['name'];
		$imagen_temp = $_FILES[$imagen]['tmp_name'];

		
		
		$imagen_validar = $this->imagen_obtener_extension( $imagen_nombre );
		$imagen_validar_extension = $imagen_validar;
		
		$imagen_nombre_limpiar = $this->limpiar_string( $titulo );
		$imagen_nombre_final = $palabra_inicial.$imagen_nombre_limpiar.$imagen_validar_extension;
		
		$ruta_final = $ruta."/".$imagen_nombre_final;
		$guardar_imagen = move_uploaded_file( $imagen_temp, $ruta_final );
		
		return $imagen_nombre_final;
	}

	public function imagen_obtener_extension( $imagen )  {
		
		$extension = pathinfo( $imagen, PATHINFO_EXTENSION );
		$extension = ".".$extension;
		
		return $extension;
	}

	public function limpiar_string( $string ) {
		
		//Para quitar los acentos y demás caracteres especiales en letras, y algunos otros
		$buscar = explode( ",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u,ñ,Á,É,Í,Ó,Ú,À,È,Ì,Ò,Ù,Â,Ê,Î,Ô,Û,Ä,Ë,Ï,Ö,Ü,Ñ,_,-,?,¿,¡,´,`,',#,!,@,&,.,(,),=,$,%,\,/" );
		$limpiar = explode( ",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u,n,A,E,I,U,O,A,E,I,O,U,A,E,U,O,U,A,E,I,O,U,N,,,,,,,,,,,,,,,,,,,,,-,-" );
		$string = str_replace( $buscar, $limpiar, $string );
			
		//Quitar los caracteres especiales que no son alfanuméricos
		$string = preg_replace( '/[^a-zA-Z0-9_ \-()\/%-&]/s', '', $string );
			
		//Quitar espacios y espacios dobles
		$string = trim( $string );
		$string = preg_replace( '/\s+/', ' ', $string );
			
		//Convertir los espacios en guión
		$string = strtr( $string, " ", "-" );
			
		//Quitar las comillas dobles, sencillas y "especiales"
		$string = str_replace( "'", "", $string );
		$string = str_replace( '"', "", $string );
		$string = str_replace( '“', "", $string );
		$string = str_replace( '”', "", $string );
			
		//Quitar puntos y comas
		$string = str_replace( array( '.', ',' ), '' , $string );
			
		//Convertir a minúsculas
		$string = mb_strtolower( $string );
		$string = strtolower( trim( $string, '-' ) );
		
		return $string;
	}

	public function obtener_ambiente(){
		
		if( $_SERVER['SERVER_NAME'] == "localhost" ) {
			
			$ruta = "C:/xampp/htdocs/Animex_prueba/";
		} else {
			//Prod
			$ruta = "/var/www/html/dev/";
		}
		
		return $ruta;
	}
}
?>