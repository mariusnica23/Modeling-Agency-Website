<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "agentie_fotomodele";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
