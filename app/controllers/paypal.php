<?php
	class paypal extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mpaypal;
			$this->view=new vpaypal;
		}
	
	}