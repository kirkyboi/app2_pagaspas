<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'crud_with_login';
$databaseUsername = 'kirkpagaspas';
$databasePassword = 'kirkpagaspas';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>
