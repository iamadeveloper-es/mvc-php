<?php  require_once('src/partials/header.php'); ?> 

<h1 class="text-center">Login</h1>
<form action="" method="post" id="login-form">
    <label for="e-mail">Email</label>
    <input type="email" name="e-mail" id="e-mail">
    <label for="e-mail">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>

<!-- Formulario bootstrap -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- FIN Formulario bootstrap -->
<?php  require_once('src/partials/footer.php'); ?>