<?php
include('admin.php');
include('conn.php');
$BookName = $_POST['BookName'];
$BookPrice = $_POST['BookPrice'];
$BookPages = $_POST['BookPages'];
$BookSize=$_POST['BookSize'];
$BookLanguage=$_POST['BookLanguage'];
$BookAuthor=$_POST['BookAuthor'];
$BookPublidhYear=$_POST['BookPublishYear'];
$BookShortDesc = $_POST['BookShortDesc'];
$img="C:/xampp/htdocs/MscIT/Library Management/books/";
// $BookImage =$img.$_POST['BookImage'];
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

	 $sql = "INSERT INTO books(BookName,BookPrice,BookPages,BookSize,BookLanguage,BookAuthor,BookPublishyear,BookShortDesc,BookImage,BookCategoryID)
	 VALUES ('$BookName','$BookPrice','$BookPages','$BookSize','$BookLanguage','$BookAuthor','$BookPublidhYear','$BookShortDesc','$BookImage','$BookCategoryID')";
	 
if(mysqli_query($conn,$sql))
{
	
// echo '<script>alert("Registered SuccessFull!"); window.location.href="AdminManageBook.php";</script>';
	
}
else
{
	echo mysqli_error($conn);
}
