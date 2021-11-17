<?php

	session_start() ;
	
	$login = $_SESSION[ 'login' ] ;
	
	session_unset() ;
	session_destroy() ;
	
	header( 'Location: ../templates/accueilindex.html.twig?login=' . $login ) ;
?>