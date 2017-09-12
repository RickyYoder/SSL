<body>

	<?php require_once "navbarSnippet.php"; ?>

    <div class="container">
 
		<div class="jumbotron">
			<h1>My Profile</h1>
			<p><strong>My Email/Username</strong>: <?php echo $_SESSION['email']; ?></p>
			<p><strong>Profile:</strong></p>
			<p><?php echo $_SESSION['bio']; ?></p>
		</div>
		
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			
		});
		
		
	</script>
  </body>