<?php
include('header.php');
include('conn.php');


if (isset($_POST['signup'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $comment = mysqli_real_escape_string($conn, $_POST['message']);

    $query = mysqli_query($conn, "INSERT INTO authorproposal(proposalEmail,proposalName,comment) VALUES('$email','$name','$comment')");

  if ($query) {
?>
    <script>
      alert('Thank you for your request');

      location.replace("index.php");
    </script>
<?php
  }
  else
  {
    ?>
<script>
      alert('something is wrong');

    </script>    <?php
  }

  
  mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .path a:hover {
    color: black;
    text-decoration: none;
  }

  .path a {
    color: gray;
  }

  .path .less {
    color: gray;
    font-weight: bolder;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
</style>

<body style="background-color: lightgray;">
  <div class="container-fluid path">
    <a href="index.php">Home</a> <label for="" class="less">></label>
    <a href="proposal.php">Book Publish Request</a>
  </div>
  <div class="container bg-light mt-5 mb-5" style="height:40rem; padding:40px; border-radius:25px;">
    <h2><strong><u>Book Publish Request</u></strong></h2>
    <hr>
    <form action="" method="POST" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" placeholder="Enter Email" name="email" required autofocus>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter valid E-mail address.</div>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" class="form-control" id="name" pattern="^[a-zA-Z].*" minlength="5" maxlength="20" placeholder="Enter Name" name="name" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter valid Input.</div>
      </div>
      <div class="form-group">
        <label for="message">Book Details:</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Enter book name, Author name, Book size, Book pages, Language...etc." name="message" required></textarea>
        <small>We will be contact you soon</small>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter valid Input.</div>
      </div>

      <button type="submit" class="btn btn-primary" name="signup" value="Submit">Submit</button>
    </form>
  </div>
  <?php include('footer.php'); ?>
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

</html>