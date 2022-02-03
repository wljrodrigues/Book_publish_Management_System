<?php include('admin.php'); ?>




<ul class="breadcrumb">
	<li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
	<li class="breadcrumb-item"><a href="AdminManageProposal.php">Vendor</a></li>

</ul>

<a href="AddProposal.php"><button class="btn btn-primary pull-right">+ Add New</button></a>
<div class="col-sm-12" style="background-color:lavender;" align="center">




	<div>
		<h1>Manage Proposals</h1>


	</div>
	<br>
	<div>
		<div class="card-block">

			<div class="table-responsive dt-responsive">
				<table class="table table-striped table-bordered nowrap">
					<thead>
						<th>Proposal Id</th>
						<th>Proposal Name</th>
						<th>Proposal Email</th>
						<th>Proposal Number</th>
						<th>Comment</th>


						<th></th>
					</thead>
					<tbody>
						<?php
						include('conn.php');
						$query = mysqli_query($conn, "select * from `authorproposal`");
						while ($row = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $row['proposalId']; ?></td>
								<td><?php echo $row['proposalName']; ?></td>
								<td><?php echo $row['proposalEmail']; ?></td>
								<td><?php echo $row['proposalNumber']; ?></td>
								<td><?php echo $row['comment']; ?></td>


								<td>
									<a href="AdminProposalEdit.php?Id=<?php echo $row['proposalId']; ?>" class="btn btn-success">Edit</a>
									<a href="AdminDeleteProposal.php?Id=<?php echo $row['proposalId']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
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