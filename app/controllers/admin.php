<?php
	class admin extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new madmin;
			$this->view=new vadmin;
		}
	
	}