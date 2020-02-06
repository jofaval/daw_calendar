<!--Page configuration-->
<?php $optionalCSS = ["login.css", "floating-label.css", "inputs.css"];?>
<?php $optionalScripts = ["js/inputs.js"];?>
<?php $title = "LogIn";?>
<?php $mainClasses = "";?>
<?php $showFooter = false;?>
<?php $showHeader = false;?>
<?php $showBreadcrumb = false;?>
<?php $breadcrumb = [];?>

<?php ob_start()?>

<form method="POST" action="index.php?ctl=signin" class="form-signin p-4 bg-light rounded">
    <div class="text-center mb-4 text-dark">
        <h3>LogIn</h3>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
            aria-describedby="emailHelp" required="" autofocus="">
        <label for="inputEmail">Email address</label>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
            else.</small>
    </div>

    <div class="form-label-group d-flex justify-content-center align-items-center flex-wrap" id="show_hide_password">
        <input type="password" class="form-control col-md-11" id="inputPassword" aria-describedby="passwordHelp"
            placeholder="Password">
        <label for="inputPassword">Password (*)</label>
        <a href=""
            class="input-group-addon password-hide col-md-1 bg-warning text-dark d-flex justify-content-center align-items-center rounded">
            <i class="fa fa-eye-slash" aria-hidden="true"></i>
        </a>
        <small id="passwordHelp" class="form-text text-muted w-100">Alphanumeric combination, 8 to 24
            characters.</small>
    </div>

    <div class="checkbox mb-3 text-center">
        <a href="" class="float-left">
            Forgot password?
        </a>
        <a href="" class="float-right">
            You registered but can't login?
        </a>
        <br>
    </div>
    <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
</form>

<?php $contenido = ob_get_clean()?>

<?php include_once 'layout.php'?>