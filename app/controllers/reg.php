<?php
	class reg extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mreg;
			$this->view=new vreg;
		}
		
	}