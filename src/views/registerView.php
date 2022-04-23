<?php  require_once('src/partials/header.php'); ?> 

<section>
    <?php if(!$this->status) {?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <h1 class="mb-3"><?php echo $this->title; ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="index.php?c=register&a=doRegister" method="post">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="new-name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="new-name">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-name'])) {
                            echo $this->errors['error-name']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-surname'])) {
                            echo $this->errors['error-surname']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-username'])) {
                            echo $this->errors['error-username']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="number" class="form-control" name="phone">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-phone'])) {
                            echo $this->errors['error-phone']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="nif" class="form-label">Nif</label>
                        <input type="text" class="form-control" name="nif">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-nif'])) {
                            echo $this->errors['error-nif']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="e-mail" class="form-label">Email address</label>
                        <input type="text" class="form-control" name="e-mail">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-email'])) {
                            echo $this->errors['error-email']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-pass'])) {
                            echo $this->errors['error-pass']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="repeat-pass" class="form-label">Repeat password</label>
                        <input type="password" class="form-control" name="repeat-pass">
                        <span class="text-danger mb-3">
                        <?php 
                        if(isset($this->errors['error-repeat-pass'])) {
                            echo $this->errors['error-repeat-pass']; 
                        ?>
                        </span>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <span class="text-danger mb-3">
                    <?php 
                    if(isset($this->errors['error-not-equal'])) {
                        echo $this->errors['error-not-equal']; 
                    ?>
                    </span>
                    <?php }; ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-lg-end">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>
    <?php }
    else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center">
                <h2 class="mb-3">Registration has been completed successfully!!</h2>
                <p>Please Login here</p>
                <a class="btn btn-primary" href="index.php?c=login">Login</a>
            </div>
        </div>
    </div>
    <?php } ?>
</section>

<?php  require_once('src/partials/footer.php'); ?>