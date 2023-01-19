<?php
// session_start();
include('header.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>
    $(document).ready(function() {
      $('#demo').carousel({
        interval: 3000
      })
    });
  </script>
  <style>
    /* Make the image fully responsive */
    

    .dropdown-divider {
      margin-top: 0;
      margin-bottom: 0;
    }

    .dropdown-item:hover {
      background-color: lightslategray;
      color: #ddd;
    }

    .column {
      float: left;
      width: 22%;
      padding: 10px;
      height: auto;
      /* Should be removed. Only for demonstration */
      margin: 5px;
      background-color: blue;

    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .container a {
      text-decoration: none;
    }


  </style>
</head>

<body>
  <div class="container-fluid mt-2">
    <div class="header">
      <?php
      if (isset($_SESSION['email'])) {
      ?>
        <h3><strong>Bem vindos
            <!--#display doner's name using session --><span style="text-transform: uppercase;"><?php echo $_SESSION['name']; ?></span>
          </strong></h3>
      <?php
      } else echo "<h6></h6>";
      ?>
      
      <div class="row">
        <img src="./img/final.png" class="img-fluid px-2 " width="100%" height="400px" alt="">
        
      </div>
    </div>
  </div>

  <div class="container-fluid my-5 px-5 py-2 " style="background-color: darkgray;">
  <div class="row">
    <div class="col-5">
      <img src="./img/c_1.jpg" height="330px" width="500px">
    </div>
    <div class="col-7">
      <h4>Caros leitores, damos as boas-vindas a todos vocês ao lugar onde vocês podem encontrar todos os livros que quiserem. 
        Entregamos livros de física, química, biologia, TI, Ciência da Computação, Direito, Medicina, Engenharia, Serviço Social, 
        Sociologia, Psicologia, Romances... cada campo, você diz e nós temos. Aqui nesta plataforma, nós fornecemos facilidade para baixar livros disponíveis de forma absolutamente gratuita. Atualizamos frequentemente nossa biblioteca com os livros mais recentes. Nosso objetivo é facilitar o fornecimento e a disponibilidade de livros para nossos leitores e alunos. Vamos tornar o conhecimento e a educação gratuitos e facilmente acessíveis a todos.</h4>
    </div>
  </div>
  </div>
  <!-- books -->
  <h2 align="center" style="margin: 10px; color:#0297e0; margin-top:3%; margin-bottom:3%;"><strong><u>Livros</u></strong></h2>


  <!-- book carousel -->
  <section id="book carousel">
    <div class="container my-5">
      <!-- book carousel -->
      <h3 align="center" style="margin: 10px; color:#0297e0; margin-top:3%; margin-bottom:3%;"><strong><u></u></strong></h3>
<center>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-3"><a href="books.php?bookCategoryID=1" class="thumbnail"><img src="./books/1_1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=1" class="thumbnail"><img src="./books/1_2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=1" class="thumbnail"><img src="./books/6_1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=2" class="thumbnail"><img src="./books/5_1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <!-- <div class="carousel-caption" style="color: black; font-weight:bolder">
              <h3><strong>Plumbing</strong></h3>
              <p>Pipes & Fitting</p>
            </div> -->
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-3"><a href="books.php?bookCategoryID=2" class="thumbnail"><img src="./books/2_1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=2" class="thumbnail"><img src="./books/2_2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=2" class="thumbnail"><img src="./books/6_2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=2" class="thumbnail"><img src="./books/5_2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <!-- <div class="carousel-caption" style="color: white; font-weight:bolder">
              <h3><strong>Industrial</strong></h3>
              <p>Pipes & Fitting</p>
            </div> -->
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-3"><a href="books.php?bookCategoryID=3" class="thumbnail"><img src="./books/3_1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=3" class="thumbnail"><img src="./books/3_2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=3" class="thumbnail"><img src="./books/4_1.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
              <div class="col-lg-3"><a href="books.php?bookCategoryID=2" class="thumbnail"><img src="./books/4_2.jpg" alt="Image" style="max-width:100%; height:30vh;"></a>
              </div>
            </div>
            <!-- <div class="carousel-caption" style="color: Black; font-weight:bolder">
              <h3><strong>Agricultural</strong></h3>
              <p>Pipes & Fitting</p>
            </div> -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon" style="height: 25px; width:25px;"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon" style="height: 25px; width:25px;"></span>
        </a>
      </div>
      </center>
    </div>
  </section>
  <?php include('footer.php'); ?>
</body>

</html>