<?php
	$host = "127.0.0.1"; //www.miauto.com.mx
	$port = "5432";
	$dbname = "autobd";
	$user = "admin_auto"; //postgres
	$password = "miauto";

	$connect = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password."");
	if ($connect) { // si la conexion fue exitosa
		echo "Conectado :D.<br/>";
	} else{
		echo "ERROR :'/'.<br/>";
		exit();
	}
?>
