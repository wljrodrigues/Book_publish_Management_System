<?php include('admin.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>


<body>
  <div class="container" style="width: 100%;">


    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
      <li class="breadcrumb-item"><a href="Addbook.php">Book</a></li>

    </ul>
  </div>
  <br>
  <div class="card">
    <div class="card-header">
      <h3>Book Information</h3>
    </div>
    <form action="AddBookBackend.php" method="post" enctype="multipart/form-data">

      <div class="card-body">
        <div class="row">
          <div class="col-sm-12" style="background-color:lavender;" align="center">
            <h2></h2><br>
            <div class="row">
              <div class="col-sm-3"> <input type="text" class="form-control" name="BookName" placeholder="Enter Bookname" required> </div>
              <div class="col-sm-3"> <input type="number" class="form-control" name="BookPrice" placeholder="Enter BookPrice" required> </div>
              <div class="col-sm-3"> <input type="Number" class="form-control" name="BookPages" placeholder="Enter Pages" required> </div>
              <div class="col-sm-3"><input type="Number" class="form-control" name="BookSize" step="any" placeholder="Enter Size of Book"></div>
              <div class="col-sm-3"><input type="text" class="form-control" name="BookLanguage" placeholder="Enter Book Language"></div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="BookShortDesc" placeholder="Short Desc" required> </div></br></br>
              <div class="col-sm-3"><input type="text" class="form-control" name="BookAuthor" placeholder="Enter Book Author"></div>
              <div class="col-sm-3"><input type="Number" pattern="/d{4}" class="form-control" name="BookPublishYear" placeholder="Enter Book Publish Year"></div>
              <div class="col-sm-3"> <input type="file" class="form-control" name="BookImage" id="BookImage" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="BookCategoryID" placeholder="CategoryID" required> </div>



            </div>
            <br><button type="submit" class="btn btn-success" align="center">Add Book</button>
          </div>


        </div>
      </div>

    </form>
  </div>




    <script>
      // Disable form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
</body>
<!-- <div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<?php
// include("footer.php"); 
?>

</html>