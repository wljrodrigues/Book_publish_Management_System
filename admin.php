<?php
session_start();

if(isset($_SESSION['email']))
{
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar Holder -->
        <nav id="sidebar">


            <div class="sidebar-header">
                <a href="adminhome.php">
                    <h3>Dashboard</h3>
                </a>
            </div>

            <ul class="list-unstyled components ">
                <li class="active">

                    <center class="admin">
                        Bem vindo <?php echo $_SESSION['name']; ?>
                    </center>

                </li>

                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Usuários</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="AddUsers.php">Add Usuários</a></li>
                        <li><a href="AdminManageUser.php">Gerenciar Usuários</a></li>

                    </ul>
                </li>




                <li class="active">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false">Livros</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li><a href="Addbook.php">Add Livro</a></li>
                        <li><a href="AdminManageBook.php">Gerenciar Livros</a></li>

                    </ul>
                </li>




                <li class="active">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false">Author Proposals</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu3">
                        <li><a href="AddProposal.php">Add Propostas</a></li>
                        <li><a href="AdminManageProposal.php">Gerenciar Propostas</a></li>

                    </ul>
                </li>




                <li class="active">
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false">Eventos</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu4">
                        <li><a href="AddEvent.php">Add Evento</a></li>
                        <li><a href="AdminManageEvent.php">Gerenciar Eventos</a></li>

                    </ul>
                </li>

                <li class="active">
                    <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false">Mensagens</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu5">
                        <li><a href="AdminManageContactus.php">Gerenciar Mensagens</a></li>

                    </ul>
                </li>
                <li class="active">
                    <a href="logout.php">Sair...</a>
                </li>

            </ul>
            </li>





        </nav>

        <div id="content">
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script> 
</body>
<?php
} else {
    ?>
        <script>
            alert('please login first');
            location.replace("login.php");
        </script>
    <?php
} ?>
</html>