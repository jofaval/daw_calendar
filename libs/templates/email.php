<!--Page configuration-->
<?php $optionalCSS = ["login.css"];?>
<?php $optionalScripts = [];?>
<?php $title = "Error";?>
<?php $mainClasses = "";?>
<?php $showFooter = true;?>
<?php $showHeader = true;?>
<?php $showBreadcrumb = false;?>
<?php $breadcrumb = [];?>

<?php ob_start()?>

<?php if ($params["isInTime"]): ?>
<form action="" method="POST">
    <button class="btn btn-primary btn-lg">Confirmar email</button>
</form>
<?php else: ?>
<h3>The validation token already expired, we're sorry.</h3>
<?php endif;?>

<?php $contenido = ob_get_clean()?>

<?php include_once 'layout.php'?>