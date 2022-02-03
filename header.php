<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.search-box input[type="text"]').on("keyup input", function() {
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if (inputVal.length) {
                    $.get("searchback.php", {
                        term: inputVal
                    }).done(function(data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);

                    });
                } else {
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $(document).on("click", ".result p", function() {
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown:hover .dropdown-menu {
            display: block;

        }

        .dropdown:active {
            color: white;
        }

        .dropdown-item:hover {
            background-color: lightslategray;
            color: #ddd;
        }

        /* .hr {
        height: 2px;
        background-color: Blue;
        width: auto;
    } */

        .dropdown-item {
            margin: 0;
            color: whitesmoke;
        }

        .dropdown-divider {
            margin-top: 0;
            margin-bottom: 0;
        }

        .search-box {
            width: 300px;
            position: relative;
            display: inline-block;
            font-size: 14px;
        }

        .search-box input[type="text"] {
            height: 32px;
            padding: 5px 10px;
            border: 1px solid #CCCCCC;
            font-size: 14px;
        }

        .result {
            position: absolute;
            z-index: 999;
            top: 100%;
            left: 0;
        }

        .search-box input[type="text"],
        .result {
            width: 100%;
            box-sizing: border-box;
        }

        /* Formatting result items */
        .result p {
            margin: 0;
            padding: 7px 10px;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
            background-color: #fff;
            font-size: 12px;
            line-height: 1;
        }

        .result p:hover {
            background: #f2f2f2;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- Brand -->
        <!-- <div class="row"> -->
        <a class="navbar-brand" href="index.php">
            <h4><i class="fas fa-book-reader"></i> Library Management</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarContent">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="event.php">Events</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="cursor: pointer;" onclick="window.location='books.php'" id="navbardrop" data-toggle="dropdown">
                        Books
                    </a>
                    <div class="dropdown-menu mt-0 bg-primary">
                        <a class="dropdown-item" href="books.php?bookCategoryId=1"><strong>Environment</strong></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="books.php?bookCategoryId=2"><strong>Biology</strong></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="books.php?bookCategoryId=3"><strong>Mathematics</strong></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="books.php?bookCategoryId=4"><strong>Computer</strong></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="books.php?bookCategoryId=5"><strong>Physics</strong></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="books.php?bookCategoryId=6"><strong>Chemistry</strong></a>
                    </div>
                </li>

            </ul>

            <ul class="navbar-nav search-box">
                <input class="form-control mr-sm-2" type="text" placeholder="Search books here...">
                <div class="result">
                </div>

                <!-- </form> -->
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <?php if (isset($_SESSION['email'])) { ?>
                        <a class="nav-link" id="trial" href="profile.php"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['name'] ?></a>
                    <?php } else { ?>
                        <a class="nav-link" href="signup.php"><i class="fas fa-user-edit"></i> Sign Up</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['email'])) { ?>
                        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Sign out</a>
                    <?php } else { ?>
                        <a class="nav-link" href="login.php"><i class="fa fa-sign-in-alt"></i> Sign in</a>
                    <?php } ?>
                </li>

            </ul>
            </div>
    </nav>
</body>

</html>