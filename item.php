<?php
include('header.php');
include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <style>
        .row {
            padding: 5px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {

            opacity: 1;

        }

        .download-button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        }

        .download-button a {
        color: #ffffff; /* White */
        font-weight: bold; /* Add bold */

        }
    </style>
</head>

<body>


    <div class="container mt-3 mb-5" align="center">
        <?php
        $id = $_GET['bookId'];
        if (isset($_SESSION['id'])) {
            $uid = $_SESSION['id'];
        }

        $qry = mysqli_query($conn, "select * from books where bookId='$id'"); // select query
        $qty = mysqli_fetch_array($qry); // fetch data

        $sql = "SELECT * FROM books Where bookID=$id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            exit;
        }
        if ($result->num_rows == 0) {
            return null;
        } else {
            $rowcount = $result->num_rows;
            $pdts = $result->fetch_assoc();

        ?>
            
<form action="download.php" method="post">
    <div class="card" style="background-color:#EFEDF2">
        <div class="row">
            <div class="card-body">
                <div class="col-md-12">
                    <center>
                        <img class="card-img-top pt-2" style="height: 200px; width:150px" src="<?php echo $pdts["bookImage"] ?>" alt="Card image cap">
                        <div class="card-body pt-1">
                            <p><b><?php echo $pdts["bookName"] ?></b></p>
                            <p>Year: <?php echo $pdts["bookPublishyear"] ?><b> | </b><?php echo $pdts["bookLanguage"] ?><b> | </b>Pages: <?php echo $pdts["bookPages"] ?></p>
                            <p>Size: <?php echo $pdts["bookSize"] ?>MB</p>
                            
                            <button class="download-button">
                            <a href="<?php echo $pdts["bookPdf"] ?>" download>Download</a>
                            </button>
                           
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</form>
            <div id="accordion" class="mt-2" align="left">
                <div class="card">
                    <div class="card-header" align="center">
                        <a class="card-link active" data-toggle="collapse" href="#collapseOne">
                            Author
                        </a>
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Short Description
                        </a>

                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $pdts["bookAuthor"] ?>
                        </div>
                    </div>


                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $pdts["bookShortDesc"] ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</body>
<?php
if (isset($_POST['cart'])) // when click on cart button
{
    $quantity = $_POST['quantity'];
    // $pid = $_POST['pid'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $res = mysqli_query($conn, "SELECT * FROM cartdetails WHERE UserID='$uid' AND bookID='$id'");
    $row = mysqli_num_rows($res);

    if ($row === 0) {
        $sql = "INSERT INTO `cartdetails`(`bookID`, `UserID`,`bookQuantity`,`bookPrice`,`bookName`) VALUES ('$id','$uid','$quantity','$price','$name')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
?>
            <script>
                window.location = "cart.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('<?php echo $name ?> is already in the cart');
        </script>
        <?php
        exit();
    }
}
if (isset($_POST['buy'])) // when click on buy now button
{
    $quantity = $_POST['quantity'];
    // $pid = $_POST['pid'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $res = mysqli_query($conn, "SELECT * FROM cartdetails WHERE UserID='$uid' AND bookID='$id'");
    $row = mysqli_num_rows($res);

    if ($row === 0) {
        $sql = "INSERT INTO `cartdetails`(`bookID`, `UserID`,`bookQuantity`,`bookPrice`,`bookName`) VALUES ('$id','$uid','$quantity','$price','$name')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
        ?>
            <script>
                window.location = "buy.php?bookID=<?= $pdts['bookID']; ?>";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('<?php echo $name ?> is already in the cart');
        </script>
<?php
        exit();
    }
}

?>
<?php include('footer.php'); ?>

</html>