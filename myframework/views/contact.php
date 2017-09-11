<body>

      <?php require_once "navbarSnippet.php"; ?>

    <div class="container">
 
		<div class="jumbotron">
			<h1>Contact Us</h1>
			<p>Fill out our contact form below and we will get back to you at our soonest.</p>
		</div>
		
		<?php

			function create_image($cap)

			{

			unlink("./assets/image1.png");

			global $image;

			$image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

			$background_color = imagecolorallocate($image, 255, 255, 255);

			$text_color = imagecolorallocate($image, 0, 255, 255);

			$line_color = imagecolorallocate($image, 64, 64, 64);

			$pixel_color = imagecolorallocate($image, 0, 0, 255);

			imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

			for ($i = 0; $i < 3; $i++) {

			imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

			}

			for ($i = 0; $i < 1000; $i++) {

			imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

			}

			$text_color = imagecolorallocate($image, 0, 0, 0);

			ImageString($image, 22, 30, 22, $cap, $text_color);

			/************************************

			Create your session variable that carries the data here, you will check against this in your controller

			Something like $_SESSION[..]=....;

			/*************************************/

			imagepng($image, "./assets/image1.png");

			}

			create_image($data["cap"]);

			?>
		
		<form action="" method="post">
			<div class="form-group">
				<!--Text input-->
				<label for="email">Email</label>
				<input type="email" class="form-control" placeholder="me@email.com" maxlength="120" name="email"/>
			</div>
			<div class="form-group">
				<!--Radio input-->
				<h3>Do you have an account with us?</h3>
				<div class="radio">
					<label><input type="radio" name="hasAccount" value="1">Yes</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="hasAccount" value="0">No</label>
				</div>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" name="newsletter" value="" checked>I would like to receive your newsletter</label>
			</div>
			
			<div class="form-group">
				<!--Textarea-->
				<label for="comments">Comments/Concerns</label>
				<textarea class="form-control" name="comments"></textarea>
			</div>
			
			<div class="form-group">

				<label for="exampleInputEmail1">Enter Captcha</label>
				<br/>
				<img src='/assets/image1.png'>

				<input name="cap" type="captcha" id="captcha" />

			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		<div id="feedback"></div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			feedback = $("#feedback");
		});
		
		
		$("form").on('submit',function(e){
			e.preventDefault();
			e.stopPropagation();
			var f = this,
				email = f.email,
				hasAccount = f.hasAccount,
				news = f.newsletter,
				comments = f.comments,
				cap = f.cap;
				
				$(this).find(".form-group").each(function(){
					$(this).removeClass("has-error");
				});
				$(hasAccount).parent().parent().parent().attr("style","");
				feedback.attr("style","").html('');
				
				if(!email.value){
					$(email).parent().addClass("has-error");
					feedback.html("Please enter your email address.");
				}
				
				else if(!hasAccount.value){
					$(hasAccount).parent().parent().parent().attr("style","border:1px solid red");
					feedback.html("Please specify whether or not you have an account with us.");
				}
				
				else if(!comments.value){
					$(comments).parent().addClass("has-error");
					feedback.html("Please tell us your issue.");
				}
				
				else{
					$(this).find(".form-group").each(function(){
						$(this).removeClass("has-error");
					});
					$(hasAccount).parent().parent().parent().attr("style","");
					feedback.html('');
					
					$.ajax({
						"url":"/site/contactFormSubmit",
						"data":{
							"email":email.value,
							"hasAccount":hasAccount.value,
							"newsletter":news.checked,
							"comments":comments.value,
							"cap":cap.value
						},
						"success":function(result){
							if(result){
								feedback.css({"color":"#fff","background":"#a00"}).html(result);
							}
							else{
								feedback.css({"color":"#fff","background":"#0a0"}).html("Thanks for reaching out to us!");
								f.reset();
							}
						}
					});
				}
		});
	</script>
  </body>