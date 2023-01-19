<?php

include('admin.php');
include('conn.php');
$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Phone= $_POST['Phone'];
$pwd=$_POST['pwd'];




	 $sql = "INSERT INTO users(userEmail,userName,userNumber,userPassword)
	 VALUES ('$Email','$Name','$Phone','$pwd')";
	 
if(mysqli_query($conn,$sql))
{
echo '<script>alert("Registrado com sucesso!"); window.location.href="AdminManageUser.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}

?>


