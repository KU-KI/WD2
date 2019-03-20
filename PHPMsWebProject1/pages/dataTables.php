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
			<li class="nav-item"><a class="nav-link" href="../index.php?link=home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=dataTables.php">Table</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link1</a></li>
		</ul>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">
			<table id="table_id" class="display">
				<thead>
					<tr>
						<th>Column 1</th>
						<th>Column 2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Row 1 Data 1</td>
						<td>Row 1 Data 2</td>
					</tr>
					<tr>
						<td>Row 2 Data 1</td>
						<td>Row 2 Data 2</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>


