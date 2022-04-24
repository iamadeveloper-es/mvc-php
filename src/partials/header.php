<?php
    include_once("src/helpers/session.php");
    $isUserAuthenticated = isUserAuthenticated();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Horarios</title>
    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
    <header class="site-header mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="row w-100">
                    <div class="col">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="d-lg-flex justify-content-between w-100">
                                <div class="navbar-nav">
                                    <?php if(isset($_SESSION["student"])){ ?>
                                        <a class="nav-item nav-link" href="index.php?c=student">Student panel</a>
                                    <?php }; ?>
                                    <!-- <a class="nav-item nav-link active" href="index.php">Home</a> -->
                                    <?php if(!$isUserAuthenticated){ ?>
                                    <a class="nav-item nav-link" href="index.php?c=login">Login</a>
                                    <a class="nav-item nav-link" href="index.php?c=register">Register</a>
                                    <?php }; ?>
                                </div>
                                <?php if($isUserAuthenticated){ ?>
                                <div class="user-info d-lg-flex align-items-center">
                                    <span><?php echo 'Hola: @'.sessionInfo()['username']; ?></span>
                                    <div class="logout ms-lg-3">
                                        <?php if(isset($_SESSION["student"])): ?>
                                        <a class="btn btn-primary btn-sm me-lg-2" href="index.php?c=studentProfile">View profile</a>
                                        <?php endif; ?>
                                        <a class="btn btn-dark btn-sm" href="index.php?c=logout">Logout</a>
                                    </div>
                                </div>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="wrapper-main">