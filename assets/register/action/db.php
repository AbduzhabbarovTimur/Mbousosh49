<?php

$servername = "localhost";
$username = "timkaswi";
$password = "9suAF8!1aHbv&";
$dbname = "timkaswi_locol";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
   die("Connection Failed");
} 
else{
   echo "Успех";
}

?>