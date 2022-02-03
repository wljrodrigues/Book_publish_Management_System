<?php include('admin.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div class="container" style="width: 100%;">
      <br>

      <div class="card">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
          <li class="breadcrumb-item"><a href="AddProposal.php">Vendor</a></li>

        </ul>
      </div>

      <div class="card-header">
        <h3>Proposal Information
      </div>
      <form action="AddProposalBackend.php" method="post">

      <div class="card-body">
        <div class="row">

          <div class="col-sm-12" style="background-color:lavender;" align="center"><br>
            <div class="row">
              <div class="col-sm-3"> <input type="text" class="form-control" name="ProposalName" placeholder="Enter Proposal Name" required> </div>
              <div class="col-sm-3"> <input type="email" class="form-control" name="Email" placeholder="Enter Proposal Email" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="Number" placeholder="Enter ProposalPhoneNumber" pattern="^\d{10}$" required> </div>
              <div class="col-sm-3"> <input type="text" class="form-control" name="comment" placeholder="Enter Comment" required> </div>

              <br> <br><button type="submit" class="btn btn-success" align="center">Add Vendor</button>
            </div>

          </div>
        </div>
      </div>
      </form>

    </div>


    </div>

</body>
<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php //include("footer.php"); ?>
</html>