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
					"Contact"=>"/site/contact"
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
			
			$random = substr( md5(rand()), 0, 7);
			$_SESSION['cap'] = $random;
			
			$this->getView("header");
			$this->getView("contact",array(
				"pageName"=>"contact",
				"cap"=>$random,
				"navbar"=>array(
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact"
				)
			));
			$this->getView("footer");
		}
		
		public function contactFormSubmit(){
			if($_REQUEST['cap'] != $_SESSION['cap']) die("Invalid captcha");
		}
		
		
		public function login(){
			if(isset($_SESSION['loggedIn']) && isset($_SESSION['userId'])){
				header("Location:/profile");
				exit();
			}
			$this->getView("header");
			$this->getView("login",array(
				"pageName"=>"login",
				"navbar"=>array(
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact"
				)
			));
			
		}
		
		public function loginFormSubmit(){
			if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
				
				$email = strtolower($_REQUEST['email']);
				$password = $_REQUEST['password'];
				$bio = null;
				
				//split the file by line
				$users = explode("\n",file_get_contents("./assets/users.txt"));
				
				
				//loop through each line
				for($x = 0; $x < count($users); $x++){
					$user = explode("|",$users[$x]);
					/*
						email => 0
						password => 1
						bio => 2
					
					*/
					
					if($email == strtolower($user[0]) && $password == $user[1]){
						$bio = $user[2];
						
						break;
					}
				}
				
				if($email && $password && $bio != null){
					$_SESSION['loggedIn'] = true;
					$_SESSION['email'] = $email;
					$_SESSION['bio'] = $bio;
				}
				else{
					echo "Error. Incorrect email/password. Please try again.";
				}
			}
			else echo "Error. No email or password entered. Please try again.";
		}
		
		public function logout(){
			unset($_SESSION['loggedIn']);
			unset($_SESSION['userId']);
			header("Location:/site/login");
		}
	}

?>