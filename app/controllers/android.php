<?php
	class android extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mandroid;
			$this->view=new vandroid;
		}
	
	}