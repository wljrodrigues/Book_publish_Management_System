<?php include('admin.php');?>
<html>
</head>
<body>



<?php

include "conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$query = mysqli_query($conn,"select * from books where bookId='$id'"); // select query

$row = mysqli_fetch_array($query); // fetch data

if(isset($_POST['Update'])) // when click on Update button
{
	$BookName = $_POST['BookName'];
	$BookPrice = $_POST['BookPrice'];
	$BookPages = $_POST['BookPages'];
	$BookSize = $_POST['BookSize'];
	$BookLanguage = $_POST['BookLanguage'];
	$BookShortDesc = $_POST['BookShortDesc'];
	$BookAuthor = $_POST['BookAuthor'];
	$BookPublishyear = $_POST['BookPublishyear'];
	$BookCategoryID = $_POST['BookCategoryID'];	
	$target_dir = "./books/";
$target_file = $target_dir . basename($_FILES["BookImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["BookImage"]["tmp_name"]);
	if($check !== false) {
	  echo "File is an image - " . $check["mime"] . ".";
	  $uploadOk = 1;
	} else {
	  echo "File is not an image.";
	  $uploadOk = 0;
	}
  }
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
	if (move_uploaded_file($_FILES["BookImage"]["tmp_name"], $target_file)) {
		 $BookImage =$target_dir.$_FILES["BookImage"]["name"];
	  echo "The file ". htmlspecialchars( basename( $_FILES["BookImage"]["name"])). " has been uploaded.";
	} else {
	  echo "Sorry, there was an error uploading your file.";
	}
  }

    
	$query=mysqli_query($conn," UPDATE  `books` SET BookName='$BookName', BookPrice='$BookPrice',BookPages='$BookPages',BookSize='$BookSize',BookLanguage='$BookLanguage',BookShortDesc='$BookShortDesc',BookAuthor='$BookAuthor',BookPublishyear='$BookPublishyear',BookImage='$BookImage', BookCategoryID='$BookCategoryID'  WHERE BookID='$id'");
	if($query){
		echo '<script>window.location.href = "AdminManageBook.php";</script>';  

	}else{
		echo "Error".$sql."".mysqli_error($conn);
	}
    
        // redirects to all records page
       
}
?>

<h3>Update Data</h3>

<form method="POST" enctype="multipart/form-data">
<input type="text" name="BookName" value="<?php echo $row['bookName'] ?>" placeholder="Enter Name" >
  <input type="number" name="BookPrice" value="<?php echo $row['bookPrice'] ?>" placeholder="Enter Price" >
  <input type="number" name="BookPages" value="<?php echo $row['bookPages'] ?>" placeholder="Enter Pages" >
  <input type="numer" step="any" name="BookSize" value="<?php echo $row['bookSize'] ?>" placeholder="Enter size" >
  <input type="text" name="BookLanguage" value="<?php echo $row['bookLanguage'] ?>" placeholder="Enter Price" >
  <input type="text" name="BookShortDesc" value="<?php echo $row['bookShortDesc'] ?>" placeholder="Enter Short Description" >
  <input type="text" name="BookAuthor" value="<?php echo $row['bookAuthor'] ?>" placeholder="Enter Author" >
  <input type="number" name="BookPublishyear" value="<?php echo $row['bookPublishyear'] ?>" placeholder="Enter Publish Year" >
  <input type="file" name="BookImage" value="<?php echo $row['bookImage'] ?>" required>
  <input type="number" name="BookCategoryID" value="<?php echo $row['bookCategoryId'] ?>" placeholder="Enter Ctegory ID" >
  
  <input type="submit" name="Update" value="Update">
</form>





