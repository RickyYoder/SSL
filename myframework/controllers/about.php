<?php

	class about extends AppController{
	
		public function __construct($parent){
			$this->parent = $parent;
		}
		
		public function showList(){
			//index method
			//__construct is just used to define variables and instantiate the class as a whole
			
			$fruitData = $this->parent->getModel("fruits")->select(
				"SELECT * FROM `fruits`
			");
			
			$this->getView("header",array(
				"pageName"=>"about"
			));
			
			$this->getView("about",array(
				"navbar"=>array(
					"Home"=>"/",
					"About"=>"#",
					"Contact"=>"/site/contact"
				),
				"fruits"=>$fruitData
			));
			
			$this->getView("footer");
		}
		
		public function add(){
			if(isset($_POST['name'])){
				$ins = $this->parent->getModel("fruits")->add("
					INSERT INTO `fruits` (name) VALUES ('".$_POST['name']."')
				");
				
				header("Location:/about/showList");
			}
		}
		
		public function edit(){
			
			#die(print_r($_POST));
			
			if(isset($_POST['delete']) && isset($_POST['id'])){
				//die(print($_POST['id']));
				$delete = $this->parent->getModel("fruits")->delete("
					DELETE FROM `fruits` WHERE `id` = ".$_POST['id']."
				");
				
				header("Location:/about/showList");
			}
			else{
			
				if(isset($_POST['name']) && isset($_POST['id'])){
					//die(print($_POST['id']));
					$update = $this->parent->getModel("fruits")->update("
						UPDATE `fruits` SET `name`='".$_POST['name']."'
						WHERE `id` = ".$_POST['id']."
					");
					
					header("Location:/about/showList");
				}
			
			}
			
		}
		
	}

?>