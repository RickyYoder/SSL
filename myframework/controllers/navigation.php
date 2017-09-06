<?php

	class navigation extends AppController{
	
		public function __construct(){
			
			$this->getView("navigationHeader");
			$this->getView("navigationBody",array(
				"navbar"=>array(
					"Homepage"=>"#",
					"About Us"=>"#",
					"Contact Us"=>"#"
				)
			));
			$this->getView("navigationFooter");
			
		}
		
	}

?>