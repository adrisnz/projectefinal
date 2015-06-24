<?php
	class panell extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mpanell;
			$this->view=new vpanell;
		}




		 	function modificarcorreu(){

         $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

         $user=$this->model->modificarcorreu($email);


                  if ($user== TRUE){
echo '<script>location.href="'.APP_W.'home"</script>';

                  }





 }


 	function eliminarusuari(){       /**
*@return esta funcion llama al modelo para eliminar un usuario
*/


         $user=$this->model->eliminarusuari();

 }



	}