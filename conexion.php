<?php
	// $conectar = mysql_connect("localhost", "root","qw12rt34");
	// if(!$conectar){
	// 	die("sin conexion");
	// }
	
	// mysql_query("SET NAMES 'utf8'");
	
	// $selectdb = mysql_select_db("flrio_1",$conectar);
	// if(!$selectdb){
	// 	die("sin conexion");
	// }
	
	
?>  
<?php

	$conectar = mysql_connect("localhost", "v0020840","meTO73zuvu");

	if(!$conectar){
		die("sin conexion");
	}
	
	mysql_query("SET NAMES 'utf8'");
	
	$selectdb = mysql_select_db("v0020840_baseconsejos",$conectar);
	if(!$selectdb){
		die("sin conexion");
	}
	
	
?>

