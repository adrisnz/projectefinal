<?php
	class login extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mlogin;
			$this->view=new vlogin;
		}



				function login(){

   if(isset($_POST['email'])){
         $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
         $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
         $user=$this->model->login($email,$password);
        


         if ($user== TRUE){

if($_SESSION['idusuario']==1)
{
               // al panel de administrador

echo '<script>location.href="'.APP_W.'ADMIN"</script>';

                 $_SESSION['admin']='TRUE';

}else{
echo '<script>location.href="'.APP_W.'home"</script>';

}
               // cap al panell



         }
         else{

             // no hi és l'usuari, cal registrar
echo '<script>location.href="'.APP_W.'reg"</script>';
             }
   }
 }
	
	}