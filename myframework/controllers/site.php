<?php

	class site extends AppController{
	
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
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact",
					"Log In"=>"/site/login"
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
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact",
					"Log In"=>"/site/login"
				)
			));
			$this->getView("footer");
		}
		
		public function contactFormSubmit(){
			print_r($_REQUEST);
		}
		
		
		public function login(){
			$this->getView("header");
			$this->getView("login",array(
				"pageName"=>"login",
				"navbar"=>array(
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact",
					"Log In"=>"/site/login"
				)
			));
			
		}
		
		public function loginFormSubmit(){
			if($_REQUEST['email'] == "rick.yoder@xbit.technology" && $_REQUEST['password'] == "abc123") echo "Welcome back, Rick!";
			else echo "Error. Incorrect username or password. Please try again.";
		}
	}

?>