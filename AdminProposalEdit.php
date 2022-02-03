<?php include('admin.php');?>


<html lang="en">
<head>
  
  
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$Id = $_GET['Id']; // get id through query string

$query = mysqli_query($conn,"select * from authorproposal where proposalId='$Id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
    $proposalName = $_POST['proposalName'];
    $proposalEmail = $_POST['proposalEmail'];
    $proposalNumber = $_POST['proposalNumber'];
    $comment = $_POST['comment'];

     mysqli_query($conn,"UPDATE `authorproposal` SET  proposalName='$proposalName', proposalEmail='$proposalEmail' , proposalNumber='$proposalNumber',comment='comment' WHERE proposalId='$Id'");
	
    
     echo '<script>window.location.href = "AdminManageProposal.php";</script>';  
     
        
}
?>
<div class="container">
 <br>
<div class="card">
  <div class="card-header">Update Proposal</div>

  <div class="card-body"> <div class="row">


<form method="POST">
  <input type="text" name="proposalName" value="<?php echo $row['proposalName'] ?>" placeholder="Enter Proposal Name" Required>
  <input type="email" name="proposalEmail" value="<?php echo $row['proposalEmail'] ?>" placeholder="Enter proposal Email" Required>
  <input type="text" name="proposalNumber" pattern="^\d{10}$" value="<?php echo $row['proposalNumber'] ?>" placeholder="Enter phone number" Required>
  <input type="text" name="comment" value="<?php echo $row['comment'] ?>" placeholder="Enter comment" Required>

  <input type="submit" name="Update" value="Update">
</form>
</div>
</div>