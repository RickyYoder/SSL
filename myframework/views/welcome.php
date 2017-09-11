<body>

      <?php require_once "navbarSnippet.php"; ?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <!--<div class="jumbotron">
        <h1>Bootstrap Off-Canvas Nav Plugin Demo</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

      <div class="jumbotron">
        
      </div>-->

		
		<div id="carousel" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="/assets/img/policy_shipping.png" alt="Los Angeles" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="/assets/img/policy_tracking.png" alt="Chicago" style="width:100%;">
			  </div>
			  
			</div>

		</div>
		
		<div class="jumbotron">
			<h1>Website Progress</h1>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
			</div>
			
		</div>
		
		<div class="jumbotron">
			<h1>Are popovers working?</h1>
			
			<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Yup. Popovers are working.">
				Click me
			</button>
		</div>
		
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#modal").modal({
				show:true,
				focus:true
			});
			
			$("#carousel").carousel({
				interval:3500
			});
			
			$("button").click(function(){
				$(this).popover('show');
			});
		});
	</script>
  </body>