<?php 
//session_start();
include("header.php");
include_once('conn.php');

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $sql_query = "SELECT * FROM users WHERE userEmail='$email'";
    $result = mysqli_query($conn, $sql_query);

    if (!$result) {
        exit;
    }
    if ($result->num_rows == 0) {
        return null;
    } else {
        $user = mysqli_fetch_assoc($result);
    }
} else {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
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
                        <div class="card-body">
                            <table class="table table-striped table-borderless text-darker text-25">
                                <tr>
                                    <td>Name:</td>
                                    <td style="text-transform: uppercase;"><?php echo $user["userName"] ?></td>
                                </tr>
                                <tr>
                                    <td>Phone No. :</td>
                                    <td><?php echo $user["userNumber"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Email Id :</td>
                                    <td><?php echo $user["userEmail"]; ?></td>
                                </tr>
                            </table>
                            <button class="btn btn-dark" onclick='window.location="profileedit.php?id=<?= $_SESSION["email"] ?>";'>Edit Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
