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
					<button type="button" class="btn btn-primary" data-dismiss="modal">OK, cool.</button>
				</div>
			</div>
		
		</div>
	
	</div>
      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
			  <?php
				foreach($data['navbar'] as $key=>$value){
					if(isset($data['pageName'])){
						if($data['pageName'] == $value) echo '<li class="active"><a href="'.$value.'">'.$key.'</a></li> '."";
						else echo '<li><a href="'.$value.'">'.$key.'</a></li> '."";
					}
					else echo '<li><a href="'.$value.'">'.$key.'</a></li> '."";
				}
			  ?>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    <div class="container">
		<div class="jumbotron">
			<h1>User Log In</h1>
		</div>
		<form action="" method="post">
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
			e.preventDefault();
			e.stopPropagation();
			var f = this,
				email = f.email,
				password = f.password;
			
			$.ajax({
				"url":"/welcome/loginFormSubmit",
				"data":{
					"email":email.value,
					"password":password.value
				},
				"success":function(result){
					var m = $("#loginModal");
					
					m.find(".modal-body").html(result);
					
					m.modal('show');
					f.reset();
				}
			});

		});
	</script>
  </body>