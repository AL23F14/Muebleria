<?php
include("conexion.php");

$nombre=$_POST("usuario");
$email=$_POST("correo");
$pass=$_POST("passq");

//Identificación del login para poder ingresar
if(isset($_POST["btnIniciar"])){
    $query=mysqli_query($con, "SELECT * FROM usuarios WHERE name='$nombre' AND password='");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        echo "<script> alert('Bienvenido $nombre'); window.location='listado.html' </script>";
    }
    else{
        echo "<script> alert('El usuario no existe'); window.location='index.html' </script>";
    }
}

//Identificación del login para poder registrar un usuario
if(isset($_POST["btnRegistrar"])){
    $sqlgraba="INSERT INTO 'usuarios'('name','email','password') values ('$nombre','$email','$pass')";

    if(mysqli_query($con,$sqlgraba)){
        echo "<script> alert('Registro con exito $nombre'); window.location='listado.html' </script>";
    }
    else{
        echo "Error: ".$sql."<br>".mysql_error($con);
    }
}
?>