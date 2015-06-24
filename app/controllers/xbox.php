<?php
	class xbox extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mxbox;
			$this->view=new vxbox;
		}
	
	}