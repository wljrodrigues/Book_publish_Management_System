<?php include('admin.php');?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>



<br><br>
<div class="col-sm-12" style="background-color:lavender;" align="center">
<?php
	$Id=$_GET['Id'];
	include('conn.php');
	$query=mysqli_query($conn,"delete from `users` where userId='$Id'");
  if($query){
    echo '<script>window.location.href = "AdminManageUser.php";</script>';  
  }else{
    echo "Error".$sql. "".mysqli_error($conn);
  }
?>

  </div>
</div>

</div>


</body>
</html>
