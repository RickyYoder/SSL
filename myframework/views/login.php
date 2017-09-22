<body>
	<div class="modal fade" id="loginModal">
	
		<div class="modal-dialog" role="document">
		
			<div class="modal-content">
			
				<div class="modal-header">
				
					<h5 class="modal-title">Login</h5>
					
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					
				
				</div>
				
				<div class="modal-body">
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">OK.</button>
				</div>
			</div>
		
		</div>
	
	</div>
      
	<?php require_once "navbarSnippet.php"; ?>

    <div class="container">
		<div class="jumbotron">
			<h1>User Log In</h1>
		</div>
		<?php 
			if(@$_GET['pleaseLogIn']) echo '<div style="background:#a00;padding:1rem;margin:1rem;"><strong style="color:#fff;">Please log in to continue.</strong></div>';
			
			if(@$_GET['err']) echo '<div style="background:#a00;padding:1rem;margin:1rem;"><strong style="color:#fff;">'.$_GET['err'].'</strong></div>';
		?>
		<form action="/auth/login" method="post">
			<div class="form-group">
				<!--Text input-->
				<label for="email">Email</label>
				<input type="email" class="form-control" placeholder="me@email.com" maxlength="120" name="email" required/>
			</div>
			
			<div class="form-group">
				<!--Text input-->
				<label for="password">Password</label>
				<input type="password" class="form-control"  maxlength="120" name="password" required/>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			
		});
		
		
		$("form").on('submit',function(e){
			/*e.preventDefault();
			e.stopPropagation();
			var f = this,
				email = f.email,
				password = f.password;
			
			$.ajax({
				"url":"/site/loginFormSubmit",
				"data":{
					"email":email.value,
					"password":password.value
				},
				"success":function(result){
					if(result){
						var m = $("#loginModal");
						
						m.find(".modal-body").html(result);
						
						m.modal('show');
					}
					else window.location = '/profile';
				}
			});*/

		});
	</script>
  </body>