<?php
	class profile extends AppController{
		
		public function __construct(){
			
			if(isset($_SESSION['loggedin'])){
				
			}else{
				header("Location: /site");
				
				die();
				exit();
			}
			
		}
		
		
		public function index(){
			
			$this->getView("header");
			$this->getView("profile",array(
				"pageName"=>"profile",
				"navbar"=>array(
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact",
					"Log Out"=>"/site/logout"
				)
			));
		}
		
	}
?>