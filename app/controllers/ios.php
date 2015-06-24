<?php
	class ios extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mios;
			$this->view=new vios;
		}
	
	}