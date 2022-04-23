<?php  require_once('src/partials/header.php'); ?> 

<!-- Formulario bootstrap -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <h1 class="mb-3"><?php echo $this->title; ?></h1>
                <form action="index.php?c=login&a=doLogin" method="post">
                    <div class="mb-3">
                        <label for="e-mail" class="form-label">Email address</label>
                        <input type="text" class="form-control" name="e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <?php 
                    foreach($this->errors as $error)
                    echo '<p class="error text-danger mt-3">'.$error.'</p>';
                ?>
            </div>
        </div>
    </div>
</section>

<?php  require_once('src/partials/footer.php'); ?>