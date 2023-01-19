<?php
include('header.php');
include('conn.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <script>
    function addtocart(id, quantity, price, name) {
      try {
        fetch("addtocart.php?id=" + id + "&quantity=" + quantity + "&price=" + price + "&name=" + name).then(function(respone) {
          if (respone.ok) {
            console.log('done');
          }
          console.log(id);
        });
      } catch (id) {
        console.log(id);
      }
    }
  </script>
  <style>
    body {
      margin: 0;
      padding: 0;
      margin-right: 0;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
      font-family: Arial, Helvetica, sans-serif;
     

    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
      text-align: center;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    .path a:hover {
      color: gray;
      text-decoration: none;
    }

    .path a {
      color: darkgray;
    }

    .path .less {
      color: gray;
      font-weight: bolder;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  </style>
</head>

<body style="background-color:whitesmoke;">
  <?php
  if (isset($_GET['bookCategoryId'])) {
    $CategoryId = $_GET['bookCategoryId'];
    $sql = "SELECT * FROM books WHERE bookCategoryId=$CategoryId";
  } else
    $sql = "SELECT * FROM books";
  $result = mysqli_query($conn, $sql);
  ?>
  <div class="container-fluid path">
    <a href="index.php">Home</a> <label for="" class="less"></label>
    <!--<a href="books.php?bookCategoryId=<?= $CategoryId ?>">Livros</a> -->
  </div>
  <h2 style="text-align:center">LIVROS</h2>
  <div id="items" class="container-fluid" style=" display:grid; grid-template-columns:repeat(auto-fill,minmax(250px,1.1fr)); gap: 1em; align-items:stretch; ">
    <?php
    if (!$result) {
      exit;
    }
    if ($result->num_rows == 0) {
      return null;
    } else {
      $rowcount = $result->num_rows;
      while ($pdts = $result->fetch_assoc()) {
    ?>
        <div class="card" id="<?php echo $pdts['bookId']; ?>" style="width: 16rem; margin-bottom:15px; background-color:#EFEDF2" onclick="window.location='item.php?bookId=<?= $pdts['bookId'] ?>';">
          <center>
            <img class="card-img-top pt-2" style="height: 200px; width:150px" src="<?php echo $pdts["bookImage"] ?>" alt="Card image cap">
            <div class="card-body pt-1">
              <div class="row" style="line-height: 0.9;">
                <p><small><b><?php echo $pdts["bookName"] ?></b></small></p>
              </div>
                <p><small>Ano: <?php echo $pdts["bookPublishyear"] ?><b> | </b><?php echo $pdts["bookLanguage"] ?><b> | </b>Páginas: <?php echo $pdts["bookPages"] ?></small></p>
              
            </div>
          </center>
        </div>
    <?php
      }
    }
    ?>
  </div>
</body>
<?php include('footer.php'); ?>

</html>