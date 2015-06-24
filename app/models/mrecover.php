<?php

class mrecover extends Model {



 function __construct(){
      parent::__construct();
    }

		function recover($email){


            /**
*@return esta funcion mira si existe el usuario y devuelve true en caso de ser asi
*/
  try{
     $sql="SELECT * FROM usuarios WHERE email=?";
     $query=$this->db->prepare($sql);
     $query->bindParam(1,$email);

     $query->execute();

     if($query->rowCount()==1){


$_SESSION['emailrecovery']=$_POST['email'];
//$_SESSION['contrasenya']=$_POST['password'];

$token = uniqid('', true);
     $sql="UPDATE usuarios SET token='$token' WHERE email=?";
$dominio=$_SERVER['HTTP_HOST'];
$linkgenerarcontra='http://'.$dominio.'/recover/recover/'.$email.'/'.$token;

$Name = "Minimal.com"; 
 $recipient = $email;
$mail_body = "Hola, haced click en el siguiente enlace para escoger un nuevo password:

".$linkgenerarcontra;
 $subject = "Nuevo password - Minimal.com";
$header = "From:minimal@minimal.com"; 


mail($recipient, $subject, $mail_body, $header);

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

  function newpass($email, $token){


            /**
*@return esta funcion mira si existe el usuario y devuelve true en caso de ser asi
*/
  try{
     $sql="SELECT * FROM usuarios WHERE email=?";
     $query=$this->db->prepare($sql);
     $query->bindParam(1,$email);

     $query->execute();

     if($query->rowCount()==1){


$_SESSION['emailrecovery']=$_POST['email'];
//$_SESSION['contrasenya']=$_POST['password'];

$token = uniqid('', true);
     $sql="UPDATE usuarios SET token='$token' WHERE email=?";
$dominio=$_SERVER['HTTP_HOST'];
$linkgenerarcontra='http://www.'.$dominio.'/recover/recover/'.$email.'/'.$token;

$Name = "Minimal.com"; 
 $recipient = $email;
$mail_body = "Hola, haced click en el siguiente enlace para escoger un nuevo password:

".$linkgenerarcontra;
 $subject = "Nuevo password - Minimal.com";
$header = "From:minimal@minimal.com"; 


mail($recipient, $subject, $mail_body, $header);

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


 