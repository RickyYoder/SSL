<?php

	class welcome extends AppController{
	
		public function __construct(){
			
			$this->getView("header");
			
			$this->getView("welcome");
		}
		
	}

?>