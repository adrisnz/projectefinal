<?php
/**
*@author Adria Sanchez Caballe
*/
	final class mhome extends Model{
		
		function __construct($params){
			parent::__construct($params);
			$this->db=DB::singleton();
			// a litle prove in--->out
			$this->data_out=$params;
		}
		function get_out(){
			return $this->data_out;
		}
		

			function reg($email,$password){ 

      /**
*@return esta funcion inserta un usuario en la base de datos
*/
  try{
     $sql="INSERT INTO usuarios (email, password) VALUES(?, ?)";
     $query=$this->db->prepare($sql);
     $query->bindParam(1,$email);
     $query->bindParam(2,$password);  
     $query->execute();



     if($query->rowCount()==1){



        //   Session::set('islogged',TRUE);
          // Session::set('email',$email);

$dominio=$_SERVER['HTTP_HOST'];
$linkgenerarurl='http://'.$dominio.'/projecte/login';
$Name = "Minimal.com"; 
 $recipient = $email;
$mail_body = "Hola, gracias por registraros, haced click aquí para acceder al login

".$linkgenerarurl;
 $subject = "Registro - Minimal.com";
$header = "From:minimal@minimal.com"; 


mail($recipient, $subject, $mail_body, $header);



           return TRUE;

     }
     else {
        // Session::set('islogged',FALSE);
          return FALSE;}
    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
   }
}



function nota($juego,$nota_usuarios)
{
  
}



	}