<?php

require 'db.php';

$nombre =$_POST['email'];
$password =$_POST['password'];



$consulta="SELECT* FROM registro where email = '$nombre' and password = '$password'";
$resultado=mysqli_query($conectar,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:examencursoA.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h6 class="bad">ERROR DE AUTENTIFICACION</h6>
  <?php
}


?>