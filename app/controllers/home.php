<?php
	final class home extends Controller{
		
		function __construct($params){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mhome($params);
			$this->view=new vhome;
		}
		function home(){
			//we can comprove that we pass the parameters
			//var_dump($this->params);
			//echo "   Action";
			//Accedim a valors de configuració
			//Coder::code_var($this->model->get_out());
			//echo "Pagina generada en ".(microtime() - $this->conf->time)." segundos";

			
		}
		/*
		function login(){
			$user=$_POST['email'];
			echo $user;
		}*/




 		function tancar(){

session_destroy();


echo '<script>location.href="'.APP_W.'home"</script>';

 }


 function nota($juego){

      $nota_usuarios=filter_input(INPUT_POST, 'nota_usuarios', FILTER_SANITIZE_STRING);


	$user=$this->model->nota($juego,$nota_usuarios);


 }

 function reg(){

      $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
      $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
	$user=$this->model->reg($email,$password);

         if ($user==TRUE){
echo '<script>location.href="'.APP_W.'login"</script>';



  }
         else{
echo 'error de registre';
 }


	}

}