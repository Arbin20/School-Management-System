<?php

$db_name = "schooldb";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn) {
	die("Dicka shkoi keq! Ju lutemi kontrolloni lidhjen tuaj me databazën!");
} 
