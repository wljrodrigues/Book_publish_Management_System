<?php include('admin.php'); ?>

<html lang="pt-BR">


<ul class="breadcrumb">
	<li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
	<li class="breadcrumb-item"><a href="AdminManageEvent.php">Vendor</a></li>

</ul>

<a href="AddEvent.php"><button class="btn btn-primary pull-right">+ Add New</button></a>
<div class="col-sm-12" style="background-color:lavender;" align="center">




	<div>
		<h1>Manage Events</h1>


	</div>
	<br>
	<div>
		<div class="card-block">

			<div class="table-responsive dt-responsive">
				<table class="table table-striped table-bordered nowrap">
					<thead>
						<th>Event Id</th>
						<th>Event Name</th>
						<th>Event Starting Date</th>
						<th>Event Ending Date</th>
						<th>Event Details</th>


						<th></th>
					</thead>
					<tbody>
						<?php
						include('conn.php');
						$query = mysqli_query($conn, "select * from `event`");
						while ($row = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $row['eventId']; ?></td>
								<td><?php echo $row['eventName']; ?></td>
								<td><?php echo $row['eventStartDate']; ?></td>
								<td><?php echo $row['eventEndDate']; ?></td>
								<td><?php echo $row['eventDetails']; ?></td>


								<td>
									<a href="AdminEventEdit.php?Id=<?php echo $row['eventId']; ?>" class="btn btn-success">Edit</a>
									<a href="AdminDeleteEvent.php?Id=<?php echo $row['eventId']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
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


</body>
<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php //include("footer.php"); 
?>

</html>