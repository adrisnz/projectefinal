<?php 

session_start();


if ($_SESSION['loggedin'] != True) 
{
   header("location:home.php");
   exit;
}



if (!isset($_GET['juego'])) {

echo 'No habeis indicado qué juego deseais modificar';
	die;
}else{

$juego=$_GET['juego'];


          $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }


                mysqli_select_db($connect, "minimal");




    $idusuariosql = mysqli_query($connect, "SELECT usuarios.id_usuario FROM usuarios WHERE usuarios.email='$email' ");
$row = mysqli_fetch_array($idusuariosql);

$idusuario = $row['id_usuario'];









}



