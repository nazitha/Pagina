<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("No hay conexion: " .mysqli_connect_error());
}

$nombre = $_POST["user"];
$pass = $_POST["pass"];

$query = mysqli_query($conn, "SELECT * FROM prueba where usuario ='".$nombre."' and contra = '".$pass."'");

$nr = mysqli_num_rows($query);
if($nr == 1)
{
    echo "<script> window.location= 'menu.html' </script>";
}
else if($nr == 0)
{
    echo "<script> alert('Error'); window.location= 'index.html' </script>";
}
?>