<?php
include('conn.php');
$comment= $_POST['comment'];
$ProposalName = $_POST['ProposalName'];
$ProposalEmail= $_POST['Email'];
$ProposalNumber= $_POST['Number'];




	 $sql = "INSERT INTO authorproposal(ProposalName,ProposalEmail,ProposalNumber,comment)
	 VALUES ('$ProposalName','$ProposalEmail','$ProposalNumber','$comment')";
	 
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Registered SuccessFull!"); window.location.href="AdminManageProposal.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}

?>


