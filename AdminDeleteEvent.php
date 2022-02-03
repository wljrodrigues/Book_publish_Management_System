<?php include('conn.php');
	$Id=$_GET['Id'];
	mysqli_query($conn,"delete from `event` where eventId='$Id'");
	echo '<script>window.location.href = "AdminManageEvent.php";</script>';  
?>

