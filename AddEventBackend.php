<?php
include('conn.php');

$Details= $_POST['Details'];
$EventName = $_POST['eventName'];
$EventStartDate= $_POST['startingDate'];
$EventEndDate= $_POST['endingDate'];




	 $sql = "INSERT INTO event(eventName,eventStartDate,EventEndDate,eventDetails)
	 VALUES ('$EventName','$EventStartDate','$EventEndDate','$Details')";
	 
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Registered SuccessFull!"); window.location.href="AdminManageEvent.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}

?>


