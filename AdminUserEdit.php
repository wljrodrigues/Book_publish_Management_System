<?php include('admin.php');?>
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$Id = $_GET['Id']; // get id through query string

$query = mysqli_query($conn,"select * from users where userID='$Id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
    $FullName = $_POST['FullName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $pwd=$_POST['pwd'];
	
     $query=mysqli_query($conn,"UPDATE `users` SET  userName='$FullName', userNumber='$PhoneNumber', userPassword='$pwd' WHERE userId='$Id'");
	
    if($query){
        // redirects to all records page
        echo '<script>window.location.href = "AdminManageUser.php";</script>'; 
    }else{
      echo "Error".$sql."".mysqli_error($conn);
    }  
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="FullName" value="<?php echo $row['userName'] ?>">
  <input type="text" name="PhoneNumber" value="<?php echo $row['userNumber'] ?>">
  <input type="text" name="pwd" value="<?php echo $row['userPassword'] ?>">

  <input type="submit" name="Update" value="Update">
</form>