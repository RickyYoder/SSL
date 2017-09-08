<?php

	class welcome extends AppController{
	
		public function __construct(){
			
		}
		
		public function index(){
			//index method
			//__construct is just used to define variables and instantiate the class as a whole
			
			$this->getView("header");
			
			$this->getView("modals");
			
			$this->getView("welcome",array(
				"navbar"=>array(
					"Home"=>"#",
					"About Us"=>"#",
					"Contact Us"=>"#",
					"Affiliates"=>"#"
				)
			));
			
			$this->getView("footer");
		}
		
	}

?>