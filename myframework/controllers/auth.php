<?php

	class auth extends AppController{
		
		public function __construct($parent){
			$this->parent = $parent;
		}
		
		
		public function login(){
			
			if($_REQUEST['email'] && $_REQUEST['password']){
				
				$data = $this->parent->getModel("users")->select("
				SELECT * FROM `users`
				WHERE `email` = :email AND `password` = :password
				",array(
					":email"=>$_REQUEST['email'],
					":password"=>sha1($_REQUEST['password'])
				));
				
				
				if($data){
					//set sessions
					$_SESSION['loggedIn'] = 1;
					$_SESSION['userId'] = $data[0]['id'];
					
				
					
					header("Location:/profile");
					
				}
				else{
					
					header("Location:/site/login?err=Incorrect login info.");
					
				}
			}
			else{
			
				die("Invalid request");
				
			}
		}
	}

?>