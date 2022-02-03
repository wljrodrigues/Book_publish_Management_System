<?php include('conn.php');
	$Id=$_GET['Id'];
	mysqli_query($conn,"delete from `authorproposal` where proposalId='$Id'");
	echo '<script>window.location.href = "AdminManageProposal.php";</script>';  
?>

