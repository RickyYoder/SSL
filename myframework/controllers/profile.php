<?php
	class profile extends AppController{
		
		public function __construct($parent){
			$this->parent = $parent;
			
			if(isset($_SESSION['loggedIn']) && isset($_SESSION['userId'])){
				
			}else{
				header("Location: /site/login?pleaseLogIn=1");
				
				die();
				exit();
			}
			
		}
		
		
		public function index(){
			
			$userData = $this->parent->getModel("users")->select("SELECT * FROM `users` 
			WHERE `id`=".intval($_SESSION['userId'])."");
			
			$this->getView("header");
			$this->getView("profile",array(
				"pageName"=>"profile",
				"navbar"=>array(
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact"
				),
				"userData" => $userData[0]
			));
		}
		
	}
?>