<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Horarios</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                                    <a class="nav-item nav-link active" href="index.php">Home</a>
                                    <?php if(empty($_SESSION["user"])){ ?>
                                    <a class="nav-item nav-link" href="index.php?c=login">Login</a>
                                    <a class="nav-item nav-link" href="index.php?c=register">Register</a>
                                    <?php }; ?>
                                </div>
                                <?php if(!empty($_SESSION["user"])){ ?>
                                <div class="logout">
                                    <a class="btn btn-primary" href="index.php?c=logout">Logout</a>
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