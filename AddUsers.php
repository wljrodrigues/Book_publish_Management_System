<?php include('admin.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

<body>

    <div class="container" style="width: 100%;">
      <br>
      <div class="card">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
          <li class="breadcrumb-item"><a href="AddUsers.php">Usuários</a></li>
        </ul>
      </div>

      <div class="card-header">
        <h3>Customer Information</h3>
      </div>
      <form action="AddUsersBackend.php" method="post">

      <div class="card-body">
        <div class="row">

          <div class="col-sm-12" style="background-color:lavender;" align="center"><br>
            <div class="row">
              <div class="col-sm-3"> <input type="text" class="form-control" name="Name" placeholder="Enter FullName" required> </div>
              <div class="col-sm-3"> <input type="email" class="form-control" name="Email" placeholder="Enter Email" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" pattern="^\d{10}$" name="Phone" placeholder="Enter PhoneNumber" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="pwd" placeholder="Enter Password" required></div>

              </br>
              </br><button type="submit" class="btn btn-success ml-4 my-2" align="center">Add User</button>
            </div>

          </div>
        </div>
      </div>

    </div>


    </div>

  </form>
</body>
<!-- <div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<?php //include("footer.php"); ?>
</html>