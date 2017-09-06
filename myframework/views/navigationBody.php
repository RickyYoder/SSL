<body>
	<?php #$print_r($data); ?>
	<header>
		<nav>
			<?php
				foreach($data['navbar'] as $key=>$value){
					echo '<a href="'.$value.'">'.$key.'</a> '."";
				}
			?>
			
		</nav>
	</header>
	</body>
	