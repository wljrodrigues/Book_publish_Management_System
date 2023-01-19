<?php // include('admin.php'); ?>
<?php
// include('header.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>


<div class="main">
	<br><br>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
		<li class="breadcrumb-item"><a href="AdminManageBook.php">Book</a></li>

	</ul>
</div>
<a href="AddBook.php"><button class="btn btn-primary pull-right">+ Add New</button></a><br>
<div class="col-sm-12" style="background-color:lavender;" align="center">
	<div>
		<h1>Manage Books</h1>

	</div>
	<br>
	<div>
		<div class="card-block">

			<div class="table-responsive dt-responsive">
				<table class="table table-striped table-bordered nowrap">
					<thead>

						<th>Id</th>
						<th>Name</th>
						<th>Price</th>
						<th>Pages</th>
						<th>Size</th>
						<th>Language</th>
						<th>Description</th>
						<th>Autor</th>
						<th>Ano de publicação</th>
						<th>Arquivo da obra</th>
						<th>CapaArquivo</th>
						<th>CategoryID</th>

						<th></th>
					</thead>
					<tbody>
						<?php
						include('conn.php');
						$query = mysqli_query($conn, "select * from `books`");
						while ($row = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $row['bookId']; ?></td>
								<td><?php echo $row['bookName']; ?></td>
								<td><?php echo $row['bookPrice']; ?></td>
								<td><?php echo $row['bookPages']; ?></td>
								<td><?php echo $row['bookSize']; ?></td>
								<td><?php echo $row['bookLanguage']; ?></td>
								<td><?php echo $row['bookShortDesc']; ?></td>
								<td><?php echo $row['bookAuthor']; ?></td>
								<td><?php echo $row['bookPublishyear']; ?></td>
								<td>  <a href="<?php echo $row['bookPdf']; ?>" download>Baixar</a></td>
								<td><img style="height: 200px; width:150px" src="<?php echo $row["bookImage"] ?>" alt="Image not found"></td>
								<td><?php echo $row['bookCategoryId']; ?></td>
								<td>
									<a href="AdminUpdateBook.php?id=<?php echo $row['bookId']; ?>" class="btn btn-success">Edit</a>
									<a href="AdminDeleteBook.php?id=<?php echo $row['bookId']; ?>" class="btn btn-danger" onclick="return confirm('Você confirma que deseja apagar esse livro da base?')">Apagar</a>
									
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table><br>
			</div>

		</div>
	</div>
</div>

</div>




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




</body>
<!-- <div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<?php 
// include("footer.php"); ?>
</html>