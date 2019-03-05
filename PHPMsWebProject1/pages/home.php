<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	//$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM knihy";
	$result = $conn->query($sql);
?>

<div class="container">

	<div class="row">
		<ul class="nav nav-pills nav-fill col-md-12">
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=dataTables.php">Table</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link1</a></li>
		</ul>
	</div>

	<div class="jumbotron display-4 row">
		<?php
			//echo "Ahoj WEBDIZAJN 2<br>11.2.2019";
			echo "Ahoj WEBDIZAJN 2<br>".$_SESSION["datumDnes"];
		?>
	</div>

	<div class="row">
	<?php for($i=0; $i<9; $i++){ $row = $result->fetch_assoc(); ?>
		<div class="card mb-3 col-md-4">
		  <div class="row no-gutters">
			<div class="col-md-4">
			  <img src="images/aspnetcoremvc.jpg" class="card-img" alt="Foto">
			</div>
			<div class="col-md-8">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $row["nazov"]; ?></h5>
				<p class="card-text"><?php echo $row["autor"]; ?></p>
				<p class="card-text"><small class="text-muted"><?php echo $row["rok"]; ?></small></p>
			  </div>
			</div>
		  </div>
		</div>
    <?php } ?>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php phpinfo(); ?>
		</div>
	</div>

</div>