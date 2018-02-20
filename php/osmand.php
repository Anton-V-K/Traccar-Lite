<?php

if ( !defined('ABSPATH') )
define( 'ABSPATH', dirname(__FILE__) . '/' );
require_once( ABSPATH . 'config.php' );
require_once( ABSPATH . 'log.php' );

//_LOG('$_REQUEST = ' . print_r($_REQUEST, true));
_LOG('$_REQUEST = ' . json_encode($_REQUEST));
/*
_LOG('id='        . $_REQUEST['id']);
_LOG('lon='       . $_REQUEST['lon']);
_LOG('timestamp=' . $_REQUEST['timestamp']);
_LOG('hdop='      . $_REQUEST['hdop']);
_LOG('altitude='  . $_REQUEST['altitude']);
_LOG('speed='     . $_REQUEST['speed']);
*/

?>
