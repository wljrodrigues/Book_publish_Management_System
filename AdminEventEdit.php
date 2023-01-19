<?php include('admin.php');?>


<html lang="en">
<head>
  
  
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$Id = $_GET['Id']; // get id through query string

$query = mysqli_query($conn,"select * from event where eventId='$Id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
    $eventName = $_POST['eventName'];
    $eventstartdate = $_POST['eventstartdate'];
    $eventenddate = $_POST['eventenddate'];
    $EventDetails = $_POST['details'];

     mysqli_query($conn,"UPDATE `event` SET  eventName='$eventName', eventStartDate='$eventstartdate' , eventEndDate='$eventenddate',eventDetails='$EventDetails' WHERE eventId='$Id'");
	
    
     echo '<script>window.location.href = "AdminManageEvent.php";</script>';  
     
        
}
?>
<div class="container">
 <br>
<div class="card">
  <div class="card-header">Update Event</div>

  <div class="card-body"> <div class="row">


<form method="POST">
  <input type="text" name="eventName" value="<?php echo $row['eventName'] ?>" placeholder="Enter Event Name" Required>
  <input type="date" name="eventstartdate" value="<?php echo $row['eventStartDate'] ?>" placeholder="Enter Starting Date" Required>
  <input type="date" name="eventenddate" pattern="^\d{10}$" value="<?php echo $row['eventEndDate'] ?>" placeholder="Enter Ending Date" Required>
  <input type="text" name="details" value="<?php echo $row['eventDetails'] ?>" placeholder="Enter Event Details" Required>

  <input type="submit" name="Update" value="Update">
</form>
</div>
</div>