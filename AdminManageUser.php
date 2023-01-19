<?php
include('admin.php'); ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	</style>
</head>

<body>


	<div class="main">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
			<li class="breadcrumb-item"><a href="AdminManageUser.php">Usuários</a></li>

		</ul>
	</div>

	<a href="AddUsers.php"><button class="btn btn-primary pull-right">+ Add New</button></a>
	<div class="col-sm-12" style="background-color:lavender;" align="center">
		<div>
			<h1>Gerenciar Usuários</h1>

		</div>
		<br>
		<div>
			<div class="card-block">

				<div class="table-responsive dt-responsive">
					<table class="table table-striped table-bordered nowrap">
						<thead>
							<th>Id</th>
							<th>UserName/Email</th>
							<th>FullName</th>
							<th>PhoneNumber</th>
							<th>Password</th>

							<th></th>
						</thead>
						<tbody>
							<?php
							include('conn.php');
							$query = mysqli_query($conn, "select * from `users`");
							while ($row = mysqli_fetch_array($query)) {
							?>
								<tr>
									<td><?php echo $row['userId']; ?></td>
									<td><?php echo $row['userEmail'] ?></td>
									<td><?php echo $row['userName']?></td>
									<td><?php echo $row['userNumber']; ?></td>
									<td><?php echo $row['userPassword'] ?></td>

									<td>

										<a href="AdminUserEdit.php?Id=<?php echo $row['userId']; ?>" class="btn btn-success">Edit</a>
										<a href="AdminDeleteUser.php?Id=<?php echo $row['userId']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
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


</body>
<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php //include("footer.php"); ?>
</html>