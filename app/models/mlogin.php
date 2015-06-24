<?php

class mlogin extends Model {



 function __construct(){
      parent::__construct();
    }

		function login($email,$password){


            /**
*@return esta funcion hace un login 
*/
  try{
     $sql="SELECT * FROM usuarios WHERE email=? AND password=?";
     $query=$this->db->prepare($sql);
     $query->bindParam(1,$email);
     $query->bindParam(2,$password);

     $query->execute();

     if($query->rowCount()==1){



session_start();

$_SESSION['email']=$_POST['email'];
$email=$_SESSION['email'];

           $connect  = mysqli_connect("localhost","2daw12_minimal2","aMT9F9WtoW","2daw12_minimal") or die("Error " . mysqli_error($link));  
mysqli_set_charset($connect,"utf8");

        if (!$connect) {
                die(mysqli_connect_error());
            }


                mysqli_select_db($connect, "minimal");

         



    $idusuariosql = mysqli_query($connect, "SELECT usuarios.id_usuario FROM usuarios WHERE usuarios.email='$email' ");
$row = mysqli_fetch_array($idusuariosql);

$idusuario = $row['id_usuario'];


$_SESSION['idusuario']=$idusuario;

$_SESSION['islogged']=True;

//$_SESSION['contrasenya']=$_POST['password'];


           //Session::set('islogged',TRUE);
           //Session::set('email',$email);

           return TRUE;

     }
     else {
         //Session::set('islogged',FALSE);
          return FALSE;}
    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
   }
}


}


 