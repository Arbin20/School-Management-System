<?php

$db_name = "ismailqemali";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn) {
	die("Dicka shkoi keq! Ju lutemi kontrolloni lidhjen tuaj të bazës së të dhënave!");
} 