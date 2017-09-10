<?php
	class profile extends AppController{
		
		public function __construct(){
			
			if(isset($_SESSION['loggedin']) && isset($_SESSION['email'])){
				
			}else{
				header("Location: /site/login?pleaseLogIn=1");
				
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