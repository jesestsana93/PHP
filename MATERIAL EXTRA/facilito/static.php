<?php 

	class Pagina{

		//Atributos
		public $nombre="Codigo facilito";
		public static $url="www.codigofacilito.com";

		//Metodos
		public function Bienvenida(){
			echo "Bienvenido a <b> ".$this->nombre. "</b> la pagina es <b>".Pagina::$url."<b><br>";
		}

		public static function Bienvenida2(){
			echo "Bienvenidos ".self::$url;
		}
	}

	class Web extends Pagina{

	}

	$pagina = new Pagina();
	$pagina->Bienvenida();
	Web::Bienvenida2();
?>