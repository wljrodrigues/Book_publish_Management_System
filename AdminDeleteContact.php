<?php include('conn.php');
	$Id=$_GET['Id'];
	mysqli_query($conn,"delete from `contactus` where contactId='$Id'");
	echo '<script>window.location.href = "AdminManageContactus.php";</script>';  
?>

