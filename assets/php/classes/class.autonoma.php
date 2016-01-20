<?php


class Autonoma {

	public static $version = 0.1;

	function block( $name ) {

		include_once( ROOT_DIR . "/assets/php/blocks/" . $name . ".php" );

	}

	function __construct() {

		self::block('header');

			if( self::$version < 1.0 ) Autonoma::block( 'beta_badge' );

			$request = $_SERVER['REQUEST_URI'];

		  $params = explode("/", $request);

		  if( $params[ count($params) - 1 ] ) {

		  	include_once( ROOT_DIR . "/pages/" . $params[ count($params) - 1 ] . ".php" );

		  } else {

				include_once( ROOT_DIR . "/pages/" . "index.php" );

		  }



		self::block('footer');

	}
}

 ?>