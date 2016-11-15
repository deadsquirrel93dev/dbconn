<?php

$host = "";
$login = "";
$pswd = "";
$databse = "";
 
function Sql_connect($host, $login, $pswd, $database){
	mysql_connect($host, $login, $pswd);
	mysql_select_db($database);
}

function Sql_query($sql){
	Sql_connect($host, $login, $pswd, $database);
	$result = mysql_query($sql);
	$arResult = [];
	while (false !== $row = mysql_fetch_assoc($result)){
		$arResult[] = $row;
	}
	return $arResult;
}