<?php

	session_start() ;
	
	$login = $_SESSION[ 'login' ] ;
	
	session_unset() ;
	session_destroy() ;
	
	header( 'Location: ../templates/accueil/index.html.twig?login=' . $login ) ;
?>