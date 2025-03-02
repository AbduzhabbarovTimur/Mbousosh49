<?php

require_once("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)){
   echo "Заполните все поля";
} else{
   $sql = "SELECT * FROM 'users' WHERE email = '$email' AND password = '$password'";
   $result = $conn->query($sql);
}
?>