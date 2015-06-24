<?php
	class recover extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mrecover;
			$this->view=new vrecover;
		}



				function recover(){

   if(isset($_POST['email'])){
         $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
         $user=$this->model->recover($email);
        


         if ($user== TRUE){

echo 'Se ha enviado un correo';




               // cap al panell
         }
         else{
echo 'Se ha enviado un correo';

             // no hi és l'usuari, cal registrar
              // header('Location:'.APP_W.'reg');
             }
   }
 }
	
	}