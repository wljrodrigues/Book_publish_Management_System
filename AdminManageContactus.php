<?php include('admin.php'); ?>

<html lang="pt-BR">


<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
    <li class="breadcrumb-item"><a href="AdminManageContactus.php">Vendor</a></li>

</ul>

<div class="col-sm-12" style="background-color:lavender;" align="center">




    <div>
        <h1>Gerenciar Mensagens</h1>


    </div>
    <br>
    <div>
        <div class="card-block">

            <div class="table-responsive dt-responsive">
                <table class="table table-striped table-bordered nowrap">
                    <thead>
                        <th>Contact Id</th>
                        <th>Contact Name</th>
                        <th>Contact Email</th>
                        <th>User Id</th>
                        <th>Comment</th>


                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        include('conn.php');
                        $query = mysqli_query($conn, "select * from `contactus`");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['contactId']; ?></td>
                                <td><?php echo $row['contactName']; ?></td>
                                <td><?php echo $row['contactEmail']; ?></td>
                                <td><?php echo $row['userId']; ?></td>
                                <td><?php echo $row['comment']; ?></td>


                                <td>
                                    <a href="AdminDeleteContact.php?Id=<?php echo $row['contactId']; ?>" class="btn btn-danger" onclick="return confirm('Você deseja apagar permanentemente?')">Apagar</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table><br>
            </div>

        </div>
    </div>
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
<?php //include("footer.php"); 
?>

</html>