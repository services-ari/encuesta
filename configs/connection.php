<?php

# nombre del host
define("HOSTNAME", "localhost");

# nobmre de usuario base de datos
define("USERNAME", "tienrtwx");

# contraseña de la base de datos
define("PASSWORD", "oCwNW3Jwq3nr");

# Nombre de la base de datos
define("DATABASE", "tienrtwx_encuesta1");

# Tables' Prefix | designado
define('prefix', 'puerto_');


# No es necesario cambiar nada debajo de esta línea
$db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if($db->connect_errno){
	echo "No se pudo conectar a MySQL : (" . $db->connect_errno . ") " . $db->connect_error;
}


$sql_mode = $db->query("SELECT @@GLOBAL.sql_mode;");
$rs_mode = $sql_mode->fetch_assoc();
if(!empty($rs_mode["@@GLOBAL.sql_mode"])) {
	$db->query("SET GLOBAL sql_mode='';");
}
