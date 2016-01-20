<?php


define( 'ROOT_DIR', dirname( __FILE__ ) );

$root_url = $_SERVER['HTTP_HOST'];

$root_url = "http://" . str_replace( $_SERVER['DOCUMENT_ROOT'], $root_url, ROOT_DIR );

define( 'ROOT_URL', $root_url );

require( "assets/php/classes/class.autonoma.php" );

$Site = new Autonoma();

