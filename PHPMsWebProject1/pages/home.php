<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	//if($_GET["hladaj"]) $sql = "SELECT * FROM knihy WHERE nazov='".$_GET["hladaj"]."'";		//ak je presná zhoda
	if($_GET["hladaj"]) $sql = "SELECT * FROM knihy WHERE nazov LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje hľadaný reťazec
	else $sql = "SELECT * FROM knihy";
	//$sql = "SELECT * FROM knihy WHERE autor LIKE 'Ján PILLÁR 1'";
	$result = $conn->query($sql);

	//echo $result->num_rows;
	$sql_json = "SELECT JSON_ARRAY('id', id, 'nazov', nazov, 'autor', autor, 'rok', rok, 'obr', obr) FROM knihy";
	$result_json = $conn->query($sql_json);
	//$json = json_encode($result_json, JSON_UNESCAPED_UNICODE);
	echo $result_json;

	//echo $_GET["hladaj"];
	//echo $_POST["hladaj"];
?>

<div class="container">

	<div class="row">
		<div class="col-md-8">
			<img src="images/aspnetcoremvc.jpg" class="rounded-circle mt-2 mb-3" width="90em" height="90em" alt="LOGO">
		</div>
		<div class="col-md-4 mt-2">
			<form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
					<input type="text" class="form-control" name="hladaj" placeholder="hľadaný text">
				  </div>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Odoslať</button>
				  </div>
			  </div>
			</form>
		</div>
	</div>

	<div class="row">
		<ul class="nav nav-pills nav-fill col-md-12 mb-3">
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=dataTables.php">Table</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link1</a></li>
		</ul>
	</div>

	<div class="row jumbotron display-4">
		<div class="col-md-12 text-center">
			<?php
				echo "Ahoj WEBDIZAJN 2<br>".$_SESSION["datumDnes"];
			?>
		</div>
	</div>

	<div class="row mt-5">
		<?php 
			while($row = mysqli_fetch_assoc($result))
			//for($i=0; $i<9; $i++)
			{ 
			//$row = $result->fetch_assoc();//$result->num_rows; 
			//$json = json_encode($row, JSON_UNESCAPED_UNICODE);
			//echo $json;
		?>
			<div class="card p-1 mb-3 col-md-4">
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

<!--<div class="row">
		<div class="col-md-12">
-->			
			<?php //phpinfo(); ?>
<!--	</div>
	</div>
-->
