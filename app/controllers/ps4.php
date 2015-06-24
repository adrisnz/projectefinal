<?php
	class ps4 extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mps4;
			$this->view=new vps4;
		}
	
	}