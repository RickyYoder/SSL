<?php

	class welcome extends AppController{
	
		public function __construct(){
			
			$this->getView("header");
			
			$this->getView("modals");
			
			$this->getView("welcome",array(
				"navbar"=>array(
					"Home"=>"#",
					"About Us"=>"#",
					"Contact Us"=>"#"
				)
			));
			
			$this->getView("footer");
		}
		
	}

?>