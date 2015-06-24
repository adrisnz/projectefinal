<?php
session_start();
$nota_nueva = $_POST["notanueva"];




   $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }




                mysqli_select_db($connect, "minimal");

$query = "UPDATE analisisusuarios SET nota='$nota_nueva' WHERE analisisusuarios.usuario=1 AND analisisusuarios.videojuego=5"; 

if($connect->query($query)){


}else{
}






?>