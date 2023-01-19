<?php
include("header.php");

// error_reporting(0);
require_once "conn.php";


if (isset($_POST['signup'])) {
    $message = "";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['rpwd']);

    $token = bin2hex(random_bytes(15));

    // $error = "";

    // if (!$error) {
    $res = mysqli_query($conn, "SELECT userEmail,userNumber FROM users WHERE userEmail='$email' OR userNumber='$phone'");
    $row = mysqli_num_rows($res);


    if ($row > 0) {
        $message = "Phone number or Email Address is already exists";
        // } else if ($row['mail'] > 0) {
        //     $message = "Email is already taken";
        // exit();
    } else {
        if ($password === $cpassword) {

            $sql = "INSERT INTO users(userName, userNumber, userEmail,userPassword,userVerificationCode,userEmailStatus) VALUES('" . $name . "','" . $phone . "', '" . $email . "','" . $password . "','" . $token . "','inactive')";

            $query = mysqli_query($conn, $sql);                           


             
                       
        } else {
            $message = "Password and Confirm Password doesn't match";
        }

        if(mysqli_query($conn,$sql))
        {
            
         echo '<script>alert("Conta cadastrada. Clique em Ok e faça o seu Login!"); window.location.href="login.php";</script>';
            
        }
        else
        {
            echo mysqli_error($conn);
        }


    }
    mysqli_close($conn);
}
// header("location:#");
// echo "<script>alert('something gone wrong');</script>";
// }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRE UMA CONTA</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    p {
        padding: 0;
        margin: 0;
    }

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

<body style="background-color: lightgray;">
    <div class="container-fluid path">
        <a href="index.php">Home</a> <label for="" class="less">></label>
        <a href="signup.php">Registro </a>
    </div>
    <div class="container bg-light mt-5 mb-5" style="height:auto; padding:40px; border-radius:25px;">
        <!--here we can set height and padding of container.-->
        <h2><strong><u>Registre sua conta </u></strong></h2>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="needs-validation" novalidate>
            <div class="text-danger" style="font-weight:bold; color:red;">

                <?php if (isset($message)) {
                    echo $message;
                } ?>
            </div>
            <div class="form-group">
                <label for="name">UserName:</label>
                <input type="text" class="form-control" id="name" pattern="^[a-zA-Z\s]*$" placeholder="Enter First name" name="name" required autofocus>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Input.</div>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone number" pattern="^\d{10}$" name="phone" required>
                <small>Phone number must have only 10 digits.</small>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Phone Number.</div>
            </div>
            <div class="form-group">
                <label for="mail">E-mail:</label>
                <input type="email" class="form-control" id="mail" placeholder="Enter e-mail address" pattern="^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$" name="mail" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid E-mail address.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Senha:</label>
                <input type="password" id="pwd" class="form-control" aria-describedby="passwordHelpBlock" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*,.]{8,15}$" placeholder="Enter Password" name="pwd" required>
                <small>A senha deve ter de 7 a 15 caracteres que contenham pelo menos um dígito numérico e um caractere especial.</small>
                <div class="pwd-show">
                    <small><input type="checkbox" onclick="myFunction()"> <label> Mostrar senha</label></small>

                    <script>
                        function myFunction() {
                            var x = document.getElementById("pwd");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                </div>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Password.</div>

            </div>
            <div class="form-group">
                <label for="rpwd">Confirme sua senha:</label>
                <input type="password" id="rpwd" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter Password again" name="rpwd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter valid Input.</div>
            </div>

            <button type="submit" class="btn btn-primary" name="signup" value="Submit">Submeter</button> <small>Você já tem conta..? <a href="login.php">Faça o Login</a></small>
        </form>
    </div>
    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

<div class="align-self-end">
    <?php include("footer.php") ?>
</div>

</html>