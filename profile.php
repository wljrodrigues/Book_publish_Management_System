<?php
if (isset($_SESSION['id'])) {
    include("header.php");
    include_once('conn.php');
    $id = $_SESSION['id'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
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
    </head>

    <body>
        <div class="container-fluid path">
            <a href="index.php">Home</a> <label for="" class="less">></label>
            <a href="profile.php">Profile</a>
            <section class="px-2">
                <div class="row">
                    <button class="btn btn-secondary" data-toggle="collapse" data-target="#demo">Account Details</button>
                </div>
                <div class="collapse show" id="demo">
                    <div class="outer">
                        <div class="card bg-light mb-2 mt-1 text-dark">
                            <?php
                            $sql_query = "Select * from users where userID=$id";
                            $Count = 1;
                            //  $connection = $db-> getconn();
                            $result = mysqli_query($conn, $sql_query);
                            if (!$result) {
                                exit;
                            }
                            if ($result->num_rows == 0) {
                                return null;
                            } else {
                                $rowcount = $result->num_rows;
                                while ($pdts = $result->fetch_assoc()) {
                                    //  $tot = ($pdts['price']*$pdts['quantity']);
                                    //  $total += $tot;
                                    if ($Count < $rowcount) {
                            ?>
                                        <div class="card-body">

                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="card-body">
                                            <table class="table table-striped table-borderless text-darker text-25">
                                                <tr>
                                                    <td>Name:</td>
                                                    <td style="text-transform: uppercase;"><?php echo $pdts["userName"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone No. :</td>
                                                    <td><?php echo $pdts["userNumber"]; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email Id :</td>
                                                    <td><?php echo $pdts["userEmail"]; ?></td>
                                                </tr>
                                                <tr>
                                                    <!-- <td>Address :</td>
                                                <td><?php //echo $pdts["userAddress"]; 
                                                    ?></td> -->
                                                </tr>
                                                <tr>
                                                    <td>Password :</td>
                                                    <td><?php echo $pdts["userPassword"]; ?></td>
                                                </tr>


                                            </table>
                                            <button class="btn btn-dark" onclick='window.location="profileedit.php?id=<?= $_SESSION["id"] ?>";'>Edit Details</button>
                                        </div>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    <?php include("footer.php");
} else {
    ?>
        <script>
            alert('please login first');
            location.replace("login.php");
        </script>
    <?php
} ?>
    </body>

    </html>