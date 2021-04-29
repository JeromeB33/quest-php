<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: /login.php');
  exit();
}
$panier = $_SESSION['panier'];


?>

<section class="cookies container-fluid">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <?php foreach ($panier as $cookie) {
        echo '<img src="assets/img/product-'.$cookie.'.jpg" alt="' .$catalog[$cookie]['name']. '" class="img-responsive">';
        echo '<h3>'.$catalog[$cookie]['name'].'</h3>';
        echo '<p>'.$catalog[$cookie]['description'].'</p>';
    } ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
