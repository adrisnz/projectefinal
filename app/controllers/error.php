<?php
	final class error extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new merror;
			$this->view=new verror;
		}
		function home(){
			
			
			
		}
	}