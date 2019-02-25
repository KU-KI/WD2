//<?php
	// Set session variables
	//$_SESSION["datumDnes"] = date("l, d.m.Y");
//?>

<div class="container">

	<div>
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=dataTables.php">Table</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link1</a></li>
		</ul>
	</div>

	<div class="jumbotron display-4">
		<?php
			echo "Ahoj WEBDIZAJN 2<br>11.2.2019";
			//echo "Ahoj WEBDIZAJN 2<br>".$_SESSION["datumDnes"];
		?>
	</div>

	<div>
		<?php phpinfo(); ?>
	</div>

</div>