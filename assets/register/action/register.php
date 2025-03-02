<?php

require_once("db.php");

echo $name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name) || empty($email) || empty($password)){
   echo "Заполните все поля";
} else{
   $sql = "INSERT INTO 'users' (name,email,password) VALUES ('$name', 'email', 'password')";
  if ($conn->query($sql) === TRUE){
   echo "Успешная регистрация";
  } else{
   echo "Ошибка :" . $conn->error;
  }
}

?>