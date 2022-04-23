<?php  require_once('src/partials/header.php'); 

// print_r($this->student);
?> 

<!-- Formulario bootstrap -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <h1 class="mb-3"><?php echo $this->title; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto">
                <div class="card">
                    <div class="user-image text-center p-3" style="background-color: #00385a;">
                        <img width="200"  src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h2 class="mb-4 px-2"><?php echo '@'.$this->student['username']; ?></h2>
                        <form action="index.php?c=studentProfile&a=doUpdate" method="post">
                            <div class="form-group mb-3 px-2">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $this->student['username']; ?>" placeholder="Enter username">
                            </div>
                            <div class="d-lg-flex mb-3">
                                <div class="name w-50 px-2">
                                    <strong>Name: </strong><br>
                                    <p class="card-text"><?php echo $this->student['name']; ?></p>
                                </div>
                                <div class="surname w-50 px-2">
                                    <strong>Surname: </strong><br>
                                    <p class="card-text"><?php echo $this->student['surname']; ?></p>
                                </div>
                            </div>
                            <div class="d-lg-flex mb-3">
                                <div class="form-group mb-3 w-50 px-2">
                                    <label for="e-mail">Email address</label>
                                    <input type="text" class="form-control" name="e-mail" value="<?php echo $this->student['email']; ?>" placeholder="Enter email">
                                </div>
                                <div class="form-group mb-3 w-50 px-2">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" name="phone" value="<?php echo $this->student['telephone']; ?>" placeholder="Enter phone">
                                </div>
                            </div>
                            <div class="d-lg-flex mb-3">
                                <div class="form-group mb-3 w-50 px-2">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" name="pass" value="<?php echo $this->student['pass']; ?>" placeholder="Enter Password">
                                </div>
                                <div class="form-group mb-3 w-50 px-2">
                                    <label for="pass-repeat">Repeat password</label>
                                    <input type="password" class="form-control" name="pass-repeat" value="<?php echo $this->student['pass']; ?>" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="d-lg-flex mb-3">
                                <div class="nif w-50 px-2">
                                    <strong>Nif: </strong><br>
                                    <p class="card-text"><?php echo $this->student['nif']; ?></p>
                                </div>
                                <div class="date w-50 px-2">
                                    <strong>Date registered: </strong><br>
                                    <p class="card-text"><?php echo $this->student['date_registered']; ?></p>
                                </div>
                            </div>
                            <div class="px-2">
                                <button type="submit" class="btn btn-primary w-100 mt-4">Update</button>
                            </div>
                        </form>
                        <?php if(isset($this->msg)){ ?>
                        <div class="alert-wrapper mt-3">
                            <?php if($this->msg == "Record updated successfully") { ?>
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p><?php echo $this->msg; ?></p>
                            </div>
                            <?php }else { ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Uppss!</h4>
                                <p><?php echo $this->msg; ?></p>
                            </div>
                            <?php }; ?>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  require_once('src/partials/footer.php'); ?>