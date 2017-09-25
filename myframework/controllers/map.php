<?php

	class map extends AppController{
	
		public function __construct($parent){
			$this->parent = $parent;
		}
		
		public function index(){
			//index method
			//__construct is just used to define variables and instantiate the class as a whole
			
			
			$this->getView("header",array(
				"pageName"=>"map"
			));
			
			$this->getView("map",array());
			
			$this->getView("footer");
		}
		
	}

?>