<?php
include "admin.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<head>
</head>

<body>
        <h1 align="center"  style="margin: 10px;  margin-top:3%; margin-bottom:3%; "><strong>Painel de controle</strong></h1>
        <?php
        include "conn.php";
        $sqlusers = "select userId from users";
        $resultusers = mysqli_query($conn, $sqlusers);
        $totalusers = mysqli_num_rows($resultusers);

        $sqlbooks = "select bookId from books";
        $resultbooks = mysqli_query($conn, $sqlbooks);
        $totalbooks = mysqli_num_rows($resultbooks);

        $sqlrequests = "select proposalId from authorproposal";
        $resultrequests = mysqli_query($conn, $sqlrequests);
        $totalrequests = mysqli_num_rows($resultrequests);

        $sqlevents="select eventId from event";
        $resultevents=mysqli_query($conn,$sqlevents);
        $totalevents=mysqli_num_rows($resultevents);

        ?>
        <div id="items" class="container-fluid" style=" display:grid; grid-template-columns:repeat(auto-fill,minmax(150px,1.1fr)); gap: 2em; align-items:stretch; ">

            <div class="card bg-primary" style="width: auto;" onclick="window.location='adminmanageuser.php'">
                <center>
                    <!-- <img class="card-img-top " style=" width:100px" src="./img/generaluser.png" alt="Card image cap"> -->
                    <i class="fa fa-user-circle-o fa-5x" aria-hidden="true" ></i>
                    <div class="card-body">
                            <h3><b>Usuários</b></h3>
                        <h1><strong><?php echo $totalusers; ?></strong> </h1>

                    </div>
                </center>
            </div>
            <div class="card bg-success" style="width: auto;" onclick="window.location='adminmanagebook.php'">
                <center>
                <i class="fa fa-book fa-5x" aria-hidden="true"></i>              
                    <div class="card-body pt-1">
                    <h3><b>Livros</b></h3>
                        <h1><strong><?php echo $totalbooks; ?></strong> </h1>

                    </div>
                </center>
            </div>
            <div class="card bg-danger" style="width: auto;" onclick="window.location='adminmanageproposal.php'">
                <center>
                <i class="fa fa-registered fa-5x" aria-hidden="true"></i>              
                <div class="card-body pt-1">
                    <h3><b>Propostas</b></h3>
                        <h1><strong><?php echo $totalrequests; ?></strong> </h1>

                    </div>
                </center>
            </div>
            <div class="card bg-info" style="width: auto;" onclick="window.location='adminmanageevent.php'">
                <center>
                <i class="fa fa-calendar fa-5x" aria-hidden="true"></i>
                    <div class="card-body pt-1">
                    <h3><b>Eventos</b></h3>
                        <h1><strong><?php echo $totalevents; ?></strong> </h1>

                    </div>
                </center>
            </div>
            
            
        </div>
    </div>
</body>

</html>