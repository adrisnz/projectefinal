<?php
	class contacto extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mcontacto;
			$this->view=new vcontacto;
		}
	
	}