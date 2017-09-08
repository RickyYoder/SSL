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
				"pageName"=>"welcome",
				"navbar"=>array(
					"Home"=>"welcome",
					"About"=>"#",
					"Contact"=>"contact",
					"Affiliates"=>"#"
				)
			));
			
			$this->getView("footer");
		}
		
		public function welcome(){
			//just executes index() method
			
			$this->index();
		}
		
		public function contact(){
			
			//contact method
			//show contact form instead of landing (index) page
			
			$this->getView("header");
			$this->getView("contact",array(
				"pageName"=>"contact",
				"navbar"=>array(
					"Home"=>"welcome",
					"About"=>"#",
					"Contact"=>"contact",
					"Affiliates"=>"#"
				)
			));
			$this->getView("footer");
		}
		
		
		public function ajaxParse(){
			print_r($_REQUEST);
		}
	}

?>