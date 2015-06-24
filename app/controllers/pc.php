<?php
	class pc extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mpc;
			$this->view=new vpc;
		}
	
	}