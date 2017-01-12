<?php
$modelo1="";
$modelo1="$_POST['modelo1']";
mysql_connect("","")
mysql_select_db(database_name)

if ($modelo1!="") {
	$busqueda$=mysql_query("SELECT * FROM telefonosMoviles WHERE modelo LIKE '%".$modelo1."%'");

	while ($m=mysql_fetch_array($busqueda)) {
		echo $m['peso']
	}
}
?>