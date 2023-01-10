<?php

require 'db.php';

$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$email =$_POST['email'];
$password =$_POST['password'];

$insertar = "INSERT INTO registro VALUES ('null','$nombre','$apellido','$email','$password')";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script>location.href = 'loginCursoB.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'inicio.html';
    </script>";
}




?>