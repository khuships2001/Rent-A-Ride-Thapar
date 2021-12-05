<?php

$server ="sql206.epizy.com";
$username="epiz_30509031";
$password="nhfAvJTrgZ";
$dbname="epiz_30509031_rentaride";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
   die("Connection Failed:".mysql_connect_error());
}
?>