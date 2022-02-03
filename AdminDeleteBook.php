<?php include('admin.php'); ?>
<!DOCTYPE html>
<html>
<head>

<head>
  
  
  </style>
</head>
<body>



<br><br>
<div class="main">
<div class="col-sm-12" style="background-color:lavender;" align="center">
<?php
	$id=$_GET['id'];
	include('conn.php');
	$query=mysqli_query($conn,"delete from `books` where bookId='$id'");
  if($query){
	echo '<script>window.location.href = "AdminManageBook.php";</script>';  
  }else{
    echo "Error".$sql."".mysqli_error($conn);
  }
?>


  </div>
</div>

</div>


</body>
</html>
